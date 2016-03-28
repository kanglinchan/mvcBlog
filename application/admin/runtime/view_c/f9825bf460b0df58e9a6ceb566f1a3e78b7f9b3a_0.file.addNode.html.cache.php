<?php
/* Smarty version 3.1.29, created on 2016-02-14 14:32:33
  from "D:\new\application\admin\view\addNode.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c09001030b32_97245619',
  'file_dependency' => 
  array (
    'f9825bf460b0df58e9a6ceb566f1a3e78b7f9b3a' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\addNode.tpl',
      1 => 1455460349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c09001030b32_97245619 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '419956c09000f140c4_49355236';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加节点</title>
</head>
<body>
    <form action="/index.php/admin/Rbac/addNode/pid/<?php echo $_smarty_tpl->tpl_vars['data']->value['pid'];?>
/lv/<?php echo $_smarty_tpl->tpl_vars['data']->value['lv'];?>
" method="post">

        <?php if ($_smarty_tpl->tpl_vars['data']->value['lv'] == 0) {?>
            应用名称：
            <?php } elseif ($_smarty_tpl->tpl_vars['data']->value['lv'] == 1) {?>
                控制器名称：
            <?php } else { ?>
                方法名称：
        <?php }?>
        <input type="text" name="name">

        <?php echo $_smarty_tpl->tpl_vars['data']->value['pid'];?>
;

        应用描述：<input type="text" name="title">
        是否开启：开启 <input type="radio" name="status" value="1" checked="selected"> 关闭 <input type="radio" name="status" value="0">
        排序：<input type="text" name="sort" value="">
        <input type="submit" value="保存">
    </form>
</body>
</html><?php }
}
