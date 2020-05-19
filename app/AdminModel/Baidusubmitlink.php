<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Baidusubmitlink extends Model
{
    protected $fillable=['remain','success','url','type','mid','success_realtime','remain_realtime','error','message'];
}
