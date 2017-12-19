<?php
namespace Admin\Controller;
use Think\Controller;
class WorkerController extends CommonController {
    public function workerlist()
    {
        $search =I('post.search');
		$Model = M('workers');
        if(!empty($search))
        {
            /*$condition['username'] = array('like','%'.$search.'%');
            $condition['firstname'] = array('like','%'.$search.'%');
            $condition['lastname'] = array('like','%'.$search.'%');
            $condition['email'] = array('like','%'.$search.'%');
            $condition['city'] = array('like','%'.$search.'%');
            $condition['state'] = array('like','%'.$search.'%');
            $condition['country'] = array('like','%'.$search.'%');
            $condition['_logic'] = 'OR';
            $list = $Model->where($condition)->order('regtime desc')->page(I('get.p').',42')->select();
		    $count = $Model->where($condition)->count();// get count of records
			*/
        }else
        {
            $workers = $Model->order('addtime asc')->select();
			//dump($workers);
			foreach($workers as $k=>$v){
				$MM = M('worker_tech');
				$map['wxid'] = $v['wxid'];
				$teches = $MM->join('left join db_technologies on db_worker_tech.techid = db_technologies.techid')->field('db_worker_tech.techid,db_technologies.content')->where('db_worker_tech.wxid = "'.$v['wxid'].'"')->select();
				$v['techarr'] = $teches;
				$workers[$k] = $v;
			}
        }
		//dump($workers);
		$this->assign('workers',$workers);
		$this->display(T('mgr/workers_list'));
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
    public function customerdetail()
    {
        $data['id'] = I('get.id');
        $Model = M('users');
		$content = $Model->where($data)->find();
		if(!empty($content))//exist email
		{
			$this->assign('profiles',$content);
            $this->assign('cusid',$data['id']);
            /*domain*/
            $Model = M('domainmgr');
            $domain['username'] = $content['username'];
            $domain['status'] = 'active';
		    $list = $Model->where($domain)->order('id desc')->select();
            $this->assign('domains',$list);
            /*orders*/
            $Model = M('order');
            $order['username'] = $content['username'];
            $list = $Model->where($order)->order('issuedate desc')->select();
            $this->assign('orders',$list);
			$this->display(T('mgr/customers_detail'));
            
			
		}else
        {
            R('Customer/customerlist');
        }
        
        
    }
    public function updateprofile()
    {
        $data_['username'] = I('post.username');
        $id = I('get.id');
        if(empty($data_['username']))
        {
            R('Customer/customerlist');
        }else
        {
            $Model = M('users');
            $content = $Model->where($data_)->find();
            if(!empty($content))
            {
                $data['username'] = $data_['username'];
                $data['email'] = I('post.email','','htmlspecialchars');//get email
                $data['password'] = I('post.password','','htmlspecialchars');//get email
                $data['firstname'] = I('post.firstname','','htmlspecialchars');//get firstname
                $data['lastname'] = I('post.lastname','','htmlspecialchars');//get firstname
                $data['company'] = I('post.company','','htmlspecialchars');//get firstname
                $data['jobtitle'] = I('post.jobtitle','','htmlspecialchars');//get firstname
                //$data['question'] = I('post.question','','htmlspecialchars');//get firstname
                //$data['answer'] = I('post.answer','','htmlspecialchars');//get firstname
                $data['address1'] = I('post.address1','','htmlspecialchars');//get firstname
                $data['address2'] = I('post.address2','','htmlspecialchars');//get firstname
                $data['city'] = I('post.city','','htmlspecialchars');//get firstname
                $data['state'] = I('post.state','','htmlspecialchars');//get firstname
                $data['postcode'] = I('post.postcode','','htmlspecialchars');//get firstname
                $data['country'] = I('post.country','','htmlspecialchars');//get firstname
                $data['phone'] = I('post.phone','','htmlspecialchars');//get firstname
                $data['fax'] = I('post.fax','','htmlspecialchars');//get firstname
                $data['overdue'] = I('post.overdue','','htmlspecialchars');//get firstname
                $data['taxexemption'] = 'NO';//get firstname
                $data['currency'] = I('post.currency','','htmlspecialchars');//get firstname
                $data['balance'] = I('post.amount','','htmlspecialchars');//get firstname
                $data['status'] = I('post.status','','htmlspecialchars');//get firstname
                $Model->where($data_)->save($data);
                $this->success('Update profile successfully!',U('Customer/customerdetail?id='.$id.''),1);
            }else
            {
                R('Customer/customerlist');
            }
        }
        
    }
	/* add new worker */
    public function workeradd()//show page
    {
		$Model = M('technologies');
        $content = $Model->select();
		$this->assign('teches',$content);
        $this->display(T('mgr/workers_add'));
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
            $this->success('Add a new Worker successfully!',U('Worker/workeradd'),1);
        }
        else
        {
            $this->error('Worker has existed already!', U('Worker/workeradd'),2);
            
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
			$techesexit = $MM->join('left join db_technologies on db_worker_tech.techid = db_technologies.techid')->field('db_worker_tech.techid')->where('db_worker_tech.wxid = "'.$data_['wxid'].'"')->select();
			
			$techstr = '';
			foreach($techesexit as $k=>$v){
				$techstr = $v['techid'].",".$techstr;
			}
			//dump($techstr);
			$this->assign('teches',$teches);
			$this->assign('techarr',$techstr);
			$this->assign('worker',$worker);
			$this->display(T('mgr/workers_edit'));
			
            
        }
        else
        {
            $this->error('Worker has no existed !', U('Worker/workerlist'),2);
            
        }
		
	}
}