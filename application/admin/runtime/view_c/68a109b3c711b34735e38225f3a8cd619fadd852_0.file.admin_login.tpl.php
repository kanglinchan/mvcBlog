<?php
/* Smarty version 3.1.29, created on 2016-03-05 08:14:28
  from "E:\new\application\admin\view\admin_login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56da9564533b53_02475393',
  'file_dependency' => 
  array (
    '68a109b3c711b34735e38225f3a8cd619fadd852' => 
    array (
      0 => 'E:\\new\\application\\admin\\view\\admin_login.tpl',
      1 => 1455624312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56da9564533b53_02475393 ($_smarty_tpl) {
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
