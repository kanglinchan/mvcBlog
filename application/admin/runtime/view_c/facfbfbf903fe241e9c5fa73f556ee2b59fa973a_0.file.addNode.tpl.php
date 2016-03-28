<?php
/* Smarty version 3.1.29, created on 2016-02-17 09:28:57
  from "D:\new\application\admin\view\addNode.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c43d59675924_82769671',
  'file_dependency' => 
  array (
    'facfbfbf903fe241e9c5fa73f556ee2b59fa973a' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\addNode.tpl',
      1 => 1455701333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c43d59675924_82769671 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加节点</title>
</head>
<body>
    <form action="/index.php/admin/Rbac/addNode/pl/<?php echo $_smarty_tpl->tpl_vars['data']->value['pid'];?>
_<?php echo $_smarty_tpl->tpl_vars['data']->value['level'];?>
" method="post">


        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
名称：<input type="text" name="name" value="请输入<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
名称"/>

        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
描述：<input type="text" name="title" value="请输入<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
描述"/>

        是否开启：开启 <input type="radio" name="status" value="1" checked="selected"> 关闭 <input type="radio" name="status" value="0">
        排序：<input type="text" name="sort" value="">
        <input type="submit" value="保存">
    </form>
</body>
</html><?php }
}
