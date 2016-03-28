<?php
/* Smarty version 3.1.29, created on 2016-02-21 16:34:11
  from "D:\new\application\admin\view\index_left.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c9e70318bb32_31006453',
  'file_dependency' => 
  array (
    '9a1e4c0ca655561fa17719ffac5b6311eec3017f' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\index_left.tpl',
      1 => 1456072446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c9e70318bb32_31006453 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="background-color: cadetblue">
    <ul>
        <li><a href="/index.php/admin/Rbac/userList" target="right">用户列表</a></li>
        <li><a href="/index.php/admin/Rbac/addUser" target="right">添加用户</a></li>
        <li><a href="/index.php/admin/Rbac/addrole" target="right">添加角色</a></li>
        <li><a href="/index.php/admin/Rbac/roleList" target="right">角色列表</a></li>
        <li><a href="/index.php/admin/Rbac/addNode" target="right">添加权限</a></li>
        <li><a href="/index.php/admin/Rbac/nodeHandler" target="right">权限管理</a></li>

        <li>博客管理</li>
        <li><a href="/index.php/admin/blog/addArticle" target="right">新增文章</a> </li>
    </ul>

</body>
</html><?php }
}
