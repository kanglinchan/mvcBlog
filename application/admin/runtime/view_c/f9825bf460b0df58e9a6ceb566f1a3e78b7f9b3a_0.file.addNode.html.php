<?php
/* Smarty version 3.1.29, created on 2016-02-16 08:48:56
  from "D:\new\application\admin\view\addNode.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c2e278d2c400_22049171',
  'file_dependency' => 
  array (
    'f9825bf460b0df58e9a6ceb566f1a3e78b7f9b3a' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\addNode.tpl',
      1 => 1455612419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c2e278d2c400_22049171 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加节点</title>
</head>
<body>
    <form action="/index.php/admin/Rbac/addNode/pid/<?php echo $_smarty_tpl->tpl_vars['data']->value['pid'];?>
/level/<?php echo $_smarty_tpl->tpl_vars['data']->value['level'];?>
" method="post">


        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
名称：<input type="text" name="name" value="请输入<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
名称"/>

        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
描述：<input type="text" name="remark" value="请输入<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
描述"/>

        是否开启：开启 <input type="radio" name="status" value="1" checked="selected"> 关闭 <input type="radio" name="status" value="0">
        排序：<input type="text" name="sort" value="">
        <input type="submit" value="保存">
    </form>
</body>
</html><?php }
}
