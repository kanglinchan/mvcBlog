<?php
/* Smarty version 3.1.29, created on 2016-02-14 16:49:39
  from "D:\new\application\admin\view\jump.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c0b023691072_30221914',
  'file_dependency' => 
  array (
    '3f3fb01346f270f8f4a939b1a20af5a1efc34d3b' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\jump.tpl',
      1 => 1454262010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c0b023691072_30221914 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8" />
    <meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
;url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" />
    <title>正在转跳</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h1>
    <h3>请耐心等待，页面正在转跳...</h3>
</body>
</html><?php }
}
