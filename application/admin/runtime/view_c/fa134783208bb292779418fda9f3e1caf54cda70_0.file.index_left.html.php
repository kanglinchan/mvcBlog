<?php
/* Smarty version 3.1.29, created on 2016-02-16 09:06:24
  from "D:\new\application\admin\view\index_left.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c2e690410746_78238004',
  'file_dependency' => 
  array (
    'fa134783208bb292779418fda9f3e1caf54cda70' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\index_left.tpl',
      1 => 1455613171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c2e690410746_78238004 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="background-color: cadetblue">
    <ul>
        <li><a href="/index.php/admin/Rbac/userHandle" target="right">用户管理</a></li>
        <li><a href="/index.php/admin/Rbac/addUser" target="right">添加用户</a></li>
        <li><a href="/index.php/admin/Rbac/addrole" target="right">添加角色</a></li>
        <li><a href="/index.php/admin/Rbac/roleHandler" target="right">角色管理</a></li>
        <li><a href="/index.php/admin/Rbac/addNode/pid/0/level/0" target="right">添加权限</a></li>
        <li><a href="/index.php/admin/Rbac/nodeHandler" target="right">权限管理</a></li>
    </ul>

</body>
</html><?php }
}
