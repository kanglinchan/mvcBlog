<?php
/* Smarty version 3.1.29, created on 2016-02-14 15:16:45
  from "D:\new\application\admin\view\nodeHandler.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c09a5dd590a7_06239602',
  'file_dependency' => 
  array (
    'b573cce53eeab37bc02d24611aa13f57b52418a6' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\nodeHandler.tpl',
      1 => 1455463001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c09a5dd590a7_06239602 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '158156c09a5dcad9f8_97359107';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加权限</title>
</head>
<body>

    <h3><a href="/index.php/admin/Rbac/addNode/pid/0">添加应用</a></h3>





        <?php if (!empty($_smarty_tpl->tpl_vars['data']->value)) {?>
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
                <div class="module">
                    <span><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</span>
                    <a href="/index.php/admin/Rbac/addNode/pid/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
/lv/<?php echo $_smarty_tpl->tpl_vars['v']->value['level']+1;?>
">添加控制器</a>

                    <a href="/index.php/admin/Rbac/updateNode/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
/">修改</a>
                    <a href="#">删除</a>

                <?php if (!empty($_smarty_tpl->tpl_vars['v']->value['child'])) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['v']->value['child'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_1_1_saved_item = isset($_smarty_tpl->tpl_vars['v_1']) ? $_smarty_tpl->tpl_vars['v_1'] : false;
$_smarty_tpl->tpl_vars['v_1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v_1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v_1']->value) {
$_smarty_tpl->tpl_vars['v_1']->_loop = true;
$__foreach_v_1_1_saved_local_item = $_smarty_tpl->tpl_vars['v_1'];
?>
                        <div class="controller">
                            <span><?php echo $_smarty_tpl->tpl_vars['v_1']->value['title'];?>
</span>
                            <a href="/index.php/admin/Rbac/addNode/pid/<?php echo $_smarty_tpl->tpl_vars['v_1']->value['id'];?>
/lv/<?php echo $_smarty_tpl->tpl_vars['v_1']->value['level']+1;?>
">添加方法</a>
                            <?php if (!empty($_smarty_tpl->tpl_vars['v_1']->value['child'])) {?>
                                <div class="method">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['v_1']->value['child'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_2_2_saved_item = isset($_smarty_tpl->tpl_vars['v_2']) ? $_smarty_tpl->tpl_vars['v_2'] : false;
$_smarty_tpl->tpl_vars['v_2'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v_2']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v_2']->value) {
$_smarty_tpl->tpl_vars['v_2']->_loop = true;
$__foreach_v_2_2_saved_local_item = $_smarty_tpl->tpl_vars['v_2'];
?>
                                        <span><?php echo $_smarty_tpl->tpl_vars['v_2']->value['title'];?>
</span>
                                        <a href="#">删除</a>
                                        <a href="#">修改</a>
                                    <?php
$_smarty_tpl->tpl_vars['v_2'] = $__foreach_v_2_2_saved_local_item;
}
if ($__foreach_v_2_2_saved_item) {
$_smarty_tpl->tpl_vars['v_2'] = $__foreach_v_2_2_saved_item;
}
?>
                                </div>
                            <?php }?>
                        </div>

                    <?php
$_smarty_tpl->tpl_vars['v_1'] = $__foreach_v_1_1_saved_local_item;
}
if ($__foreach_v_1_1_saved_item) {
$_smarty_tpl->tpl_vars['v_1'] = $__foreach_v_1_1_saved_item;
}
?>
                <?php }?>
                </div>
            <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
        <?php }?>




</body>
</html><?php }
}
