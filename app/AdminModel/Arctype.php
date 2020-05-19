<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Arctype extends Model
{
    //
    protected $guarded =['input-image','image','selectd'];
    public function setFillable($fillable)
    {
        $this->fillable = $fillable;
    }
    /**
     * Eloquent ORM 关联定义
     * @param
     *
     * @return arraydatas
     */
    protected function articles()
    {
        return $this->hasMany('App\AdminModel\Archive','typeid');
    }
    protected function addonarticle()
    {
        return $this->hasMany('App\AdminModel\Addonarticle','typeid');
    }
    protected function brandarticle()
    {
        return $this->hasMany('App\AdminModel\Brandarticle','typeid');
    }
    protected function productionarticle()
    {
        return $this->hasMany('App\AdminModel\Production','typeid');
    }
}
