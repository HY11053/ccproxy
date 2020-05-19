<?php

namespace App\Http\Controllers\Admin;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\Production;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticleTraslateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

}
