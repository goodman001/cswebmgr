<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
use Org\Util\Auth;
class CommonController extends Controller
{
	public function _initialize()
	{
		
		if(empty(cookie('admin_uid')))
		{
			$this->error(C('LOGIN_TIPS'),U('Login/index'),3);
			return 0;
		}else if(!in_array(cookie('admin_uid'),explode(',',C('AUTH_SUPERADMIN'))))//whether is superadmin or not		
		{
			$uid = cookie('admin_uid');
			$data['uid'] = $uid;
			$Model = M('admin');
			$content = $Model->where($data)->find();
			//dump($data);
			if(empty($content) )//exist
			{
				$this->error(C('PERMISSION_DENIED_WARNING'));
			}
			
		}
	}
}
