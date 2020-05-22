<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function Donwload(){
        return view('frontend.download');
    }
}
