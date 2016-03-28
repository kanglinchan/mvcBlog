<?php
/**
 * Created by PhpStorm.
 * User: CHAN
 * Date: 2016/1/28
 * Time: 16:06
 */
    class indexController extends adminController{



        public function indexAction(){
            $this->smt->display('index.tpl');
        }


        public function headAction(){

            //$this->smt->assign('data',$data);
            $username = $_SESSION['username'];

            $this->smt->assign("username",$username);
            $this->smt->display('index_head.tpl');
        }

        public function mainAction(){
            $this->smt->display('index_main.tpl');
        }

        public function leftAction(){
           // $data = array('添加角色','角色管理','添加权限','权限管理','添加用户','用户管理');
           // var_dump($data);
            //$this->smt->assign('data',$data);
            $this->smt->display('index_left.tpl');
        }
    }