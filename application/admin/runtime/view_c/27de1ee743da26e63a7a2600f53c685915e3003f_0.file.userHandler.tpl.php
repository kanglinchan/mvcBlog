<?php
/* Smarty version 3.1.29, created on 2016-02-20 07:01:17
  from "D:\new\application\admin\view\userHandler.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c80f3d7e50a5_85883217',
  'file_dependency' => 
  array (
    '27de1ee743da26e63a7a2600f53c685915e3003f' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\userHandler.tpl',
      1 => 1455951591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c80f3d7e50a5_85883217 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>userHandler</title>
    <link rel="stylesheet" href="<?php echo @constant('ADMIN_CSS');?>
/userHandler.css">
</head>
<body>


<form action="/index.php/admin/Rbac/userHandler" method="post">
    <div id="form_center">
        用户编号：<input type="text" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" readonly="readonly">
        用户名称：<input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['username'];?>
" readonly="readonly" />
        <div id="addRole_radio_div">
                添加群组：
                    <?php
$_from = $_smarty_tpl->tpl_vars['roleArr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
            <input type="checkbox" name="roleArr[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['value']->value['remark'];?>

                    <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
?>
        </div>
    </div>
    <input type="submit" value="保存">
</form>

</body>


</html><?php }
}
