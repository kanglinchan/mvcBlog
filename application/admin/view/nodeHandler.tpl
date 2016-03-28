<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加权限</title>
</head>
<body>

    <h3><a href="/index.php/admin/Rbac/addNode">添加应用</a></h3>





        {{if !empty($data) }}
            {{foreach $data as $v}}
                <div class="module">
                    <span>{{$v.title}}</span>
                    <a href="/index.php/admin/Rbac/addNode/pl/{{$v.id}}_{{$v.level+1}}">添加控制器</a>
                    <a href="/index.php/admin/Rbac/updateNode/id/{{$v.id}}">修改</a>
                    <a href="/index.php/admin/Rbac/deleteNode/id/{{$v.id}}">删除</a>

                {{if !empty($v.child)}}
                    {{foreach $v.child as $v_1}}
                        <div class="controller">
                            <span>{{$v_1.title}}</span>
                            <a href="/index.php/admin/Rbac/addNode/pl/{{$v_1.id}}_{{$v_1.level+1}}">添加方法</a>
                            <a href="/index.php/admin/Rbac/updateNode/id/{{$v_1.id}}">修改</a>
                            <a href="/index.php/admin/Rbac/deleteNode/id/{{$v_1.id}}">删除</a>

                            {{if !empty($v_1.child)}}
                                <div class="method">
                                    {{foreach $v_1.child as $v_2}}
                                        <span>{{$v_2.title}}</span>
                                        <a href="/index.php/admin/Rbac/deleteNode/id/{{$v_2.id}}">删除</a>
                                        <a href="/index.php/admin/Rbac/updateNode/id/{{$v_2.id}}">修改</a>
                                    {{/foreach}}
                                </div>
                            {{/if}}
                        </div>

                    {{/foreach}}
                {{/if}}
                </div>
            {{/foreach}}
        {{/if}}




</body>
</html>