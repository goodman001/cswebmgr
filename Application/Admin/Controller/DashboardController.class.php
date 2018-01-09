<?php
namespace Admin\Controller;
use Think\Controller;
class DashboardController extends CommonController {
    public function index()
    {
		$uid = cookie('admin_uid');
		$username = cookie('admin_username');

		$data['uid'] = $uid;
		$Model = M('admin');
		$content = $Model->where($data)->find();
		if(!empty($content) )//exist
		{
			$nowtime = date('Y-m-d H:i:s',time());
			//echo $nowtime;
			$this->assign('username',$username);
			$this->assign('role',"administrator");
			$this->assign('description',"This is administrator");
			$this->assign('nowtime',$nowtime);
      /* cal total complete income */
      $ORDER = M('orders');
      $revenuesarr = [];
      $revenues = 0.0;
      $profit = 0;
      $salary = 0;
      $salary = $ORDER->join('left join db_worker_order on db_worker_order.orderid = db_orders.orderid')->join('left join db_workers on db_worker_order.wxid = db_workers.wxid')->join('left join db_guest_order on db_guest_order.orderid = db_orders.orderid')->join('left join db_guests on db_guest_order.wxid = db_guests.wxid')->where('db_guest_order.g_state = 2 AND db_worker_order.w_state = 3')->sum('db_worker_order.w_payment');
      $revenuesarr  = $ORDER->join('left join db_worker_order on db_worker_order.orderid = db_orders.orderid')->join('left join db_workers on db_worker_order.wxid = db_workers.wxid')->join('left join db_guest_order on db_guest_order.orderid = db_orders.orderid')->join('left join db_guests on db_guest_order.wxid = db_guests.wxid')->field('db_orders.moneytype,SUM(db_orders.totalprice) as revenues')->where('db_guest_order.g_state = 2 AND db_worker_order.w_state = 3')->group('db_orders.moneytype')->select();
      $ordernum = $ORDER->join('left join db_worker_order on db_worker_order.orderid = db_orders.orderid')->join('left join db_workers on db_worker_order.wxid = db_workers.wxid')->join('left join db_guest_order on db_guest_order.orderid = db_orders.orderid')->join('left join db_guests on db_guest_order.wxid = db_guests.wxid')->field('db_orders.orderid,db_orders.createtime,db_guests.wxid as gwxid,db_guests.wxname as gwxname,db_orders.projectname,db_guest_order.g_deadline,db_orders.moneytype,db_orders.totalprice,db_orders.guarantee,db_guest_order.g_state,db_workers.wxid,db_workers.wxname,db_worker_order.w_deadline,db_worker_order.w_payment,db_worker_order.w_state,db_guest_order.remark as gremark,db_orders.description')->where('db_guest_order.g_state = 2 AND db_worker_order.w_state = 3')->count();
      /* cal total incomplete income  */
      $ongoingsalary = $ORDER->join('left join db_worker_order on db_worker_order.orderid = db_orders.orderid')->join('left join db_workers on db_worker_order.wxid = db_workers.wxid')->join('left join db_guest_order on db_guest_order.orderid = db_orders.orderid')->join('left join db_guests on db_guest_order.wxid = db_guests.wxid')->where('db_guest_order.g_state != 2 OR db_worker_order.w_state != 3')->sum('db_worker_order.w_payment');
      $ongoingrevenuesarr  = $ORDER->join('left join db_worker_order on db_worker_order.orderid = db_orders.orderid')->join('left join db_workers on db_worker_order.wxid = db_workers.wxid')->join('left join db_guest_order on db_guest_order.orderid = db_orders.orderid')->join('left join db_guests on db_guest_order.wxid = db_guests.wxid')->field('db_orders.moneytype,SUM(db_orders.totalprice) as revenues')->where('db_guest_order.g_state != 2 OR db_worker_order.w_state != 3')->group('db_orders.moneytype')->select();
      if($salary == ''){
        $salary = 0;
      }
      if($ongoingsalary == ''){
        $ongoingsalary = 0;
      }
      //dump($revenuesarr);
      $revenuesarrnew = [];
      foreach($revenuesarr as $k=>$v){
        $Model = M('configure_exchange');
        $cc['currency'] = $v['moneytype'];
    		$item = $Model->where($cc)->find();
        $v['rating'] = $item['rating'];
        $revenuesarr[$k] = $v;
        array_push($revenuesarrnew ,$revenuesarr[$k]);
        $revenues = $revenues + $v['revenues']*$item['rating'];
        //echo $v['revenues']*$item['rating'];
      }
      $profit = $revenues - $salary;
      //dump($revenuesarr);
      $ongoingrevenues = 0;
      $ongoingrevenuesarrnew = [];
      foreach($ongoingrevenuesarr as $k=>$v){
        $Model = M('configure_exchange');
        $cc['currency'] = $v['moneytype'];
    		$item = $Model->where($cc)->find();
        $v['rating'] = $item['rating'];
        $ongoingrevenuesarr[$k] = $v;
        array_push($ongoingrevenuesarrnew ,$ongoingrevenuesarr[$k]);
        $ongoingrevenues = $ongoingrevenues + $v['revenues']*$item['rating'];
        //echo $v['revenues']*$item['rating'];
      }
      $ongoingprofit = $ongoingrevenues - $ongoingsalary;
      //echo $revenues;
      //dump($revenues);//complete
      //dump($salary);//complete
      //echo "+++";
      //dump($ongoingrevenues);
      //dump($ongoingsalary);

      //dump($ongoingrevenues);
      //dump($ongoingsalary);
      //$allprofit = $allrevenues - $allsalary;
      //$allprofit
      //dump($ongoingprofit);
      /**/
      $this->assign('revenues',$revenues);
      $this->assign('salary',$salary);
      $this->assign('profit',$profit);
      $this->assign('revenuesarr',$revenuesarrnew);
      $this->assign('ordernum',$ordernum );

      $this->assign('ongoingrevenues',$ongoingrevenues);
      $this->assign('ongoingsalary',$ongoingsalary);
      $this->assign('ongoingprofit',$ongoingprofit);
      $this->assign('ongoingrevenuesarr',$ongoingrevenuesarrnew);
      /*  */
			$this->display(T('admin/index'));
		}else
		{
			$this->error(C('LOGIN_ERROR'), U('Login/index'),3);
		}


    }
}
