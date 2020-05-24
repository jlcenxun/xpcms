<!DOCTYPE html>
<html>
<head>
	<title>添加修改菜单</title>
	<link rel="stylesheet" href="/static/css/style.css"  media="all">
	<script type="text/javascript" src="/static/js/jquery3.4.1.js"></script>
	<script type="text/javascript" src="/static/layer/layer.js"></script>
	<script type="text/javascript" src="/static/js/vue.min.js"></script>
	<script type="text/javascript" src="/static/js/phpcn.js"></script>
</head>
<body style="padding: 10px;">
	<form class="phpcn-form">
        @csrf
		<input type="hidden" name="pid" value="{{$menu['pid']}}">
		<input type="hidden" name="mid" value="{{$menu['mid']}}">
        <div class="phpcn-form-item phpcn-bg-fff phpcn-form-select">
            <label class="phpcn-form-lable">上级菜单：</label>
            <div class="phpcn-input-inline">
                <select id="menu_id">
                    <option value="0">顶级菜单</option>
                    @foreach($menus_top as $item)
                        <option value="{{$item['mid']}}" {{$item['mid']==$menu['pid']?'selected':''}}>{{ $item['title'] }}</option>
                        @foreach($menus_sub as $menu_sub)
                        <option value="{{$menu_sub['mid']}}" {{$menu_sub['mid']==$menu_sub['pid']?'selected':''}}>{{ $menu_sub['title'] }}</option>
                        '<hr>';
                        @endforeach
                    @endforeach
                </select>
            </div>
        </div>

		<div class="phpcn-form-item">
			<label class="phpcn-form-lable">菜单名称</label>
			<div class="phpcn-input-block">
				<input type="text" class="phpcn-input" name="title" value="{{$menu['title']}}">
			</div>
		</div>

		<div class="phpcn-form-item">
			<label class="phpcn-form-lable">排序</label>
			<div class="phpcn-input-block">
				<input type="text" class="phpcn-input" name="ord" value="{{$menu['ord']}}">
			</div>
		</div>

		<div class="phpcn-form-item">
			<label class="phpcn-form-lable">控制器</label>
			<div class="phpcn-input-block">
				<input type="text" class="phpcn-input" name="controller" value="{{$menu['controller']}}">
			</div>
		</div>

		<div class="phpcn-form-item">
			<label class="phpcn-form-lable">方法</label>
			<div class="phpcn-input-block">
				<input type="text" class="phpcn-input" name="action" value="{{$menu['action']}}">
			</div>
		</div>

		<div class="phpcn-form-item">
			<label class="phpcn-form-lable">状态</label>
			<div class="phpcn-input-block">
				<div class="phpcn-form-checkbox2"><input type="checkbox" name="ishidden" lay-skin="primary" title="是否隐藏" value="1"{{$menu['ishidden']==1?'checked':''}}></div>
				<div class="phpcn-form-checkbox2"><input type="checkbox" name="status" lay-skin="primary" title="是否禁用" value="1" {{$menu['status']==1?'checked':''}} ></div>
			</div>
		</div>
	</form>
	<div class="phpcn-form-item phpcn-tx-c">
		<button class="phpcn-button phpcn-bg-black" onclick="menus_save()">保存</button>
	</div>
</body>
<script>
    function menus_save() {
        var data = new Object();
        data._token = $('input[name="_token"]').val();
        data.pid = $('#menu_id').val();
        data.mid = $('input[name="mid"]').val();
        data.title = $.trim($('input[name="title"]').val());
        data.ord = $.trim($('input[name="ord"]').val());
        data.controller = $.trim($('input[name="controller"]').val());
        data.action = $.trim($('input[name="action"]').val());
        data.status = $('input[name="status"]').is(":checked")?1:0;
        data.ishidden = $('input[name="ishidden"]').is(":checked")?1:0;

        if (data.title=='') {
            return layer.alert('请填菜单名称',{icon:2});
        }
        if (data.controller=='') {
            return layer.alert('请填控制器名称',{icon:2});
        }
        console.log(data['controller'],data['action']);
       $.post('/admins/menus/save',data,function (res) {
           if (res.code>0) {
               return layer.alert(res.msg,{icon:2});
           }
           layer.alert(res.msg,{icon:1});
           setTimeout(function () {
                parent.window.location.reload();
           },800)
       },'json');

    }
</script>
</html>
