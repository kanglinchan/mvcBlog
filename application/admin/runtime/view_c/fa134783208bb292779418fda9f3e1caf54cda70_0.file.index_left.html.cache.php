<?php
/* Smarty version 3.1.29, created on 2016-02-14 10:43:04
  from "D:\new\application\admin\view\index_left.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c05a38de4f80_59491848',
  'file_dependency' => 
  array (
    'fa134783208bb292779418fda9f3e1caf54cda70' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\index_left.tpl',
      1 => 1455446470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c05a38de4f80_59491848 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3063356c05a38dba427_60471371';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="background-color: cadetblue">
        <h3><a href="/index.php/admin/Rbac/userHandle" target="right">用户管理</a></h3>
        <h3><a href="/index.php/admin/Rbac/addUser" target="right">添加用户</a></h3>
        <h3><a href="/index.php/admin/Rbac/addGroup" target="right">群组列表</a></h3>
        <h3><a href="/index.php/admin/Rbac/groupHandler" target="right">群组管理</a></h3>
        <h3><a href="/index.php/admin/Rbac/addNode/pid/0/lv/0" target="right">添加权限</a></h3>
        <h3><a href="/index.php/admin/Rbac/nodeHandler" target="right">权限管理</a></h3>
</body>
</html><?php }
}
