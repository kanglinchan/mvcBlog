<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>userHandler</title>
    <link rel="stylesheet" href="{{$smarty.const.ADMIN_CSS}}/userHandler.css">
</head>
<body>


<form action="/index.php/admin/Rbac/userHandler" method="post">
    <div id="form_center">
        用户编号：<input type="text" name="user_id" value="{{$data.id}}" readonly="readonly">
        用户名称：<input type="text" name="username" value="{{$data.username}}" readonly="readonly" />
        <div id="addRole_radio_div">
                添加群组：
                    {{foreach $roleArr as $value}}
            <input type="checkbox" name="roleArr[]" value="{{$value.id}}" />{{$value.remark}}
                    {{/foreach}}
        </div>
    </div>
    <input type="submit" value="保存">
</form>

</body>

{{*<script src="{{$smarty.const.ADMIN_JS}}/addRole.js"></script>*}}
</html>