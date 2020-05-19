<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable=[
      'id','parentid','regionname','type'
    ];
}
