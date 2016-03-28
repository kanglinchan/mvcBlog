<?php
/* Smarty version 3.1.29, created on 2016-02-16 10:13:25
  from "D:\new\application\admin\view\addUser.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c2f645b4e8f5_81500664',
  'file_dependency' => 
  array (
    '98a6eed43ed76c8b6494a2dcc0b23af857727dd7' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\addUser.tpl',
      1 => 1454231367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c2f645b4e8f5_81500664 ($_smarty_tpl) {
?>
<!DOCTYPE html>
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
</html><?php }
}
