<!DOCTYPE html>
<html>
<head>
    <title>添加角色</title>
    <link rel="stylesheet" href="/static/css/style.css"  media="all">
    <script type="text/javascript" src="/static/js/jquery3.4.1.js"></script>
    <script type="text/javascript" src="/static/layer/layer.js"></script>
    <script type="text/javascript" src="/static/js/vue.min.js"></script>
    <script type="text/javascript" src="/static/js/phpcn.js"></script>
</head>
<body>
<form class="phpcn-form phpcn-bg-fff phpcn-pd-10">
    @csrf
    <input type="hidden" id="gid" name="gid" value="{{$group['gid']}}">
     <div class="phpcn-form-item">
        <label class="phpcn-form-lable">角色名称</label>
        <div class="phpcn-input-inline">
            <input type="text" class="phpcn-input" name="title" value="{{$group['title']}}" >
        </div>
    </div>
    <div class="phpcn-form-item">
        <label class="phpcn-form-lable">权限菜单</label>
            @foreach($menus as $menu)
            <div class="layui-input-block">
                <!--父菜单-->
                <div class="phpcn-form-checkbox2" style="margin-left: 150px;">
                    <input type="checkbox" name="menu[{{$menu['mid']}}]" title="<strong>{{$menu['title']}}</strong>"  {{in_array($menu['mid'],$group['rights'])?'checked':''}} >
                </div>
                <!--子菜单-->
                <div style="margin-left: 150px;">
                    @if($menu['children'])
                    @foreach($menu['children'] as $children)
                    <div class="phpcn-form-checkbox2 phpcn-input-block">
                        <input type="checkbox" name="menu[{{$children['mid']}}]" title="<label>{{$children['title']}} </label>"  {{in_array($children['mid'],$group['rights'])? 'checked':''}}>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            <hr>
        @endforeach
    </div>
</form>
<div class="phpcn-form-item phpcn-tx-c">
    <div class="phpcn-input-block">
        <button type="button" class="phpcn-button" onclick="groups_save( )">保存</button>
    </div>
</div>
<script type="text/javascript">
    function groups_save() {
        var title = $.trim($('input[name="title"]').val());
        if (title == '') {
            return layer.alert('角色名不能为空',{icon:2});
        }
        $.post('/admins/groups/save',$('form').serialize(),function (res) {
            if (res.code > 0) {
                layer.alert(res.msg,{icon: 2});
                return;

            }
            layer.alert(res.msg,{icon:1});
            setTimeout(function () {
                parent.window.location.reload();
            },1000);
        },'json');
    }
</script>
</body>
</html>
