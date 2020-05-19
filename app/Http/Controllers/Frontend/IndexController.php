<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\AdminModel\flink;
use App\AdminModel\InvestmentType;
use App\AdminModel\Production;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    function Index()
    {
        //最新加盟项目
        $latestbrands=Cache::remember('index_latestbrands', 60, function(){
            return Brandarticle::latest()->take(14)->orderBy('id','desc')->get(['id','brandname','tzid']);
        });
        return view('frontend.index');
    }
}
