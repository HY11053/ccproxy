<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VsController extends Controller
{
    public function Vs(){
        return view('frontend.vs');
    }
}
