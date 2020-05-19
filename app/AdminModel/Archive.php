<?php

namespace App\AdminModel;

use App\Scopes\PublishedScope;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class Archive extends Model
{
    protected $guarded = ['xiongzhang','image','updatetime','input-image'];
    protected $dates = ['published_at'];
    /**
     * 全局scope定义
     */
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new PublishedScope);
    }
    /**
     * 文档入库之前的时间格式转换
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        if(!empty($date) && strpos($date,':')==false)
        {
            $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date)->addHours(rand(1,24))->addMinutes(rand(1,60));
        }else{
            $this->attributes['published_at'] =$date?$date : Carbon::now();
        }
    }
    /**违禁词过滤
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
                    exit($title.'为违禁词，不允许发布');
                }
            }
        }
        $this->attributes['title']=$title;
    }

    /**图片默认缩略图定义
     * @return mixed|string
     */
    public function getLitpicAttribute($litpic)
    {
        return $litpic?$litpic:'/frontend/images/nopic.png';
    }

    public function scopePublished($query)
    {
        $query->where('published_at','<=',Carbon::now());
    }

    /**Eloquent ORM 栏目关联定义
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function arctype()
    {
        return $this->belongsTo('App\AdminModel\Arctype','typeid');
    }

    /**Eloquent ORM 评论关联定义
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    protected function comments()
    {
        return $this->hasMany('App\AdminModel\Comments','id');
    }
}
