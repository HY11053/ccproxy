<?php

namespace App\Console\Commands;

use App\AdminModel\Archive;
use App\AdminModel\Brandarticle;
use App\Events\BaiduCurlLinkSubmitEvent;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ArticleSchedulRelease extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'article:schedule';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Article schedule release';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->ArtickeScheduleRelease();
        $this->BrandArticleScheduleRelease();
    }
    /**
     * 定时发布普通文档提交审核
     */
    private function ArtickeScheduleRelease()
    {
        $articles=Archive::withoutGlobalScope(PublishedScope::class)->where('published_at','<',Carbon::now())->where('ismake',1)->where('ispush',0)->get(['id','published_at','updated_at','created_at','ispush','ismake']);
        foreach ($articles as $article) {
            $request['ispush']=1;
            $request['created_at']=Carbon::now();
            $request['updated_at']=Carbon::now();
            Archive::withoutGlobalScope(PublishedScope::class)->findOrFail($article->id)->update($request);
            $thisarticleurl = config('app.url') . '/news/' . $article->id . '.shtml';
            event(new BaiduCurlLinkSubmitEvent($thisarticleurl,'定时任务'));
        }
    }
    /**
     * 品牌文档定时发布提交处理
     */
    private function BrandArticleScheduleRelease()
    {
        $brandarticles=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('published_at','<',Carbon::now())->where('ismake',1)->where('ispush',0)->get(['id','published_at','updated_at','created_at','ispush','ismake']);
        foreach ($brandarticles as $brandarticle)
        {
            $request['ispush']=1;
            $request['created_at']=Carbon::now();
            $request['updated_at']=Carbon::now();
            Brandarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($brandarticle->id)->update($request);
            $thisarticleurl=config('app.url').'/xm/'.$brandarticle->id.'.shtml';
            event(new BaiduCurlLinkSubmitEvent($thisarticleurl,'定时任务'));
        }
    }
}
