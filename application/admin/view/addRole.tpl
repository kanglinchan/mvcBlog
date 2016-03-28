<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="/index.php/admin/Rbac/addRole" method="post">
    角色名称：<input type="text" name="name"/>
    角色描述：<input type="text" name="title"/>
    是否开启：<input type="radio" name="status" value="1" checked="selected">开启
    <input type="radio" name="status" value="0"> 关闭
    <input type="submit" value="保存角色">
</form>
</body>
</html>