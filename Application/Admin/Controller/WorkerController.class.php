<?php
namespace Admin\Controller;
use Think\Controller;
class WorkerController extends CommonController {
    public function workerlist()
    {
        $search =I('post.techsearch');
    		$Model = M('workers');
        $techstr = "";
        if(!empty($search))
        {

            $workers = $Model->order('addtime asc')->select();
            //dump($workers);
            $techstr = '';
            foreach($search as $v){
            	$techstr = $v.','.$techstr;
            }
            $techstr = rtrim($techstr,",");
            //dump($techstr);
            $worklist = [];
            foreach($workers as $k=>$v){
            	$MM = M('worker_tech');

            	$techeslist = $MM->join('left join db_technologies on db_worker_tech.techid = db_technologies.techid')->field('db_worker_tech.wxid')->where('db_worker_tech.wxid = "'.$v['wxid'].'" and db_worker_tech.techid in('.$techstr.')')->select();
            	//dump($techeslist);
            	if($techeslist != NULL){
            		array_push($worklist ,$techeslist[0]['wxid']);
            	}
            }
			//dump($worklist);
			//$workliststr = rtrim($workliststr,",");
			//dump($workliststr);
			$workeroutput = [];
			foreach($workers as $k=>$v){
				$MM = M('worker_tech');
				if(in_array($v['wxid'],$worklist)){
					$teches = $MM->join('left join db_technologies on db_worker_tech.techid = db_technologies.techid')->field('db_worker_tech.techid,db_technologies.content')->where('db_worker_tech.wxid = "'.$v['wxid'].'"')->select();
					$v['techarr'] = $teches;
                    
                    $ORDER = M('orders');
                    /* complete orders*/
                    $ordercomplete = $ORDER->join('left join db_worker_order on db_worker_order.orderid = db_orders.orderid')->join('left join db_workers on db_worker_order.wxid = db_workers.wxid')->join('left join db_guest_order on db_guest_order.orderid = db_orders.orderid')->join('left join db_guests on db_guest_order.wxid = db_guests.wxid')->field('db_orders.orderid,db_orders.createtime,db_guests.wxid as gwxid,db_guests.wxname as gwxname,db_orders.projectname,db_guest_order.g_deadline,db_orders.moneytype,db_orders.totalprice,db_orders.guarantee,db_guest_order.g_state,db_workers.wxid,db_workers.wxname,db_worker_order.w_deadline,db_worker_order.w_payment,db_worker_order.w_state,db_guest_order.remark as gremark,db_orders.description')->where('db_workers.wxid = "'.$v['wxid'].'" AND db_guest_order.g_state = 2 AND db_worker_order.w_state = 3')->count();
                    $orderremark = $ORDER->join('left join db_worker_order on db_worker_order.orderid = db_orders.orderid')->join('left join db_workers on db_worker_order.wxid = db_workers.wxid')->join('left join db_guest_order on db_guest_order.orderid = db_orders.orderid')->join('left join db_guests on db_guest_order.wxid = db_guests.wxid')->field('db_orders.orderid,db_orders.createtime,db_guests.wxid as gwxid,db_guests.wxname as gwxname,db_orders.projectname,db_guest_order.g_deadline,db_orders.moneytype,db_orders.totalprice,db_orders.guarantee,db_guest_order.g_state,db_workers.wxid,db_workers.wxname,db_worker_order.w_deadline,db_worker_order.w_payment,db_worker_order.w_state,db_guest_order.remark as gremark,db_orders.description')->where('db_workers.wxid = "'.$v['wxid'].'" AND db_guest_order.g_state = 2 AND db_worker_order.w_state = 3')->avg('db_guest_order.remark');
                    $income = $ORDER->join('left join db_worker_order on db_worker_order.orderid = db_orders.orderid')->join('left join db_workers on db_worker_order.wxid = db_workers.wxid')->join('left join db_guest_order on db_guest_order.orderid = db_orders.orderid')->join('left join db_guests on db_guest_order.wxid = db_guests.wxid')->field('db_orders.orderid,db_orders.createtime,db_guests.wxid as gwxid,db_guests.wxname as gwxname,db_orders.projectname,db_guest_order.g_deadline,db_orders.moneytype,db_orders.totalprice,db_orders.guarantee,db_guest_order.g_state,db_workers.wxid,db_workers.wxname,db_worker_order.w_deadline,db_worker_order.w_payment,db_worker_order.w_state,db_guest_order.remark as gremark,db_orders.description')->where('db_workers.wxid = "'.$v['wxid'].'" AND db_guest_order.g_state = 2 AND db_worker_order.w_state = 3')->sum('db_worker_order.w_payment');
                    /* incomplete */
                    $orderincomplete = $ORDER->join('left join db_worker_order on db_worker_order.orderid = db_orders.orderid')->join('left join db_workers on db_worker_order.wxid = db_workers.wxid')->join('left join db_guest_order on db_guest_order.orderid = db_orders.orderid')->join('left join db_guests on db_guest_order.wxid = db_guests.wxid')->field('db_orders.orderid,db_orders.createtime,db_guests.wxid as gwxid,db_guests.wxname as gwxname,db_orders.projectname,db_guest_order.g_deadline,db_orders.moneytype,db_orders.totalprice,db_orders.guarantee,db_guest_order.g_state,db_workers.wxid,db_workers.wxname,db_worker_order.w_deadline,db_worker_order.w_payment,db_worker_order.w_state,db_guest_order.remark as gremark,db_orders.description')->where('db_workers.wxid = "'.$v['wxid'].'" AND (db_guest_order.g_state != 2 OR db_worker_order.w_state != 3)')->count();
                    $v['ordercomplete'] = $ordercomplete;
                    $v['orderincomplete'] = $orderincomplete;
                    $v['orderall'] = $orderincomplete + $ordercomplete;
                    $v['income'] = $income;
                    if($income == ''){
                        $v['income'] = 0.00;
                    }
                    $v['remark'] = round($orderremark,2);
					$workers[$k] = $v;
					array_push($workeroutput ,$workers[$k]);
				}
			}
            //dump($workeroutput);
            $Mtech = M('technologies');
            $teches = $Mtech->select();
            $this->assign('workers',$workeroutput);
            $this->assign('techstr',$techstr);
            $this->assign('teches',$teches);
            //dump($techstr);
            $this->display(T('admin/workers_list'));
          }else
          {
            $workers = $Model->order('addtime asc')->select();
            //dump($workers);
            foreach($workers as $k=>$v){
              $MM = M('worker_tech');
              $map['wxid'] = $v['wxid'];
              $teches = $MM->join('left join db_technologies on db_worker_tech.techid = db_technologies.techid')->field('db_worker_tech.techid,db_technologies.content')->where('db_worker_tech.wxid = "'.$v['wxid'].'"')->select();
              $v['techarr'] = $teches;
              /*order info*/
              $ORDER = M('orders');
              /* complete orders*/
              $ordercomplete = $ORDER->join('left join db_worker_order on db_worker_order.orderid = db_orders.orderid')->join('left join db_workers on db_worker_order.wxid = db_workers.wxid')->join('left join db_guest_order on db_guest_order.orderid = db_orders.orderid')->join('left join db_guests on db_guest_order.wxid = db_guests.wxid')->field('db_orders.orderid,db_orders.createtime,db_guests.wxid as gwxid,db_guests.wxname as gwxname,db_orders.projectname,db_guest_order.g_deadline,db_orders.moneytype,db_orders.totalprice,db_orders.guarantee,db_guest_order.g_state,db_workers.wxid,db_workers.wxname,db_worker_order.w_deadline,db_worker_order.w_payment,db_worker_order.w_state,db_guest_order.remark as gremark,db_orders.description')->where('db_workers.wxid = "'.$v['wxid'].'" AND db_guest_order.g_state = 2 AND db_worker_order.w_state = 3')->count();
              $orderremark = $ORDER->join('left join db_worker_order on db_worker_order.orderid = db_orders.orderid')->join('left join db_workers on db_worker_order.wxid = db_workers.wxid')->join('left join db_guest_order on db_guest_order.orderid = db_orders.orderid')->join('left join db_guests on db_guest_order.wxid = db_guests.wxid')->field('db_orders.orderid,db_orders.createtime,db_guests.wxid as gwxid,db_guests.wxname as gwxname,db_orders.projectname,db_guest_order.g_deadline,db_orders.moneytype,db_orders.totalprice,db_orders.guarantee,db_guest_order.g_state,db_workers.wxid,db_workers.wxname,db_worker_order.w_deadline,db_worker_order.w_payment,db_worker_order.w_state,db_guest_order.remark as gremark,db_orders.description')->where('db_workers.wxid = "'.$v['wxid'].'" AND db_guest_order.g_state = 2 AND db_worker_order.w_state = 3')->avg('db_guest_order.remark');
              $income = $ORDER->join('left join db_worker_order on db_worker_order.orderid = db_orders.orderid')->join('left join db_workers on db_worker_order.wxid = db_workers.wxid')->join('left join db_guest_order on db_guest_order.orderid = db_orders.orderid')->join('left join db_guests on db_guest_order.wxid = db_guests.wxid')->field('db_orders.orderid,db_orders.createtime,db_guests.wxid as gwxid,db_guests.wxname as gwxname,db_orders.projectname,db_guest_order.g_deadline,db_orders.moneytype,db_orders.totalprice,db_orders.guarantee,db_guest_order.g_state,db_workers.wxid,db_workers.wxname,db_worker_order.w_deadline,db_worker_order.w_payment,db_worker_order.w_state,db_guest_order.remark as gremark,db_orders.description')->where('db_workers.wxid = "'.$v['wxid'].'" AND db_guest_order.g_state = 2 AND db_worker_order.w_state = 3')->sum('db_worker_order.w_payment');
              /* incomplete */
              $orderincomplete = $ORDER->join('left join db_worker_order on db_worker_order.orderid = db_orders.orderid')->join('left join db_workers on db_worker_order.wxid = db_workers.wxid')->join('left join db_guest_order on db_guest_order.orderid = db_orders.orderid')->join('left join db_guests on db_guest_order.wxid = db_guests.wxid')->field('db_orders.orderid,db_orders.createtime,db_guests.wxid as gwxid,db_guests.wxname as gwxname,db_orders.projectname,db_guest_order.g_deadline,db_orders.moneytype,db_orders.totalprice,db_orders.guarantee,db_guest_order.g_state,db_workers.wxid,db_workers.wxname,db_worker_order.w_deadline,db_worker_order.w_payment,db_worker_order.w_state,db_guest_order.remark as gremark,db_orders.description')->where('db_workers.wxid = "'.$v['wxid'].'" AND (db_guest_order.g_state != 2 OR db_worker_order.w_state != 3)')->count();
              //dump($ordercomplete);
              //dump($orderremark);
              //dump($income);
              //dump($orderincomplete);
              $v['ordercomplete'] = $ordercomplete;
              $v['orderincomplete'] = $orderincomplete;
              $v['orderall'] = $orderincomplete + $ordercomplete;
              $v['income'] = $income;
              if($income == ''){
                  $v['income'] = 0.00;
              }
              $v['remark'] = round($orderremark,2);
              $workers[$k] = $v;
            }
            //dump($workers);
            $Mtech = M('technologies');
            $teches = $Mtech->select();
            $this->assign('workers',$workers);
            $this->assign('teches',$teches);
            $this->display(T('admin/workers_list'));
          }
		//dump($workers);
        //dump($workers);

		//print_r($list);
		/**
		* pages
		**/

		/*$Page = new \Think\Page($count,42);// page object
		$Page->setConfig('prev','prev');
		$Page->setConfig('next','next');
		$Page->setConfig('first','first page');
		$Page->setConfig('last','last page');
		$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER% ');
		$show = $Page->show();// page output
		$this->assign('page',$show);//
		$this->assign('list',$list);
		*/
        //$this->display(T('mgr/workers_list'));
		//print("list");


    }
	/* add new worker */
    public function workernewpage()//show page
    {
		$Model = M('technologies');
        $content = $Model->select();
		$this->assign('teches',$content);
        $this->display(T('admin/workers_add'));
    }
    public function workernew()
    {
        $data_['wxid'] = I('post.wxid');
        $Model = M('workers');
        $content = $Model->where($data_)->find();
	      $teches = [];
    		$teches = I('post.tech','','htmlspecialchars');//
		//dump($teches);
        if(empty($content))
        {
			$data['wxid'] = $data_['wxid'];
			$data['wxname'] = I('post.wxname','','htmlspecialchars');//get email
            $data['email'] = I('post.email','','htmlspecialchars');//get email
			$data['description'] = I('post.description','','htmlspecialchars');//get email
			$data['addtime'] = date('Y-m-d H:i:s',time());
			//dump($data);
			$Model->data($data)->add();
			/* add to worker_tech*/
			$Model = M('worker_tech');
			foreach($teches as $k=>$v){
				$map['wxid'] = $data['wxid'];
				$map['techid'] = $v;
				$Model->data($map)->add();
			}
            $this->success('Add a new Worker successfully!',U('Worker/workerlist'),1);
        }
        else
        {
            $this->error('Worker has existed already!', U('Worker/workernewpage'),2);

        }

    }
	/* edit worker*/
	public function workereditpage(){
		$data_['wxid'] = I('get.wxid');
        $Model = M('workers');
        $worker = $Model->where($data_)->find();
		$Mtech = M('technologies');
		$teches = $Mtech->select();
		//dump($worker);
        if(!empty($worker))
        {
			//dump($worker);
			/* add to worker_tech*/
			$MM = M('worker_tech');
			$techesexit = $MM->join('inner join db_technologies on db_worker_tech.techid = db_technologies.techid')->field('db_worker_tech.techid')->where('db_worker_tech.wxid = "'.$data_['wxid'].'"')->select();

			$techstr = '';
			foreach($techesexit as $k=>$v){
				$techstr = $v['techid'].",".$techstr;
			}
			//dump($techstr);
			$this->assign('teches',$teches);
			$this->assign('techarr',$techstr);
			$this->assign('worker',$worker);
			$this->display(T('admin/workers_edit'));
        }
        else
        {
            $this->error('Worker has no existed !', U('Worker/workerlist'),2);

        }

	}
	public function workerupdate()
    {
        $data_['wxid'] = I('post.wxid');
        $Model = M('workers');
        $content = $Model->where($data_)->find();
		$teches = [];
		$teches = I('post.tech','','htmlspecialchars');//
		//dump($teches);
        if(!empty($content))
        {
			$data['wxname'] = I('post.wxname','','htmlspecialchars');//get email
            $data['email'] = I('post.email','','htmlspecialchars');//get email
			$data['description'] = I('post.description','','htmlspecialchars');//get email
			//dump($data);
			$Model->where($data_)->save($data);
			/* add to worker_tech*/
			$Model = M('worker_tech');
			$Model->where($data_)->delete();
			foreach($teches as $k=>$v){
				$map['wxid'] = $data_['wxid'];
				$map['techid'] = $v;
				$Model->data($map)->add();
			}
            $this->success('Update Worker ^ '.$data['wxname'].' ^ successfully!',U('Worker/workerlist'),3);
        }
        else
        {
            $this->error('Worker has no existed !', U('Worker/workerlist'),2);

        }

    }
	/* delete a worker */
	public function workerdelete(){
		$data_['wxid'] = I('get.wxid');
		$Model = M('workers');
		$Model->where($data_)->delete();
		$this->success('Worker has deleted successfully!', U('Worker/workerlist'),2);

	}
}
