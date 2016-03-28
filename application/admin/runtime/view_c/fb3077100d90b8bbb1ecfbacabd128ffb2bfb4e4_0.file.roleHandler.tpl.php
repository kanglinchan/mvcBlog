<?php
/* Smarty version 3.1.29, created on 2016-02-17 16:17:51
  from "D:\new\application\admin\view\roleHandler.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c49d2f59e5c4_73178551',
  'file_dependency' => 
  array (
    'fb3077100d90b8bbb1ecfbacabd128ffb2bfb4e4' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\roleHandler.tpl',
      1 => 1455725612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c49d2f59e5c4_73178551 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>角色控制</title>
    <link rel="stylesheet" href="<?php echo @constant('ADMIN_CSS');?>
/roleHandler.css">
</head>
<body>

<h3><a href="/index.php/admin/Rbac/rolelList">返回</a></h3>


<form action="/index.php/admin/Rbac/roleHandler/rid/<?php echo $_smarty_tpl->tpl_vars['rid']->value;?>
" method="post">

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
</span> <input type="checkbox" name="access[]" value="1_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">

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
</span> <input type="checkbox" name="access[]" value="2_<?php echo $_smarty_tpl->tpl_vars['v_1']->value['id'];?>
">
        </div>
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
</span><input type="checkbox" name="access[]" value="3_<?php echo $_smarty_tpl->tpl_vars['v_2']->value['id'];?>
">
                <?php
$_smarty_tpl->tpl_vars['v_2'] = $__foreach_v_2_2_saved_local_item;
}
if ($__foreach_v_2_2_saved_item) {
$_smarty_tpl->tpl_vars['v_2'] = $__foreach_v_2_2_saved_item;
}
?>
            </div>
            <?php }?>


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

    <input type="submit" name="submit" value="提交">

</form>





</body>
</html><?php }
}
