<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable=['ask_id','user_id','content','goodpost','is_hidden','ip'];
    public function ask()
    {
        return $this->belongsTo('App\AdminModel\Ask','ask_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
