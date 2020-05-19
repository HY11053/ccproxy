<?php

namespace App\AdminModel;

use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Brandarticle extends Model
{
    protected $guarded = ['imagepic','xiongzhang','updatetime','image','indexlitpic','input-image'];

    /**
     * 文档入库之前的时间格式转换
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        if(!empty($date) && strpos($date,':')==false)
        {
            $this->attributes['published_at'] =  Carbon::createFromFormat('Y-m-d',$date)->addHours(rand(1,24))->addMinutes(rand(1,60));
        }else{
            $this->attributes['published_at'] =$date?$date : Carbon::now();
        }
    }

    /**违禁词过滤title
     * @param $title
     */
    public function setTitleAttribute($title)
    {
        if (Storage::exists('guarded.txt'))
        {
            $filtertitles=array_unique(array_filter(explode(PHP_EOL,Storage::get('guarded.txt'))));
            foreach ($filtertitles as $filtertitle)
            {
                if (str_contains($title,str_replace([PHP_EOL,"\r"],'',$filtertitle)))
                {
                    exit('标题：'.$title.'为违禁词，不允许发布');
                }
            }
        }
        $this->attributes['title']=$title;
    }
    /**违禁词过滤brandname
     * @param $title
     */
    public function setBrandnameAttribute($brandname)
    {
        if (Storage::exists('guarded.txt'))
        {
            $filtertitles=array_unique(array_filter(explode(PHP_EOL,Storage::get('guarded.txt'))));
            foreach ($filtertitles as $filtertitle)
            {
                if (str_contains($brandname,str_replace([PHP_EOL,"\r"],'',$filtertitle)))
                {
                    exit('品牌名称：'.$brandname.'为违禁词，不允许发布');
                }
            }
        }
        $this->attributes['brandname']=$brandname;
    }
    /**
     * 全局scope定义
     */
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new PublishedScope);
    }
    /**栏目关联定义
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function arctype()
    {
        return $this->belongsTo('App\AdminModel\Arctype','typeid');
    }
}
