<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加节点</title>
</head>
<body>
    <form action="/index.php/admin/Rbac/updateNode/id/{{$data.id}}" method="post">


        {{$name}}名称：<input type="text" name="name"
                        {{if isset($data.name)}}
                            value="{{$data.name}}"
                            {{else}}
                            value="请输入{{$name}}名称"
                        {{/if}} >

        {{$name}}描述：<input type="text" name="title"
                         {{if isset($data.title)}}
                         value="{{$data.title}}"
                         {{else}}
                         value="请输入{{$data.title}}描述"
                         {{/if}} >

        是否开启：开启 <input type="radio" name="status" value="1" checked="selected"> 关闭 <input type="radio" name="status" value="0">
        排序：<input type="text" name="sort" value="">
        <input type="submit" value="保存修改">
    </form>
</body>
</html>