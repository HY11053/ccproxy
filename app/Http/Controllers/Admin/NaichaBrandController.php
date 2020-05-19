<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Brandcontainer;
use App\AdminModel\BrandType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
class NaichaBrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    /**品牌导入视图 txt
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function brandsImport()
    {
        $brandtypes=BrandType::pluck('brandname','brandtype');
        return view('admin.import_brands',compact('brandtypes'));
    }

    /**品牌数据导入处理 txt
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postBrandsImport(Request $request)
    {
        $brands=explode(PHP_EOL,trim($request->input('content')));
        foreach ($brands as $brand)
        {
            if(!empty($brand) && empty(Brandcontainer::where('brand',$brand)->value('brand')))
            {
                Brandcontainer::create(['brand'=>$brand,'type'=>$request->input('type'),'num'=>1,'status'=>3]);
            }else{
                Brandcontainer::where('brand',Brandcontainer::where('brand',$brand)->value('brand'))->update(['num'=>Brandcontainer::where('brand',$brand)->value('num')+1]);
            }
        }
        return redirect(action('Admin\NaichaBrandController@brandListsView'));
    }



    /**品牌视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function brandListsView(Request $request)
    {
        $arguments=$request->all();
        $brandtypes=BrandType::pluck('brandname','brandtype');
        $datas=Brandcontainer::when($request->input('type'), function ($query) use ($request) {
            return $query->where('type', $request->input('type'));
        })->when($request->input('status') , function ($query) use ($request) {
            return $query->where('status', $request->input('status'));
        })->orderBy('id','asc')->paginate(50);
        return view('admin.brands',compact('datas','arguments','brandtypes'));
    }



    /**品牌状态操作
     * @param Request $request
     * @return string
     */
    public function Status(Request $request)
    {
        Brandcontainer::where('id',$request->id)->update(['status'=>1]);
        return '已使用';
    }

    /**删除品牌
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Delete($id)
    {
        Brandcontainer::where('id',$id)->delete();
        return redirect()->back();
    }
}
