<?php
/* Smarty version 3.1.29, created on 2016-02-14 16:39:26
  from "D:\new\application\admin\view\admin_login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c0adbe33b677_12332099',
  'file_dependency' => 
  array (
    '46a610d388d6da3225c49a5d6ef646f1c0af4411' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\admin_login.tpl',
      1 => 1453962337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c0adbe33b677_12332099 ($_smarty_tpl) {
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
        用户名: <input type="text" name="usernaem" >
        密码： <input type="password" name="password">
        <input type="submit" value="登陆">
    </form>
</body>
</html><?php }
}
