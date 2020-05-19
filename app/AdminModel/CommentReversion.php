<?php

namespace App\AdminModel;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CommentReversion extends Model
{
    protected $fillable=['content','comment_id','archive_id','user_id','good_post','is_hidden','ip'];
    public function getUpdatedAtAttribute($date)
    {

        if (Carbon::now() > Carbon::parse($date)->addDays(10))
        {
            return date('Y-m-d',strtotime($date));
        }

        return Carbon::parse($date)->diffForHumans();
    }
    public function comments()
    {
        return $this->belongsTo('App\AdminModel\Archive','comment_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

}
