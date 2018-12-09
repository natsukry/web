<?php
namespace app\index\controller; 

use think\Controller; 
class Register extends Controller {
	public function index() {
		return $this -> fetch(); 
    }
    public function direct(){
        $this->redirect(url('register/index'));
    }
    public function doRegister(){
		$param = input('post.');
		$sqlInsertCommand = "insert into users(`user_name`,`user_pwd`) value('".$param['user_name']."'".","."'".$param['user_pwd']."');";
		$data=db('users')->execute($sqlInsertCommand);
		//$data=db('users')->execute("insert into users(`user_name`,`user_pwd`) value('aa','aa');");
		$this->redirect(url('register/registOK'));
	}
	public function registOK(){
		echo "注册成功!" . ' <a href="' . url('login/loginout') . '">退出</a>'; 
	}
}