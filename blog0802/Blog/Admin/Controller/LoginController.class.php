<?php
	namespace Admin\Controller;
	use Think\Controller;
	/**
	* 
	*/
	class LoginController extends Controller
	{
		
		function index(){
			$this->display();
		}
		public function checkLogin(){
			$user = I('post.user');
			$pass =I('post.pass');
			if (empty($user)|| empty($pass)) {
				$res['error'] = 1;
				$res['msg'] = "请输入账号和密码";
				$this->ajaxReturn($res);
			}
			$User = M('managers');
			$post = array(
				'username'=>$user,
				'password'=>$pass
				);
			$data = $User->where($post)->find();
			if (!$data) {
				$res['error'] = 2;
				$res['msg'] = "账号和密码不正确";
				$this->ajaxReturn($res);				
			}else{
				session('id',$data['mg_id']);
				session('username',$data['username']);
				$res['error']=0;
				$res['msg']="正在登录中...";
				$res['url']=U('Index/index');
				$this->ajaxReturn($res);
			}

		}
		public function logout(){
			session('id',null); // 删除name
			session('username',null);
			session('[destroy]'); // 销毁session
			$this->redirect('Login/index', 2, '正在退出...');
		}
		
	}

