<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\Brandcontainer;
use App\AdminModel\Production;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Log;

class CheckToolsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    public function cheakUrls()
    {
        Brandarticle::where('created_at','>',Carbon::today())->where('created_at','<',Carbon::tomorrow())->orderBy('id')->chunk(100, function($articles) {
            foreach ($articles as $article)
            {
                echo "pages/brandarticle/brandarticle?index=".$article->id.'<br/>';
            }
        });

        Archive::where('created_at','>',Carbon::today())->where('created_at','<',Carbon::tomorrow())->orderBy('id')->chunk(100, function($carticles) {
            foreach ($carticles as $carticle)
            {
                echo "pages/article/article?index=".$carticle->id.'<br/>';
            }
        });


        /**
         * Arctype::where('mid',1)->orderBy('id')->chunk(100, function($categories) {
        foreach ($categories as $category)
        {
        echo "pages/blists/blists?real_path=".$category->real_path.'<br/>';
        }
        });
         *   Brandarticle::orderBy('id')->chunk(100, function($articles) {
        foreach ($articles as $article)
        {
        echo "http://www.jjedu.com.cn/xm/".$article->id.'.shtml'.' '."http://m.jjedu.com.cn/xm/".$article->id.'.shtml'.'<br/>';
        }
        });
        Archive::orderBy('id')->chunk(100, function($carticles) {
        foreach ($carticles as $carticle)
        {
        echo "http://www.jjedu.com.cn/news/".$carticle->id.'.shtml'.' '."http://m.jjedu.com.cn/news/".$carticle->id.'.shtml'.'<br/>';
        }
        });
         */

        /**
         * Arctype::where('mid',1)->orderBy('id')->chunk(100, function($categories) {
        foreach ($categories as $category)
        {
        echo "pages/blists/blists?real_path=".$category->real_path.'<br/>';
        }
        });
        Arctype::where('mid',0)->orderBy('id')->chunk(100, function($categories) {
        foreach ($categories as $category)
        {
        echo "pages/nlists/nlists?real_path=".$category->real_path.'<br/>';
        }
        });
         */
    }
    public function checkarticles()
    {
        $ids=Archive::pluck('id');
        foreach ($ids as $id)
        {
            $thisarticle=Archive::find($id);
            Archive::where('id',$id)->update(['keywords'=>$thisarticle->title,'description'=>str_limit(str_replace(['&nbsp;',' ','　',PHP_EOL,'\t'],'',strip_tags(htmlspecialchars_decode($thisarticle->body))), $limit = 240, $end = '')]);
        }
        $bids=Brandarticle::pluck('id');
        foreach ($bids as $bid)
        {
            $thisarticle=Brandarticle::find($bid);
            Brandarticle::where('id',$bid)->update(['keywords'=>$thisarticle->title,'description'=>str_limit(str_replace(['&nbsp;',' ','　',PHP_EOL,'\t'],'',strip_tags(htmlspecialchars_decode($thisarticle->body))), $limit = 240, $end = '')]);
        }
        $pids=Production::pluck('id');
        foreach ($pids as $pid)
        {
            $thisarticle=Production::find($pid);
            Production::where('id',$pid)->update(['keywords'=>$thisarticle->title,'description'=>str_limit(str_replace(['&nbsp;',' ','　',PHP_EOL,'\t'],'',strip_tags(htmlspecialchars_decode($thisarticle->body))), $limit = 240, $end = '')]);
        }
    }

    public function checkbrandsurls()
    {
        $brandurls=Brandarticle::where('ismake',1)->get();
        foreach ($brandurls as $archive)
        {
            echo str_replace('www.','mip.',config('app.url')).'/index.php/brand/'.$archive->id.'/'.'<br/>';
        }
    }


    public function updateBrands()
    {
        set_time_limit(0);
        $brandarticles=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id','>',468)->where('id','<',3610)->get();

        foreach ($brandarticles as $brandarticle) {
            $imagepics=substr($brandarticle->imagepics, 0, -1);
            Brandarticle::withoutGlobalScope(PublishedScope::class)->find($brandarticle->id)->update(['imagepics'=>$imagepics]);
        }
        echo '更新完毕！@！！';
        }
        private function randArrays(array $arrays,$nums,$falg='、')
        {
            $newarrays=array_rand($arrays,$nums);
            $strs='';
            foreach ($newarrays as $newarray)
            {
                 $strs.=$arrays[$newarray].$falg;
            }
            return $strs;
        }

        public function updateMipCache()
        {
            $api = 'https://c.mipcdn.com/update-ping/refreshcache';
            $postData =array(
                "host"=>'mip.51xxsp.com',
                "path"=>"/",
                "authkey"=>'6f3219a1939ebe41c9ebf4f3daa76de5'
            );
            $postData=json_encode($postData);
            $url = $api;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
            $result = curl_exec($ch);
            curl_close($ch);
            Log::info($result);
        }

    /**
     * 文档内容排版处理
     */
        public function updateArticleContent()
        {
            $brandArticleIds=Brandarticle::pluck('id');
            $pattens=[
            '#<p>[\n	]+<br />[\n]+</p>#',
            '#<p >[\n	]+<br />[\n]+</p>#',
            '#<p>[\n	]+<br/>[\n]+</p>#',
            '#<p >[\n	]+<br/>[\n]+</p>#',
            '#<p><br/></p>#',
            '#<p><br /></p>#',
            '#<p ><br/></p>#',
            '#<p ><br /></p>#',
            '#<p><strong><br/></strong></p>#',
            '#<p ><strong><br /></strong></p>#',
            '#<p>[\s| |　]?<strong>[\s| |　]?</strong></p>#',
            '#<p>[\s| |　]?<strong>[\s| |　]+</strong></p>#',
            '#<p>[\s| |　]+<strong>[\s| |　]+</strong></p>#',
            '#<p>[\s| |　|\n\r]?<br/>[\s| |　|\n\r]?</p>#',
            '#<p>[\s| |　|\n\r]+<br/>[\s| |　|\n\r]+</p>#',
            '#<p>[\s| |　|\n\r]+<br />[\s| |　|\n\r]+</p>#',
            '#<p><strong><br/></strong></p>#',
            '#<p><strong><br /></strong></p>#',
            '#<p><strong><br></strong></p>#',
            '#<p><br></p>#',
            '#<p><br ></p>#',
            '#<p><br /></p>#',
            '#<p>[\s| |　]?</p>#',
            '#<p>[\s| |　]+</p>#',
            ];
            foreach ($brandArticleIds as $brandArticleId)
            {
            $brandarticle=Brandarticle::find($brandArticleId);
            $body=preg_replace($pattens,'',$brandarticle->body);
            $jmxq_content=preg_replace($pattens,'',$brandarticle->jmxq_content);
            $ppjs_content=preg_replace($pattens,'',$brandarticle->ppjs_content);
            $lrfx_content=preg_replace($pattens,'',$brandarticle->lrfx_content);
            Brandarticle::where('id',$brandArticleId)->update(['body'=>$body,'jmxq_content'=>$jmxq_content,'ppjs_content'=>$ppjs_content,'lrfx_content'=>$lrfx_content]);
            }
            $articles=Archive::pluck('id');
            foreach ($articles as $article)
            {
                $thisarticle=Archive::find($article);
                $body=preg_replace($pattens,'',$thisarticle->body);
                Archive::where('id',$article)->update(['body'=>$body]);
            }
            echo '更新完成！！！';
        }

        public function updatteFlags()
        {
            $brandArticleIds=Archive::pluck('id');
            foreach ($brandArticleIds as $brandArticleId)
            {
                $brandarticle=Archive::find($brandArticleId);
                $flags=str_split($brandarticle->flags);
                $newflgs='';
                foreach ($flags as $flag)
                {
                    $newflgs.=$flag.',';
                }
                $newflgs=rtrim($newflgs,',');
                Archive::where('id',$brandarticle->id)->update(['flags'=>$newflgs]);
            }
        }

    /**
     * 更新文档对应品牌
     */
        public function checktoolBrandId()
        {
            $nullBrandArticles=Archive::where('brandid',0)->get();
            $brandNmaes=Brandarticle::where('brandname','<>','')->pluck('brandname');
            foreach ($nullBrandArticles as $nullBrandArticle)
            {
                foreach ($brandNmaes as $brandNmae)
                {
                    if (str_contains($nullBrandArticle,$brandNmae))
                    {
                        $thisArticlebdName=$brandNmae;
                        $thisArticlebdId=Brandarticle::where('brandname',$brandNmae)->value('id');
                        Archive::where('id',$nullBrandArticle->id)->update(['bdname'=>$thisArticlebdName,'brandid'=>$thisArticlebdId]);
                    }
                }
            }
            echo '更新完成！！！';

        }

    /**
     * 文档采集发布时间更新
     */

        public function updateArticleTime()
        {
            $articles=Archive::withoutGlobalScope(PublishedScope::class)->where('id','>',180)->pluck('id');
            foreach ($articles as $article) {

                Archive::withoutGlobalScope(PublishedScope::class)->where('id',$article)->update(['typeid'=>2,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now(),'published_at'=>Carbon::now()]);
            }
            echo '1';
        }

        public function BrandnameCr()
        {
            set_time_limit(0);
            $brands=Brandarticle::withoutGlobalScope(PublishedScope::class)->orderBy('id','desc')->get(['brandname']);
            foreach ($brands as $brand) {
                Storage::disk('public')->append('scbrands.txt', $brand->brandname);
            }
            echo '检测完毕';
        }

        public function ProcessTables()
        {
            $ids = Storage::get('id.txt');
            $fycontents = explode(PHP_EOL,Storage::get('fy.txt'));
            $lrcontents = explode(PHP_EOL,Storage::get('lr.txt'));
            foreach (explode(PHP_EOL,$ids) as $id)
            {
                $content=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->value('body');
                $explodecontents=explode('<h2',$content);
                foreach ($explodecontents as $index=>$explodecontent)
                {
                    if (str_contains($explodecontent,'</h2>'))
                    {
                        $explodecontent='<h2'.$explodecontent;
                        $explodecontents[$index]=$explodecontent;
                    }
                }
                foreach ($explodecontents as $explodecontent)
                {
                    if (str_contains($explodecontent,'<table'))
                    {
                        if (preg_match('#<h2.*?</h2>#',$explodecontent,$match))
                        {
                            if (str_contains($match[0],'钱') || str_contains($match[0],'费') || str_contains($match[0],'成本'))
                            {
                                $content=str_replace($explodecontent,$fycontents[array_rand($fycontents)],$content);
                            }elseif (str_contains($match[0],'利润')){
                                $content=str_replace($explodecontent,$lrcontents[array_rand($lrcontents)],$content);
                            }
                        }
                    }
                }
                $content=str_replace('{}',Brandarticle::where('id',$id)->value('brandname'),$content);
                Brandarticle::where('id',$id)->update(['body'=>$content]);
            }
            echo '替换表格完毕';
        }
}
