<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>roleList</title>
    <link rel="stylesheet" href="{{$smarty.const.ADMIN_CSS}}/roleList.css">
</head>
<body>

    <ul>
        <li>
            <span class="role_id">角色编号</span>
            <span class="role_name">角色名称</span>
            <span class="role_remark">角色描述</span>
            <span class="role_status">权限操作</span>
            <span class="role_controller">删除角色</span>
        </li>
        {{foreach $data as $v}}
             <li>
                 <span class="role_id">{{$v.id}}</span>
                 <span class="role_name">{{$v.name}}</span>
                 <span class="role_remark">{{$v.remark}}</span>
                 {{* <span class="role_status">
                        {{if $v.status == 1}}
                        开启
                        {{else}}
                        关闭
                        {{/if}}
                    </span>*}}
                    <span class="role_controller">
                        <a href="/index.php/admin/Rbac/roleHandler/rid/{{$v.id}}">权限操作</a>
                    </span>
                    <span class="role_controller">
                        <a href="/index.php/admin/Rbac/deleteRole/rid/{{$v.id}}">删除</a>
                    </span>

             </li>
        {{/foreach}}


    </ul>
</body>
</html>