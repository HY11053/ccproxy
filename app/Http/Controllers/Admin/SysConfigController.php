<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SysConfigController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    //
    function Index()
    {
        return view('admin.sysconfig');
    }
    function Info()
    {
        return view('admin.sysinfo');
    }
}
