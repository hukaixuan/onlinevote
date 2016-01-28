<?php 
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
	// 用户注册方法
	public function regist($data){ 
		
		if ($data['username']==NULL||$data['password']==NULL||$data['password2']==NULL) {
			return "信息未填全";
		}
		if ($data['password']!=$data['password2']) {
			return "密码不一致";
		}
		// 密码验证
		// if (preg_match("/^[a-zA-Z\d_0-9]{6,}$/", $data['password'])) {
		// 	return '密码格式不正确';
		// }
		//验证是否有重复用户
		if ( (count($temp=$this->where("userName='".$data['username']."'")->select()) )>0  ) {
			return '用户名已存在';
		}
		
		$user['userName'] = $data['username'];
		$user['password'] = md5($data['password']);
		$user['lastTime'] = time();
		$user['ip'] = $_SERVER['REMOTE_ADDR'];

		// dump($user);
		if ( M('user')->add($user) ) {
			return '注册成功';
		}else{
			return '插入数据库失败';
		}
	}
	// 用户登录方法
	public function login($username, $password){
		$info = array('flag' => 0, 'status' => '登录失败'); //flag 0表示失败，1表示登录成功
		if ($username==NULL) {
			$info['status'] = '用户名不能为空';
			return $info;
		}
		if ($password == NULL) {
			$info['status'] = '密码不能为空';
			return $info;
		}

		$user = $this->where("userName='".$username."' and password='".md5($password)."'")->find();
		if ($user) {
			$info['flag'] = 1;
			$info['status'] = '登录成功';
			return $info;
		}

	}
}


 ?>