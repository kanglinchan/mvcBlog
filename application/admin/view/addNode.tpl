<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加节点</title>
</head>
<body>
    <form action="/index.php/admin/Rbac/addNode/pl/{{$data.pid}}_{{$data.level}}" method="post">


        {{$name}}名称：<input type="text" name="name" value="请输入{{$name}}名称"/>

        {{$name}}描述：<input type="text" name="title" value="请输入{{$name}}描述"/>

        是否开启：开启 <input type="radio" name="status" value="1" checked="selected"> 关闭 <input type="radio" name="status" value="0">
        排序：<input type="text" name="sort" value="">
        <input type="submit" value="保存">
    </form>
</body>
</html>