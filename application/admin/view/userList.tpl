<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>userList</title>
    <link rel="stylesheet" href="{{$smarty.const.ADMIN_CSS}}/userList.css">
</head>
<body>
<ul>
    <li>
        <span class="user_id">用户编号</span>
        <span class="user_name">用户名称</span>
        <span class="user_login_time">上次登录时间</span>
        <span class="user_login_ip">上次登录IP</span>
        <span class="user_status">锁定状态</span>
        <span class="user_group">所属组别</span>
        <span class="user_controller">操作</span>

    </li>
   {{foreach $data as $v}}
    <li>
        <span class="user_id">{{$v.id}}</span>
        <span class="user_name">{{$v.username}}</span>
        <span class="user_login_time">{{$v.logintime}}</span>
        <span class="user_login_ip">{{$v.loginip}}</span>
        <span class="user_status">
            {{if $v.status == 1}}
                可用状态
            {{else}}
                冻结状态
            {{/if}}
        </span>
        <span class="user_group">
            {{foreach $v.roleName as $name}}
            {{$name}} <br>
            {{/foreach}}

        </span>
        <span class="user_controller">
            <a href="/index.php/admin/Rbac/userHandler/idName/{{$v.id}}_{{$v.username}}"> 配置角色</a>
           </span>
    </li>
    {{/foreach}}


</body>
</html>