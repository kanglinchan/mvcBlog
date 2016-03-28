<?php
/* Smarty version 3.1.29, created on 2016-02-16 09:14:41
  from "D:\new\application\admin\view\addRole.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c2e88137e308_20556205',
  'file_dependency' => 
  array (
    '237e4797aad05d978143d3f96ae1a8cab0f5f2b8' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\addRole.tpl',
      1 => 1455614078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c2e88137e308_20556205 ($_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="/index.php/admin/Rbac/addRole" method="post">
    角色名称：<input type="text" name="name"/>
    角色描述：<input type="text" name="title"/>
    是否开启：<input type="radio" name="status" value="1" checked="selected">开启
    <input type="radio" name="status" value="0"> 关闭
    <input type="submit" value="保存角色">
</form>
</body>
</html><?php }
}
