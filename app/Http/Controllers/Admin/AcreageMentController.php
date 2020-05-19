<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Acreagement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcreageMentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**投资分类列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function acreageMentList()
    {
        $acreagelists=Acreagement::all();
        return view('admin.acreagelists',compact('acreagelists'));
    }

    /**投资分类创建
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function acreageMentCreate()
    {
        return view('admin.acreage_create');
    }

    /**t投资分类创建处理
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postAcreageMentCreate(Request $request)
    {
        Acreagement::create($request->all());
        return redirect(action('Admin\AcreageMentController@acreageMentList'));
    }

    /**投资分类编辑
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function acreageMentEdit($id)
    {
        $thisacreagement=Acreagement::findOrFail($id);
        return view('admin.acreage_edit',compact('thisacreagement'));
    }

    /**t投资分类编辑处理
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postAcreageMentEdit(Request $request,$id)
    {
        Acreagement::where('id',$id)->update(['type'=>$request->input('type')]);
        return redirect(action('Admin\AcreageMentController@acreageMentList'));
    }
}
