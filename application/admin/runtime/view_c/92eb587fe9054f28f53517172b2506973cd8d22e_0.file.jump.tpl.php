<?php
/* Smarty version 3.1.29, created on 2016-02-16 11:04:14
  from "D:\new\application\admin\view\jump.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c3022e4ae931_77965841',
  'file_dependency' => 
  array (
    '92eb587fe9054f28f53517172b2506973cd8d22e' => 
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
function content_56c3022e4ae931_77965841 ($_smarty_tpl) {
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
