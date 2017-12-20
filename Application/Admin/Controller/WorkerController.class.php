<?php
namespace Admin\Controller;
use Think\Controller;
class WorkerController extends CommonController {
    public function workerlist()
    {
        $search =I('post.techsearch');
		$Model = M('workers');
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
					$workers[$k] = $v;
					array_push($workeroutput ,$workers[$k]);
				}
			}
			//dump($workeroutput);
			$Mtech = M('technologies');
			$teches = $Mtech->select();
			$this->assign('workers',$workeroutput);
			$this->assign('teches',$teches);
			$this->display(T('mgr/workers_list'));
			
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
			//dump($workers);
			$Mtech = M('technologies');
			$teches = $Mtech->select();
			$this->assign('workers',$workers);
			$this->assign('teches',$teches);
			$this->display(T('mgr/workers_list'));
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
			$techesexit = $MM->join('inner join db_technologies on db_worker_tech.techid = db_technologies.techid')->field('db_worker_tech.techid')->where('db_worker_tech.wxid = "'.$data_['wxid'].'"')->select();
			
			$techstr = '';
			foreach($techesexit as $k=>$v){
				$techstr = $v['techid'].",".$techstr;
			}
			dump($techstr);
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
            $this->success('Update Worker ^ '.$data['wxname'].' ^ successfully!',U('Worker/workereditpage?wxid='.$data_['wxid'].''),3);
        }
        else
        {
            $this->error('Worker has no existed !', U('Worker/workereditpage?wxid='.$data_['wxid'].''),2);
            
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