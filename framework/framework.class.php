<?php
/**
 * Created by PhpStorm.
 * User: CHAN
 * Date: 2016/1/26
 * Time: 11:30
 */

class framework{
    public function runApp(){
        //加载配置
        $this->loadConfig();
        //设置常量
        $this->setSysConstant();
        //注册自动加载方法
        $this->registerAutoLoad();
        //获取请求数据

        //$this->getRequestParams();
        $this->router();
        //分发
        $this->dispatch();
    }


    private function registerAutoLoad(){
        spl_autoload_register(array($this, 'user_autoload'));
    }

    public function user_autoload($class_name){
        $base_class = array(
            'model' => './framework/model.class.php',
            'MYSQLPDO' => './framework/MYSQLPDO.class.php',
            'platform' => './framework/platform.class.php',
            'Smarty' => './lib/smarty/Smarty.class.php',
        );

        if(isset($base_class[$class_name])){
            if (is_file($base_class[$class_name])) require_once($base_class[$class_name]) ;
        }elseif(substr($class_name,-5) == 'Model'){
            require './application/'.PLATFORM."/Model/{$class_name}.class.php";
        }elseif(substr($class_name,-10) == 'Controller'){
            require './application/'.PLATFORM."/controller/{$class_name}.class.php";
        }elseif(substr($class_name,-4) == 'Tool'){
            require "./lib/Tool/{$class_name}.class.php";
        }

    }


    private function loadConfig(){
        $GLOBALS['config'] = require './application/config/app.config.php';
    }

    private function setSysConstant(){


        define('WEB_SITE',"http://".$_SERVER['SERVER_NAME' ]);
        /*define('ADMIN_CSS',WEB_SITE.$GLOBALS['config']['tmp_path']['admin_css']);
        define('ADMIN_JS',WEB_SITE.$GLOBALS['config']['tmp_path']['admin_js']);
        define('ADMIN_IMG',WEB_SITE.$GLOBALS['config']['tmp_path']['admin_img']);*/
        //define('PLUG_IN',WEB_SITE.)

        foreach($GLOBALS['config']['absolutePath'] as $k => $v){
            //echo $k .'=>'.$v."<br>";
            define($k,WEB_SITE.$v);
        }



       // echo ADMIN_CSS;
    }

    private function router(){




        $filePath = str_ireplace("\\",'',__FILE__);
        $appPath = str_ireplace($_SERVER['DOCUMENT_ROOT'],'', $filePath);
        $separatorPath = str_ireplace($appPath,'',$_SERVER['REQUEST_URI']);
        //不能使用 trim() /h会被切割
        $separatorPath = preg_match('/^\/index.php/',$separatorPath) ? substr($separatorPath,'10') :$separatorPath;
        $separatorPath=trim($separatorPath,'/');
        $separatorArr = explode('/',$separatorPath);  //分割路径
        $separatorCount = count($separatorArr);
        //获取项目
        define('PLATFORM', ( $separatorArr[0] != '')? $separatorArr[0] : $GLOBALS['config']['app']['default_platform']);
        //获取控制器
        define('CONTROLLER', isset($separatorArr[1]) ? $separatorArr[1] : $GLOBALS['config'][PLATFORM]['default_controller'] );
        //获取方法
        define('ACTION', isset($separatorArr[2])? $separatorArr[2]: $GLOBALS['config'][PLATFORM]['default_action']);
        //组装参数
        $parameters = array();
        if($separatorCount > 3 and $separatorCount%2 == 0 ){
            var_dump($separatorArr);
            die('argument error!');


        }else{
            for($i=3; $i<$separatorCount; $i=$i+2){
                $kvArr = array($separatorArr[$i] => $separatorArr[$i+1]);
                $parameters = array_merge($parameters,$kvArr);
            }

            $GLOBALS['config']['parameters'] = $parameters;
            //define('PARAMETERS',$GLOBALS['config']['parameters']);
        }
    }



    private function dispatch(){
        $controller_name = CONTROLLER.'Controller';
        $controller = new $controller_name;
        $action_name = ACTION.'Action';

        /*$action_name = ACTION.'Action';
        $controller->$action_name();*/
  /*      $action_name = ACTION.'Action';
        $controller->$action_name();*/
        //判断类是否存在方法
      if (method_exists($controller_name,$action_name)) {
            $controller->$action_name($GLOBALS['config']['parameters']);
          /*echo $controller_name .$action_name;
          if(is_callable(array($controller_name,$action_name))){

              $get_return = $controller_name->$action_name($GLOBALS['config']['parameters']);
              echo $controller_name;

              if(!is_null($get_return)){ //返回值不为空
                  var_dump($get_return);
              }
          }*/

        }else{
            echo "empty method!!!!!!!!!!!";
        }








    }




}