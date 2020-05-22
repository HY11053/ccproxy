<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IntroduceController extends Controller
{
    public function Introduce(){
        return view('frontend.introduce');
    }
}
