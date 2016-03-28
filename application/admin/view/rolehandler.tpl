<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>角色控制</title>
    <link rel="stylesheet" href="{{$smarty.const.ADMIN_CSS}}/roleHandler.css">
</head>
<body>

<h3><a href="/index.php/admin/Rbac/rolelList">返回</a></h3>


<form action="/index.php/admin/Rbac/roleHandler/rid/{{$rid}}" method="post">

    {{foreach $data as $v}}
    <div class="module">
        <span>{{$v.title}}</span> <input type="checkbox" name="access[]" value="1_{{$v.id}}">

        {{if !empty($v.child)}}
        {{foreach $v.child as $v_1}}
        <div class="controller">
            <span>{{$v_1.title}}</span> <input type="checkbox" name="access[]" value="2_{{$v_1.id}}">
        </div>
            {{if !empty($v_1.child)}}
            <div class="method">
                {{foreach $v_1.child as $v_2}}
                <span>{{$v_2.title}}</span><input type="checkbox" name="access[]" value="3_{{$v_2.id}}">
                {{/foreach}}
            </div>
            {{/if}}


        {{/foreach}}
        {{/if}}
    </div>
    {{/foreach}}

    <input type="submit" name="submit" value="提交">

</form>





</body>
</html>