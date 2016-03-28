<?php
/* Smarty version 3.1.29, created on 2016-02-16 12:27:28
  from "D:\new\application\admin\view\admin_login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c315b07e30e6_05508176',
  'file_dependency' => 
  array (
    '78938c09e02ed247f4c2d72c96ecd2937759aa00' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\admin_login.tpl',
      1 => 1455624310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c315b07e30e6_05508176 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
</head>
<body>
    <h1>管理员后台</h1>

    <form action="" method="post">
        用户名: <input type="text" name="username" >
        密码： <input type="password" name="password">
        <input type="checkbox" name="remember" value="yes"> 7天内自动登录
        <input type="submit" value="登陆">
    </form>
</body>
</html><?php }
}
