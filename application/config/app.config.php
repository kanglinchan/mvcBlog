<?php

return array(

    //数据库配置
    'db' => array(
        'user' => 'root',
        'password' => '',
        'dbname' => 'mvc_study',
    ),

    //默认项目
    'app' => array(
        'default_platform' => 'admin',
    ),


    //前台配置
    'home' => array(
        'default_controller' => 'student',
        'default_action' => 'list',
    ),

    //后台配置
    'admin' => array(
        'default_controller' => 'index',
        'default_action' => 'index',
    ),

    'absolutePath' =>array(
        'ADMIN_CSS' => '/application/admin/public/css',
        'ADMIN_JS'  => '/application/admin/public/js',
        'ADMIN_IMG' => '/application/admin/public/img',
        'PLUG_IN'   => '/plug-in'
    ),
);

?>

