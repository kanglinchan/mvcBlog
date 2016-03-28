<?php
/* Smarty version 3.1.29, created on 2016-02-16 10:13:37
  from "D:\new\application\admin\view\updateNode.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c2f65145d6a3_88752774',
  'file_dependency' => 
  array (
    'cd7e340670872c92827deaa75b2fadd1f576c00a' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\updateNode.tpl',
      1 => 1455468910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c2f65145d6a3_88752774 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加节点</title>
</head>
<body>
    <form action="/index.php/admin/Rbac/updateNode/id/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" method="post">


        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
名称：<input type="text" name="name"
                        <?php if (isset($_smarty_tpl->tpl_vars['data']->value['name'])) {?>
                            value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
"
                            <?php } else { ?>
                            value="请输入<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
名称"
                        <?php }?> >

        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
描述：<input type="text" name="title"
                         <?php if (isset($_smarty_tpl->tpl_vars['data']->value['title'])) {?>
                         value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
"
                         <?php } else { ?>
                         value="请输入<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
描述"
                         <?php }?> >

        是否开启：开启 <input type="radio" name="status" value="1" checked="selected"> 关闭 <input type="radio" name="status" value="0">
        排序：<input type="text" name="sort" value="">
        <input type="submit" value="保存修改">
    </form>
</body>
</html><?php }
}
