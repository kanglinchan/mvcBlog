<?php
/**
 * Created by PhpStorm.
 * User: CHAN
 * Date: 2016/2/2
 * Time: 18:47
 */
class clientIpTool{
    // 获取IP地址
    public function getIP(){
        if(!empty($_SERVER["HTTP_CLIENT_IP"])){
            $cip = $_SERVER["HTTP_CLIENT_IP"];
        }
        elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        }
        elseif(!empty($_SERVER["REMOTE_ADDR"])){
            $cip = $_SERVER["REMOTE_ADDR"];
        }
        else{
            $cip = "未知IP！";
        }
        return $cip;
    }
}