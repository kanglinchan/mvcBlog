<?php
/* Smarty version 3.1.29, created on 2016-02-16 13:46:11
  from "D:\new\application\admin\view\index_head.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c32823a68a70_10626468',
  'file_dependency' => 
  array (
    'c947b20a8e0f9508536a6353a1d3243116a7b097' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\index_head.tpl',
      1 => 1455630358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c32823a68a70_10626468 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="background-color: antiquewhite" ">
<div id="head">
    <span>你好<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
,欢迎回来！</span>
    <a target="_top" href="/index.php/admin/admin/logout">退出</a>
</div>
</body>
</html><?php }
}
