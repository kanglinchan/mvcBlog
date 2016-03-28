<?php /* Smarty version Smarty-3.1.19, created on 2016-01-31 17:40:25
         compiled from ".\application\admin\view\jump.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1250556ae41231de8e3-34428446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f3fb01346f270f8f4a939b1a20af5a1efc34d3b' => 
    array (
      0 => '.\\application\\admin\\view\\jump.tpl',
      1 => 1454262010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1250556ae41231de8e3-34428446',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56ae412321c3e3_47850435',
  'variables' => 
  array (
    'time' => 0,
    'url' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ae412321c3e3_47850435')) {function content_56ae412321c3e3_47850435($_smarty_tpl) {?><!DOCTYPE html>
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
</html><?php }} ?>
