<?php

namespace App\AdminModel;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable=['content','archive_id','ip','user_id','is_hidden'];
    public function getUpdatedAtAttribute($date)
    {

        if (Carbon::now() > Carbon::parse($date)->addDays(10))
        {
            return date('Y-m-d',strtotime($date));
        }

        return Carbon::parse($date)->diffForHumans();
    }
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function archive()
    {
        return $this->belongsTo('App\AdminModel\Archive','archive_id');
    }
    protected function reversion()
    {
        return $this->hasMany('App\AdminModel\CommentReversion','comment_id');
    }

}
