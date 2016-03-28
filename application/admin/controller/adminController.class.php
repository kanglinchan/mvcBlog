<?php
/**
 * Created by PhpStorm.
 * User: CHAN
 * Date: 2016/1/26
 * Time: 15:43
 */

class adminController extends platform {
	function __construct()
	{
		parent::__construct();
		//判断登陆
		$this->checkLogin();
	}

	private function checkLogin(){

		session_start();

		//login method 不需要使用该方法判断，此方法用于继承platform的模块判断
		if(CONTROLLER == 'admin' && ACTION == "login"){
			return ;
		}


		//cookie 是否存在用户信息
		if(isset($_COOKIE['username'])){
			$_SESSION['username'] = $_COOKIE['username'];
			$_SESSION['isLogin'] = 1;
		}
		//session 是否保存登录信息
		if(!isset($_SESSION['isLogin'])){
			$this->jump('/index.php/admin/admin/login');
		}

		/*if(CONTROLLER == 'admin' && ACTION == "login"){
            return ;
        }

        session_start();
        if(!isset($_SESSION['admin'])){

            $this->jump('/index.php/admin/admin/login');
        }*/
	}


	public function loginAction(){
	   	if(!empty($_POST)){
			$username = filterTool::filter_var('INPUT_POST','username','FILTER_NAME');
			$password = filterTool::filter_var('INPUT_POST','password','FILTER_PASSWORD');
			$remember = filter_input(INPUT_POST,'remember',FILTER_SANITIZE_STRING);

			if($username == false || $password == false){

				$this->jump("/index.php/admin/admin/login","用户名或密码不正确",6);
       		}else{
				$adminModel = new adminModel();
				$result = $adminModel->checkByLogin($username,$password);
				if($result){
					//set session
					session_start();
					$_SESSION['username'] = $username;
					$_SESSION['isLogin'] = 1;
					//is cookie
					if($remember == "yes"){
						setcookie("username", $username, time()+7*24*60*60);
						setcookie("code",md5($username.md5($password)), time()+7*24*60*60 );
					}else{
						setcookie("username",'',time() -1);
						setcookie("code", '', time() -1);
					}
					$this->jump('/index.php/admin');

				}else{
					$this->jump("/index.php/admin/admin/login","登录失败",4);
				}
			}


		}

	   //require('./application/admin/view/admin_login.tpl');
	   $this->smt->display('admin_login.tpl');
   }

    public function logoutAction(){
		//session_start();
		$username =$_SESSION['username'];
		$_SESSION = array();
		session_destroy();

		setcookie('username','',time()-1);
		setcookie('code','',time()-1);
		$this->jump('/index.php/admin',$username."欢迎再次光临",3);

        /*$_SESSION = null;
        session_destroy();
        $this->jump('/index.php/admin');*/
    }

}