<?php
/* Smarty version 3.1.29, created on 2016-02-17 16:17:19
  from "D:\new\application\admin\view\roleList.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c49d0fc2ae69_81776103',
  'file_dependency' => 
  array (
    '2b133defcfb842d657df1edb9a8b97e6ef0d81d3' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\roleList.tpl',
      1 => 1455725670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c49d0fc2ae69_81776103 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>roleList</title>
    <link rel="stylesheet" href="<?php echo @constant('ADMIN_CSS');?>
/roleList.css">
</head>
<body>

    <ul>
        <li>
            <span class="role_id">角色编号</span>
            <span class="role_name">角色名称</span>
            <span class="role_remark">角色描述</span>
            <span class="role_status">权限操作</span>
            <span class="role_controller">删除角色</span>
        </li>
        <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
             <li>
                 <span class="role_id"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span>
                 <span class="role_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
                 <span class="role_remark"><?php echo $_smarty_tpl->tpl_vars['v']->value['remark'];?>
</span>
                 
                    <span class="role_controller">
                        <a href="/index.php/admin/Rbac/roleHandler/rid/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">权限操作</a>
                    </span>
                    <span class="role_controller">
                        <a href="/index.php/admin/Rbac/deleteRole/rid/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a>
                    </span>

             </li>
        <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>


    </ul>
</body>
</html><?php }
}
