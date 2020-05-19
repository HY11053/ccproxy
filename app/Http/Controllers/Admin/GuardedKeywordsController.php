<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GuardedKeywordsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    /**违禁词列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getGuardedKeywords()
    {
        if (Storage::exists('guarded.txt'))
        {
            $keywords=str_replace([PHP_EOL,"\r"],[',',''],Storage::get('guarded.txt'));
        }else{
            $keywords='';
        }
        return view('admin.guarded_keywords',compact('keywords'));
    }

    /**违禁词修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editGuardedKeywords()
    {
        if (Storage::exists('guarded.txt'))
        {
            $keywords=Storage::get('guarded.txt');
        }else{
            $keywords='';
        }
        return view('admin.guarded_edit_keywords',compact('keywords'));
    }

    /**违禁词修改处理
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postEditGuardedKeywords(Request $request)
    {
        $contents=array_unique(array_filter(explode(PHP_EOL,$request->contents)));
        if (!empty($contents))
        {
            if (Storage::exists('guarded.txt'))
            {
                Storage::delete('guarded.txt');
            }
            foreach ($contents as $content) {
                Storage::append('guarded.txt',str_replace([PHP_EOL,"\r"],'',$content));
            }
        }
        return redirect(action('Admin\GuardedKeywordsController@getGuardedKeywords'));
    }
}
