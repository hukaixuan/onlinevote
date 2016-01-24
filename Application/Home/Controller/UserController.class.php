<?php 
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{
	// 用户注册方法
	public function regist(){ 
		if (IS_POST) {
			$data = I('post.');
			$this->show(D('User')->regist($data));
		}else{
			$this->display();
		}
	}
	// 用户登录方法
	public function login(){

	}
}


 ?>