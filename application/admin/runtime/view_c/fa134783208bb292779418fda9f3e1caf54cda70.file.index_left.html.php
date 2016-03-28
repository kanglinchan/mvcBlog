<?php /* Smarty version Smarty-3.1.19, created on 2016-01-31 17:15:00
         compiled from ".\application\admin\view\index_left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1552056ae4114967904-35514670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa134783208bb292779418fda9f3e1caf54cda70' => 
    array (
      0 => '.\\application\\admin\\view\\index_left.tpl',
      1 => 1454001877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1552056ae4114967904-35514670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56ae4114a6bee2_80602063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ae4114a6bee2_80602063')) {function content_56ae4114a6bee2_80602063($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="background-color: cadetblue">
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
        <h3><a href="index.php?p=admin&c=Rbac&a=adduser" target="right"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a></h3>
<?php } ?>
</body>
</html><?php }} ?>
