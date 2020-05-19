<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\BrandType;
use App\Http\Requests\CreateBrandTypeRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }


    /**品牌分类列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function brandTypeLIst()
    {
        $brandtypelists=BrandType::all();
        return view('admin.brandtypelists',compact('brandtypelists'));
    }
    /**品牌分类添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function brandTypeCreate()
    {
        return view('admin.brandtypecreate');
    }

    /**品牌类型添加处理
     * @param CreateBrandTypeRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postBrandTypeCreate(CreateBrandTypeRequest $request)
    {
        BrandType::create($request->all());
        return redirect(action('Admin\BrandTypeController@brandTypeLIst'));
    }

    /**品牌类型编辑
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function brandTypeEdit($id)
    {
        $thisbrandtype=BrandType::findOrFail($id);
        return view('admin.brandtypedit',compact('thisbrandtype'));
    }

    /**品牌类型编辑处理
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postBrandTypeEreate(Request $request,$id)
    {
        BrandType::where('id',$id)->update(['brandname'=>$request->brandname,'brandtype'=>$request->brandtype]);
        return redirect(action('Admin\BrandTypeController@brandTypeLIst'));
    }

    /**品牌类型删除
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function brandTypeDelete($id)
    {
        BrandType::where('id',$id)->delete();
        return redirect(action('Admin\BrandTypeController@brandTypeLIst'));
    }
}
