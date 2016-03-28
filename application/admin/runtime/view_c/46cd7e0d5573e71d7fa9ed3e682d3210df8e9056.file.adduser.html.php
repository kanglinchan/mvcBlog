<?php /* Smarty version Smarty-3.1.19, created on 2016-01-31 17:15:03
         compiled from ".\application\admin\view\addUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126756ae41172bb383-91225953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46cd7e0d5573e71d7fa9ed3e682d3210df8e9056' => 
    array (
      0 => '.\\application\\admin\\view\\addUser.tpl',
      1 => 1454231367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126756ae41172bb383-91225953',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56ae41172e2d30_29014074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ae41172e2d30_29014074')) {function content_56ae41172e2d30_29014074($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="index.php?p=admin&c=Rbac&a=adduser" method="post">
    名字：<input type="text" name="username">
    密码：<input type="password" name="password">
    重复密码：<input type="password" name="repeat_password">
    邮箱地址：<input type="text" name="email">
    描述：<input type="text" name="remark">
    是否开启：<input type="radio" value="1" name="status" checked="checked">
    提交： <input type="submit" value="提交">
</form>


</body>
</html><?php }} ?>
