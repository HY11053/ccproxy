<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\CommentReversion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentReversionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    public function Index ()
    {
        $commensreversions=CommentReversion::latest()->paginate(10);
        return view('admin.commentreversion',compact('commensreversions'));
    }
    public function Pending ()
    {
        $commensreversions=CommentReversion::where('is_hidden',0)->latest()->paginate(10);
        return view('admin.commentreversion',compact('commensreversions'));
    }
    public function ReversionEdit($id)
    {
        $thiscommentreversion=CommentReversion::findOrFail($id);
        return view('admin.commentreversion_edit',compact('thiscommentreversion'));
    }
    public function PostReversionEdit(Request $request,$id)
    {
        CommentReversion::find($id)->update($request->all());
        return redirect()->route('reversionlists');

    }
    public function ReversionDelete($id)
    {
        CommentReversion::findOrFail($id)->delete();
        return redirect()->route('reversionlists');

    }
}
