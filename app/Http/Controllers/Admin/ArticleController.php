<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Acreagement;
use App\AdminModel\Admin;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\AdminModel\InvestmentType;
use App\Events\ArticleCacheCreateEvent;
use App\Events\ArticleCacheDeleteEvent;
use App\Events\BaiduCurlLinkSubmitEvent;
use App\Events\BrandArticleCacheCreateEvent;
use App\Events\BrandArticleCacheDeleteEvent;
use App\Http\Requests\CreateArticleRequest;
use App\Helpers\UploadImages;
use App\Http\Requests\CreateBrandArticleRequest;
use App\Notifications\ArticlePublishedNofication;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Log;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**文档列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Index()
    {
        $articles = Archive::withoutGlobalScope(PublishedScope::class)->orderBy('id','desc')->paginate(30);
        return view('admin.article',compact('articles'));
    }

    /**品牌文档查看
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Brands()
    {
        $articles=Brandarticle::withoutGlobalScope(PublishedScope::class)->orderBy('id','desc')->paginate(30);
        return view('admin.brandarticle',compact('articles'));
    }
    /**品牌文档搜索
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function PostArticleBrandSearch(Request $request)
    {
        $articles=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('title','like','%'.$request->input('title').'%')->latest()->paginate(30);
        $title=$request->title;
        if(!$articles->total()){
            $this->GuardTitle($title);
        }
        return view('admin.brandarticle',compact('articles','title'));
    }

    /**普通文档创建
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Create()
    {
        $allnavinfos=Arctype::where('is_write',1)->where('mid',0)->pluck('typename','id');
        return view('admin.article_create',compact('allnavinfos'));
    }

    /**品牌文档创建
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function BrandCreate()
    {
        $allnavinfos=Arctype::where('is_write',1)->where('mid',1)->pluck('typename','id');
        $investments=InvestmentType::orderBy('id','asc')->pluck('type','id');
        $acreagements=Acreagement::orderBy('id','asc')->pluck('type','id');
        return view('admin.article_brandcreate',compact('allnavinfos','investments','acreagements'));
    }

    /**文档创建提交数据处理
     * @param CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function PostCreate(CreateArticleRequest $request)
    {
        if(Archive::withoutGlobalScope(PublishedScope::class)->where('title',$request->title)->value('id'))
        {
            exit('标题重复，禁止发布');
        }
        if (!empty($request['bdname']))
        {
            $brandinfos=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake',1)->where('brandname','like','%'.$request['bdname'].'%')->first(['id','published_at']);
            if (isset($brandinfos->id))
            {
                $request['brandid']=$brandinfos->id;
                if ( Carbon::parse($brandinfos->published_at)>Carbon::now())
                {
                    $request['published_at']=Carbon::parse($brandinfos->published_at)->addMinutes(rand(1,300))->addSeconds(rand(1,59));
                }
            }else{
                $request['brandid']=0;
            }
        }
        $this->RequestProcess($request);
        if ( Archive::create($request->all())->wasRecentlyCreated)
        {
            //百度相关数据提交
            $thisarticle=Archive::withoutGlobalScope(PublishedScope::class)->latest()->first();
            if ($thisarticle->published_at>Carbon::now() || $thisarticle->ismake !=1)
            {
                auth('admin')->user()->notify(new ArticlePublishedNofication($thisarticle));
                return redirect(action('Admin\ArticleController@Index'));
            }else{
                $thisarticleurl=config('app.url').'/news/'.$thisarticle->id.'.shtml';
                event(new BaiduCurlLinkSubmitEvent($thisarticleurl));
                Archive::where('id',$thisarticle->id)->update(['ispush'=>1]);
                //auth('admin')->user()->notify(new ArticlePublishedNofication($thisarticle));
                event(new ArticleCacheCreateEvent(Archive::latest() ->first()));
                return redirect(action('Admin\ArticleController@Index'));
            }
        }
    }

    /**
     * 品牌文档提交处理
     * @param CreateBrandArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function PostBrandArticle(CreateBrandArticleRequest $request)
    {
        if(Brandarticle::withoutGlobalScope(PublishedScope::class)->where('title',$request->title)->value('id'))
        {
            exit('标题重复，禁止发布');
        }
        $this->RequestProcess($request);
        if(!Admin::where('id',auth('admin')->id())->value('type'))
        {
            $request['ismake']=0;
        }
        /**
         * if(isset($request['imagepics']) && empty($request['imagepics']))
        {
        $request['imagepics']=$this->processImagepics($request->body);
        }
         */
        if (Brandarticle::create($request->all())->wasRecentlyCreated)
        {
            $thisarticle=Brandarticle::withoutGlobalScope(PublishedScope::class)->latest()->first();
            if ($thisarticle->published_at>Carbon::now() || $thisarticle->ismake !=1)
            {
                return redirect(action('Admin\ArticleController@Brands'));
            }else{
                $thisarticleurl=config('app.url').'/xm/'.$thisarticle->id.'.shtml';
                event(new BaiduCurlLinkSubmitEvent($thisarticleurl));
                Brandarticle::where('id',$thisarticle->id)->update(['ispush'=>1]);
                event(new BrandArticleCacheCreateEvent($thisarticle));
                return redirect(action('Admin\ArticleController@Brands'));
            }
        }
    }

    /**普通文档文档编辑
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Edit($id)
    {
        $articleinfos=Archive::withoutGlobalScope(PublishedScope::class)->findOrfail($id);
        $allnavinfos=Arctype::where('is_write',1)->where('mid',0)->pluck('typename','id');
        $pics=explode(',',trim(Archive::withoutGlobalScope(PublishedScope::class)->where('id',$id)->value('imagepics'),','));
        return view('admin.article_edit',compact('id','articleinfos','allnavinfos','pics'));
    }
    public function BrandEdit($id)
    {
        $allnavinfos=Arctype::where('is_write',1)->where('mid',1)->pluck('typename','id');
        $pics=explode(',',trim(Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->value('imagepics'),','));
        $articleinfos=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->first();
        if (empty($articleinfos)){
            abort(404);
        }
        /*if ($articleinfos->dutyadmin==1 && $articleinfos->editor_id==0 &&  Admin::where('id',auth('admin')->id())->value('type')==0)
        {
            exit('文档未领取,不能直接编辑');
        }*/
        if ($articleinfos->editor_id!=0 && $articleinfos->editor_id !=auth('admin')->id() &&  Admin::where('id',auth('admin')->id())->value('type')==0)
        {
            exit('文档不属于当前用户或您不是管理员，不能编辑');
        }
        $investments=InvestmentType::orderBy('id','asc')->pluck('type','id');
        $acreagements=Acreagement::orderBy('id','asc')->pluck('type','id');
        return view('admin.article_brandedit',compact('id','articleinfos','allnavinfos','pics','investments','acreagements'));
    }

    /**文档编辑提交处理
     * @param CreateArticleRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function PostEdit(CreateArticleRequest $request,$id)
    {
        if (!empty($request['bdname']))
        {
            $brandinfos=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake',1)->where('brandname','like','%'.$request['bdname'].'%')->first(['id','published_at']);
            if (isset($brandinfos->id))
            {
                $request['brandid']=$brandinfos->id;
                if ( Carbon::parse($brandinfos->published_at)>Carbon::now())
                {
                    $request['published_at']=Carbon::parse($brandinfos->published_at)->addMinutes(rand(1,300))->addSeconds(rand(1,59));
                }
            }else{
                $request['brandid']=0;
            }
        }
        $this->RequestProcess($request);
        $thisarticleinfos=Archive::withoutGlobalScope(PublishedScope::class)->findOrFail($id);
        $request['write']=$thisarticleinfos->write;
        $request['dutyadmin']=$thisarticleinfos->dutyadmin;
        if ($thisarticleinfos->ismake || $thisarticleinfos->published_at>Carbon::now() || $request->ismake !=1 ||  Carbon::createFromFormat('Y-m-d',date('Y-m-d',strtotime($request['published_at']))) > Carbon::now())
        {
            Archive::withoutGlobalScope(PublishedScope::class)->findOrFail($id)->update($request->all());
            event(new ArticleCacheCreateEvent($thisarticleinfos));
            return redirect(action('Admin\ArticleController@Index'));
        }else{
            $request['created_at']=Carbon::now();
            $request['updated_at']=Carbon::now();
            $request['ispush']=1;
            Archive::withoutGlobalScope(PublishedScope::class)->findOrFail($id)->update($request->all());
            $thisarticleurl=config('app.url').'/news/'.$thisarticleinfos->id.'.shtml';
            event(new BaiduCurlLinkSubmitEvent($thisarticleurl));
            event(new ArticleCacheCreateEvent($thisarticleinfos));
            return redirect(action('Admin\ArticleController@Index'));
        }
    }

    public function PostBrandArticleEditor(CreateBrandArticleRequest $request,$id)
    {
        $this->RequestProcess($request);
        /**
         * if(isset($request['imagepics']) && empty($request['imagepics']))
        {
        $request['imagepics']=$this->processImagepics($request->body);
        }
         */
        $thisarticleinfos=Brandarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($id);
        $request['write']=$thisarticleinfos->write;
        $request['dutyadmin']=$thisarticleinfos->dutyadmin;
        if ($thisarticleinfos->ismake || $thisarticleinfos->published_at>Carbon::now() || $request->ismake !=1 || Carbon::createFromFormat('Y-m-d',date('Y-m-d',strtotime($request['published_at']))) > Carbon::now())
        {
            Brandarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($id)->update($request->all());
            event(new BrandArticleCacheCreateEvent($thisarticleinfos));
            return redirect(action('Admin\ArticleController@Brands'));
        }else{
            $request['created_at']=Carbon::now();
            $request['updated_at']=Carbon::now();
            $request['ispush']=1;
            Brandarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($id)->update($request->all());
            $thisarticleurl=config('app.url').'/xm/'.$thisarticleinfos->id.'.shtml';
            event(new BaiduCurlLinkSubmitEvent($thisarticleurl));
            event(new BrandArticleCacheCreateEvent($thisarticleinfos));
            return redirect(action('Admin\ArticleController@Brands'));
        }
    }

    /**
     *自定义文档属性及缩略图处理
     * @param Request $request
     * @return Request
     */
    private function RequestProcess(Request $request)
    {
        $request['keywords']=$request['keywords']?$request['keywords']:$request['title'];
        $request['click']=rand(100,900);
        $request['description']=(!empty($request['description']))?str_limit($request['description'],180,''):str_limit(str_replace(['&nbsp;',' ','　',PHP_EOL,'\t'],'',strip_tags(htmlspecialchars_decode($request['body']))), $limit = 180, $end = '');
        $request['write']=auth('admin')->user()->name;
        $request['dutyadmin']=auth('admin')->id();
        $request['body']=str_replace('<h2></h2>','',$request->body);
        //自定义文档属性处理
        if(isset($request['flags']))
        {
            $request['flags']=UploadImages::Flags($request['flags']);
        }
        //缩略图处理
        if($request['image'])
        {
            $request['litpic']=UploadImages::UploadImage($request,'image');
            if(empty($request['flags']))
            {
                $request['flags'].='p';
            }else{
                $request['flags'].=',p';
            }
        }elseif (isset($request['litpic']) && !empty($request['litpic']))
        {
            $request['litpic']=$request['litpic'];
        }elseif (preg_match('/<[img|IMG].*?src=[\' | \"](.*?(?:[\.jpg|\.jpeg|\.png|\.gif|\.bmp]))[\'|\"].*?[\/]?>/i',$request['body'],$match)){
            $request['litpic']=$match[1];
            if(empty($request['flags']))
            {
                $request['flags'].='p';
            }else{
                $request['flags'].=',p';
            }
        }
        //首页推荐图处理
        if($request['indexlitpic']) {
            $request['indexpic'] = UploadImages::UploadImage($request, 'indexlitpic');
        }
        //图集处理
        $request['imagepics']=rtrim($request->input('imagepics'),',');
        return $request;

    }

    /**品牌图集提取
     * @param $content
     * @return string
     */
    private function processImagepics($content)
    {
        preg_match_all("/<img(.*)src=\"([^\"]+)\"[^>]+>/isU", $content, $matches);
        if (isset($matches[2]) && !empty($matches[2]) ) {
            $imagepics = array_slice($matches[2],0,4);
            $pics='';
            foreach ($imagepics as $imagepic) {
                $pics.=$imagepic.',';
            }
            return trim($pics,',');
        }
    }
    /**当前用户发布的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function OwnerShip()
    {
        $articles = Archive::withoutGlobalScope(PublishedScope::class)->where('dutyadmin',auth('admin')->user()->id)->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }
    /**当前用户发布的品牌文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function BrandArticleOwnerShip()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('dutyadmin',auth('admin')->user()->id)->latest()->paginate(30);
        return view('admin.brandarticle',compact('articles'));
    }


    /**等待审核的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PendingAudit()
    {
        $articles = Archive::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }
    /**等待审核的品牌文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PendingAuditBrandarticle()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->latest()->paginate(30);
        return view('admin.brandarticle',compact('articles'));
    }

    /**品牌文档领取中心
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function BrandarticlesReceive()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('dutyadmin',1)->where('editor_id','<',1)->orderBy('id','asc')->paginate(30);
        return view('admin.brand_article_receive',compact('articles'));
    }
    public function Brandreceives()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('editor_id','<>',0)->orderBy('id','asc')->paginate(30);
        return view('admin.brand_received',compact('articles'));
    }
    /**品牌文档领取异步更新
     * @param $id
     */
    public function UpdateBrabdReceive($id)
    {
        if (!Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->value('editor_id'))
        {
            Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('dutyadmin',1)->where('editor_id',0)->where('id',$id)->update(['editor'=>auth('admin')->user()->name,'editor_id'=>auth('admin')->id(),'received_at'=>Carbon::now()]);
            return [auth('admin')->user()->name,'已成功领取品牌'];
        }else{
            return [Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->value('editor'),'已经领取过该品牌，不可重复领取'];
        }

    }

    /**我已领取的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function ownBrandarticleRecevied(){
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('editor_id',auth('admin')->id())->latest()->paginate(30);
        return view('admin.brand_received',compact('articles'));
    }

    /**已领取未修改品牌汇总
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function BrandReceivednoMod()
    {
        /**批量清理退回数据
         *  $updateArticles=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('editor_id','<>',0)->where('isedit',0)->orderBy('id','asc')->get();
        foreach ($updateArticles as $article)
        {
        Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$article->id)->update(['editor_id'=>0,'editor'=>null,'received_at'=>null]);
        }
         */
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('editor_id','<>',0)->where('isedit',0)->orderBy('id','asc')->paginate(30);
        return view('admin.brand_received',compact('articles'));
    }
    /**已领取已修改品牌汇总
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function BrandReceivedModedNomake()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('editor_id','<>',0)->where('isedit',1)->orderBy('id','asc')->paginate(30);
        return view('admin.brand_received',compact('articles'));
    }

    /**等待发布的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PedingPublished(){
        $articles = Archive::withoutGlobalScope(PublishedScope::class)->where('published_at','>',Carbon::now())->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }

    /**待发布的品牌
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function PedingBrands()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('published_at','>',Carbon::now())->latest()->paginate(30);
        return view('admin.brandarticle',compact('articles'));
    }

    /**普通文档删除
     * @param $id
     * @return string
     */
    function DeleteArticle($id)
    {
        if(auth('admin')->user()->id)
        {
            event(new ArticleCacheDeleteEvent(Archive::withoutGlobalScope(PublishedScope::class)->where('id',$id)->first()));
            Archive::withoutGlobalScope(PublishedScope::class)->where('id',$id)->delete();
            return '删除成功';
        }else{
            return '无权限执行此操作！';
        }
    }

    /**批量删除普通文档
     * @param Request $request
     * @return string
     */
    function DeleteArticles(Request $request)
    {
        if(auth('admin')->user()->id && auth('admin')->user()->type==1)
        {
            foreach (json_decode($request->ids,true) as $id){
                event(new ArticleCacheDeleteEvent(Archive::withoutGlobalScope(PublishedScope::class)->where('id',$id)->first()));
                Archive::withoutGlobalScope(PublishedScope::class)->where('id',$id)->delete();
            }
            return '删除成功';
        }else{
            return '无权限执行此操作！';
        }
    }

    /**批量修改普通文档分类
     * @param Request $request
     * @return string
     */
    public function EditArticlesType(Request $request){
        if(auth('admin')->user()->id && auth('admin')->user()->type==1)
        {
            foreach (json_decode($request->ids,true) as $id){
                Archive::withoutGlobalScope(PublishedScope::class)->where('id',$id)->update(['typeid'=>$request->typeid]);
                $thisarticleinfos=Archive::withoutGlobalScope(PublishedScope::class)->findOrFail($id);
                event(new ArticleCacheCreateEvent($thisarticleinfos));
            }
            return '修改成功';
        }else{
            return '无权限执行此操作！';
        }
    }

    /**品牌文档删除
     * @param $id
     * @return string
     */
    public function DeleteBrandArticle($id)
    {
        if(auth('admin')->user()->id)
        {
            event(new BrandArticleCacheDeleteEvent(Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->first()));
            Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->delete();
            return '删除成功';
        }else{
            return '无权限执行此操作！';
        }
    }

    /**批量删除品牌文档
     * @param Request $request
     * @return string
     */
    public function DeleteBrandArticles(Request $request)
    {
        if(auth('admin')->user()->id)
        {
            foreach (json_decode($request->ids,true) as $id) {
                event(new BrandArticleCacheDeleteEvent(Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id', $id)->first()));
                Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id', $id)->delete();
            }
            return '删除成功';
        }else{
            return '无权限执行此操作！';
        }
    }

    /**批量修改品牌文档分类
     * @param Request $request
     * @return string
     */
    public function EditBrandarticlesType(Request $request){
        if(auth('admin')->user()->id && auth('admin')->user()->type==1)
        {
            foreach (json_decode($request->ids,true) as $id){
                Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->update(['typeid'=>$request->typeid]);
                $thisarticleinfos=Brandarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($id);
                event(new BrandArticleCacheCreateEvent($thisarticleinfos));
            }
            return '修改成功';
        }else{
            return '无权限执行此操作！';
        }
    }

    /**文档搜索
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PostArticleSearch(Request $request)
    {
        $articles=Archive::withoutGlobalScope(PublishedScope::class)->where('title','like','%'.$request->input('title').'%')->latest()->paginate(30);
        $title=$request->title;
        if(!$articles->total()){
            $this->GuardTitle($title);
        }
        return view('admin.article',compact('articles','title'));
    }

    private function GuardTitle($title){
        if (Storage::exists('guarded.txt'))
        {
            $filtertitles=array_unique(array_filter(explode(PHP_EOL,Storage::get('guarded.txt'))));
            foreach ($filtertitles as $filtertitle)
            {
                if (str_contains($title,str_replace([PHP_EOL,"\r"],'',trim($filtertitle))) || str_contains(trim($filtertitle),str_replace([PHP_EOL,"\r"],'',$title)))
                {
                    exit($title.'违禁词，不允许发布');
                }
            }
        }
    }

    /** 栏目文章查看
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Type($id)
    {
        switch (Arctype::where('id',$id)->value('mid'))
        {
            case 0:
                $articles=Archive::withoutGlobalScope(PublishedScope::class)->where('typeid',$id)->latest()->paginate(30);
                $view='admin.article';
                break;
            case 1:
                $articles=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('typeid',$id)->latest()->paginate(30);
                $view='admin.brandarticle';
                break;
        }
        return view($view,compact('articles'));
    }



    /**重复标题检测
     * @param Request $request
     * @return int
     */
    public function ArticletitleCheck(Request $request)
    {
        $title=Archive::withoutGlobalScope(PublishedScope::class)->where('title',$request->input('title'))->value('title');
        if (!$title)
        {
            $title=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('title',$request->input('title'))->value('title');
        }
        if (Storage::exists('guarded.txt'))
        {
            $filtertitles=array_unique(array_filter(explode(PHP_EOL,Storage::get('guarded.txt'))));
            foreach ($filtertitles as $filtertitle)
            {
                if (str_contains($request->input('title'),str_replace([PHP_EOL,"\r"],'',trim($filtertitle))))
                {
                    $title='违禁词，不允许发布';
                }
            }
        }
        return $title;
    }

}
