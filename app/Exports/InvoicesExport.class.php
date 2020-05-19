<?php
namespace App\Exports;


use App\AdminModel\Phonemanage;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class InvoicesExport implements FromQuery		// 实现 'FromQuery'
{
    use Exportable;
    public function __construct($start_time,$end_time)        // 导入外部查询参数
    {
        $this->start_time = $start_time;
        $this->end_time = $end_time;
    }
    public function query()
    {
        $start_time=$this->start_time;
        $end_time=$this->end_time;
        return Phonemanage::query()->when($end_time, function ($query) use ($start_time) {
                return $query->where('created_at', '>',Carbon::parse($start_time));
            }, function ($query) {
               return $query->where('created_at', '>',Carbon::today());
            })->when($end_time, function ($query) use ($end_time) {
                return $query->where('created_at', '<',Carbon::parse($end_time));
            }, function ($query) {
            return $query->where('created_at', '<',Carbon::tomorrow());
        });
    }

}