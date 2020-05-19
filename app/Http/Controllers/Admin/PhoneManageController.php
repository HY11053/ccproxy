<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Admin;
use App\AdminModel\Phonemanage;
use App\Events\PhoneEvent;
use App\Exports\InvoicesExport;
use App\Http\Requests\PhoneManageRequest;
use App\Notifications\MailSendNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class PhoneManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin',['except' => 'CreatePhoneManage']);
    }
    /**
     * 电话提交管理列表
     * @param
     *
     * @return
     */
    function Index(Request $request)
    {
        $notifications=array();
        $arguments=$request->all();
        $phoneNos=Phonemanage::when($request->start_at, function ($query) use ($request) {

            return $query->where('created_at', '>',Carbon::parse($request->start_at));

        })->when($request->end_at, function ($query) use ($request) {

            return $query->where('created_at', '<',Carbon::parse($request->end_at));

        })->when($request->advertisement, function ($query) use ($request) {

            return $query->where('host','like','%'.$request->advertisement.'%');

        })->latest()->paginate(30);
        return view('admin.phonelists',compact('phoneNos','notifications','arguments'));
    }

    public function PhoneSort(){
        $notifications=array();
        $phoneNos=DB::table('phonemanages')->select(DB::raw('count(*) as host_count, host'))->groupBy('host')->orderBy("host_count",'desc')->paginate(30);
        return view('admin.phonesorts',compact('phoneNos','notifications'));
    }

    public function PhoneExcelExport(Request $request)
    {
        $strat_time=Carbon::parse($request->start_at);
        $end_time=Carbon::parse($request->end_at);
        return Excel::download(new InvoicesExport($strat_time,$end_time), Carbon::today().'-'.Carbon::now().'.xlsx');
    }

    /**
     * 电话编辑
     * @param
     *
     * @return
     */
    function PhoneManageEdit($id)
    {
        $thisPhoneInfo=Phonemanage::findOrFail($id);
        return view('admin.phoneinfoedit',compact('thisPhoneInfo'));
    }
    /**
     * 电话编辑提交处理
     * @param
     *
     * @return
     */
    function PhoneManageEditPost(PhoneManageRequest $request,$id)
    {
        $thisPhoneInfo=Phonemanage::findOrFail($id)->update($request->all());
        $phoneNos=Phonemanage::latest()->paginate(30);
        return view('admin.phonelists',compact('phoneNos'));
    }
    /**
     * 删除电话
     * @param
     *
     * @return
     */
    function DeletePhone(Request $request,$id)
    {
        if(auth('admin')->id()==7 || auth('admin')->id()==1)
        {
            Phonemanage::findOrFail($id)->delete();
            return redirect($request->server('HTTP_REFERER'));
        }else{
            dd('禁止删除');
        }

    }
}
