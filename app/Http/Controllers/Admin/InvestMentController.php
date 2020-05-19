<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\InvestmentType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvestMentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**投资分类列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function InvestMentList()
    {
        $investlists=InvestmentType::all();
        return view('admin.investlists',compact('investlists'));
    }

    /**投资分类创建
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function InvestMentCreate()
    {
        return view('admin.investcreate');
    }

    /**t投资分类创建处理
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postInvestMentCreate(Request $request)
    {
        InvestmentType::create($request->all());
        return redirect(action('Admin\InvestMentController@InvestMentList'));
    }

    /**投资分类编辑
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function InvestMentEdit($id)
    {
        $thisinvestment=InvestmentType::findOrFail($id);
        return view('admin.investedit',compact('thisinvestment'));
    }

    /**t投资分类编辑处理
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postInvestMentEdit(Request $request,$id)
    {
        InvestmentType::where('id',$id)->update(['type'=>$request->input('type')]);
        return redirect(action('Admin\InvestMentController@InvestMentList'));
    }
}
