<?php
/* Smarty version 3.1.29, created on 2016-02-20 15:12:35
  from "D:\new\application\admin\view\userList.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c882635f3bc3_84987053',
  'file_dependency' => 
  array (
    '2ee1f7e9af77249a287697953280a11277db95a1' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\userList.tpl',
      1 => 1455981152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c882635f3bc3_84987053 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>userList</title>
    <link rel="stylesheet" href="<?php echo @constant('ADMIN_CSS');?>
/userList.css">
</head>
<body>
<ul>
    <li>
        <span class="user_id">用户编号</span>
        <span class="user_name">用户名称</span>
        <span class="user_login_time">上次登录时间</span>
        <span class="user_login_ip">上次登录IP</span>
        <span class="user_status">锁定状态</span>
        <span class="user_group">所属组别</span>
        <span class="user_controller">操作</span>

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
        <span class="user_id"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span>
        <span class="user_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</span>
        <span class="user_login_time"><?php echo $_smarty_tpl->tpl_vars['v']->value['logintime'];?>
</span>
        <span class="user_login_ip"><?php echo $_smarty_tpl->tpl_vars['v']->value['loginip'];?>
</span>
        <span class="user_status">
            <?php if ($_smarty_tpl->tpl_vars['v']->value['status'] == 1) {?>
                可用状态
            <?php } else { ?>
                冻结状态
            <?php }?>
        </span>
        <span class="user_group">
            <?php
$_from = $_smarty_tpl->tpl_vars['v']->value['roleName'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_name_1_saved_item = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['name']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
$__foreach_name_1_saved_local_item = $_smarty_tpl->tpl_vars['name'];
?>
            <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <br>
            <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_1_saved_local_item;
}
if ($__foreach_name_1_saved_item) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_1_saved_item;
}
?>

        </span>
        <span class="user_controller">
            <a href="/index.php/admin/Rbac/userHandler/idName/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
"> 配置角色</a>
           </span>
    </li>
    <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>


</body>
</html><?php }
}
