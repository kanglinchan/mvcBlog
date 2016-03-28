<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="index.php?p=admin&c=Rbac&a=adduser" method="post">
    名字：<input type="text" name="username">
    密码：<input type="password" name="password">
    重复密码：<input type="password" name="repeat_password">
    邮箱地址：<input type="text" name="email">
    描述：<input type="text" name="remark">
    是否开启：<input type="radio" value="1" name="status" checked="checked">
    提交： <input type="submit" value="提交">
</form>


</body>
</html>