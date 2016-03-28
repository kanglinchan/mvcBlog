<?php
/**
 * Created by PhpStorm.
 * User: CHAN
 * Date: 2016/1/26
 * Time: 15:33
 */


class platform{

    public function __construct(){

        /*//判断登陆
        $this->checkLogin();*/

        //加载smarty库
        $this->loadsmarty();
    }


    public $smt;
    public function loadsmarty(){
        $this->smt = new Smarty();
        //$this->smt->debug = true;
        $this->smt->caching = false;
        $this->smt->cache_lifetime = 120;
        $this->smt->setTemplateDir('./application/admin/view/');
        $this->smt->setCompileDir('./application/admin/runtime/view_c/');
        $this->smt->left_delimiter = '{{';
        $this->smt->right_delimiter = '}}';
    }



    /*private function checkLogin(){

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
    //}

    protected function jump($url,$msg='',$time = 4){
        if($msg == ''){
            header("Location: $url");
        }else{
            $this->smt->assign('time',$time);
            $this->smt->assign('url',$url);
            $this->smt->assign('msg',$msg);
            $this->smt->display("jump.tpl");
            die();
        }
    }
}
