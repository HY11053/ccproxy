<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Baidusubmitlink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaiduLinkSubmitController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    /**百度链接推送结果展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function LinkResults()
    {
        $articles=Baidusubmitlink::latest()->orderBy('id','desc')->paginate(30);
        return view('admin.linkresults',compact('articles'));
    }
}
