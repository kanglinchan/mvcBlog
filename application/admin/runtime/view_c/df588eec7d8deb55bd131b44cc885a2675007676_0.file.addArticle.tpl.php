<?php
/* Smarty version 3.1.29, created on 2016-02-21 17:36:10
  from "D:\new\application\admin\view\addArticle.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c9f58a1a0943_81797729',
  'file_dependency' => 
  array (
    'df588eec7d8deb55bd131b44cc885a2675007676' => 
    array (
      0 => 'D:\\new\\application\\admin\\view\\addArticle.tpl',
      1 => 1456076166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c9f58a1a0943_81797729 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>list</title>

    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo @constant('PLUG_IN');?>
/ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo @constant('PLUG_IN');?>
/ueditor/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo @constant('PLUG_IN');?>
/ueditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 >
        var ue = UE.getEditor('editor');
    <?php echo '</script'; ?>
>
</head>
<body>
<form action="/index.php/admin/blog/addArticle" method="post">
    文章标题：<input type="text" name="title">
    文章分类：<select name="type" id="">
        <option value=""></option>
    </select>
    文章内容：
    <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:1024px;height:500px;">
        <p>fddddddddd</p>
    <?php echo '</script'; ?>
>
    <input type="submit" name="submit" value="提交">

</form>
</body>
</html><?php }
}
