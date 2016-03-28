<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>list</title>

    <script type="text/javascript" charset="utf-8" src="{{$smarty.const.PLUG_IN}}/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="{{$smarty.const.PLUG_IN}}/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="{{$smarty.const.PLUG_IN}}/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script >
        var ue = UE.getEditor('editor');
    </script>
</head>
<body>
<form action="/index.php/admin/blog/addArticle" method="post">
    文章标题：<input type="text" name="title">
    文章分类：<select name="type" id="">
        <option value=""></option>
    </select>
    文章内容：
    <script id="editor" type="text/plain" style="width:1024px;height:500px;">
        <p>fddddddddd</p>
    </script>
    <input type="submit" name="submit" value="提交">

</form>
</body>
</html>