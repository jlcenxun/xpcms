<!DOCTYPE html>
<html>
<head>
	<title>菜单列表</title>
	<link rel="stylesheet" href="/static/css/style.css"  media="all">
	<script type="text/javascript" src="/static/js/jquery3.4.1.js"></script>
	<script type="text/javascript" src="/static/layer/layer.js"></script>
	<script type="text/javascript" src="/static/js/vue.min.js"></script>
	<script type="text/javascript" src="/static/js/phpcn.js"></script>
</head>
<body>
	<div class="phpcn-form phpcn-pd-10 phpcn-bg-fff">
        @csrf
		<button class="phpcn-button phpcn-button-xs" style="float: right;margin:5px 0px;" onclick="">返回上一级</button>
		<input type="hidden" name="pid" value="">
		<button type="button" class="phpcn-button phpcn-bg-black phpcn-button-xs phpcn-r phpcn-mb-5" onclick="add()">添加</button>
		<table class="phpcn-table">
			<thead>
			    <tr>
					<th>ID</th>
					<th>排序</th>
					<th>菜单名称</th>
					<th>Controller</th>
					<th>action</th>
					<th>是否隐藏</th>
					<th>是否禁用</th>
					<th></th>
			    </tr>
			</thead>
		  	<tbody>
				@foreach($lists as $menu)
			    <tr>
					<td>{{$menu['mid']}}</td>
					<td style="width: 60px;">{{$menu['ord']}}</td>
					<td>{{$menu['title']}}</td>
					<td>{{$menu['controller']}}</td>
					<td>{{$menu['action']}}</td>
					<td>{!! $menu['ishidden']==1?'<span style="color:red;">隐藏</sapn>':'显示'!!}</td>
					<td>{!!$menu['status']==1?'<span style="color:red;">禁用</span>':'正常'!!}</td>
					<td>
						<button type="button" class="phpcn-button phpcn-button-xs" onclick="subMenu({{$menu['mid']}})">子菜单</button>
						<button type="button" class="phpcn-button phpcn-bg-black phpcn-button-xs" onclick="add({{$menu['mid']}})">修改</button>
						<button type="button" class="phpcn-button phpcn-bg-red phpcn-button-xs" onclick="del({{$menu['mid']}})">删除</button>
					</td>
			    </tr>
				@endforeach
		  	</tbody>
		</table>
	</div>
</body>
<script>
    //子菜单，只需原URL带上参数即可
	function subMenu(pid) {
		window.location.href = '?pid=' + pid;
	}

	function add(mid) {
		//iframe层
		layer.open({
			type: 2,
			title: mid>0?'修改菜单':'添加菜单',
			shadeClose: false,
			shade: 0.8,
			area: ['680px', '90%'],
			content: '/admins/menus/add/?mid='+mid  //iframe的url
		});
	}

	function del(mid) {
	    var data = new Object();
	    data._token = $('input[name="_token"]').val();
	    data.mid = mid;
        //询问框
        layer.confirm('确定删除吗？', {
            icon:3,
            btn: ['确定','取消'] //按钮
        }, function(){
            $.post('/admins/menus/del',data,function (res) {
                if (res.code>0) {
                    return layer.alert(res.msg,{icon:2});
                }
                layer.alert(res.msg,{icon:1});
                window.location.reload();
            },'json');
        });
    }
</script>
</html>
