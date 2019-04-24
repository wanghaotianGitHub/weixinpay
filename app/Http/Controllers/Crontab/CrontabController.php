<?php

namespace App\Http\Controllers\Crontab;
use App\Model\OrderModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class CrontabController extends Controller
{
    //删除超过两小时的订单
    public function delOrders()
    {
//        echo __METHOD__."\n";die;
        $all = OrderModel::all()->toArray();
        foreach($all as $k=>$v){
            if(time() - $v['create_time'] > 1800 && $v['pay_time']==0){
                //置为删除状态
                OrderModel::where(['order_id'=>$v['order_id']])->update(['is_delete'=>1]);
            }
        }
        echo '<pre>';print_r($all);echo '</pre>';
    }
}
