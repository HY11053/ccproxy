<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Answer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    public function AnswerLists()
    {
        $answerlists=Answer::paginate(30);
        return view('admin.answerlists',compact('answerlists'));
    }
    public function AnswerPending()
    {
        $answerlists=Answer::where('is_hidden',0)->paginate(30);
        return view('admin.answerlists',compact('answerlists'));
    }
    function AnswerEdit($id)
    {
        $thisanswerinfo=Answer::findOrFail($id);
        return view('admin.answeredit',compact('thisanswerinfo'));

    }
    function PostEdit(Request $request,$id)
    {
        //dd($request->all());
        Answer::find($id)->update($request->all());
        return redirect()->route('answerlists');
    }
    function AnswerDetete($id)
    {
        Answer::find($id)->delete();
        return redirect()->route('answerlists');
    }
}
