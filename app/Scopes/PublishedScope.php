<?php

namespace App\Scopes;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class PublishedScope implements Scope
{
    /**
     * 应用作用域到给定的Eloquent查询构建器.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     * @translator laravelacademy.org
     */
    public function apply(Builder $builder, Model $model)
    {
        return $builder->where('published_at', '<', Carbon::now())->where('ismake',1);
    }
}