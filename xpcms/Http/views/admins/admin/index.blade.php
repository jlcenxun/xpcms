<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>管理员列表</title>
	<link rel="stylesheet" href="/static/css/style.css"  media="all">
	<script type="text/javascript" src="/static/js/jquery3.4.1.js"></script>
	<script type="text/javascript" src="/static/layer/layer.js"></script>
	<script type="text/javascript" src="/static/js/vue.min.js"></script>
	<script type="text/javascript" src="/static/js/phpcn.js"></script>
</head>
<body>

	<div class="phpcn-pd-10 phpcn-bg-fff" >
		@csrf
		<button class="phpcn-button" onclick="add()">添加</button>
		<table class="phpcn-table" style="text-align: center;">
			<thead >
		        <tr >
		            <th>ID</th>
		            <th>用户名</th>
		            <th>真实姓名</th>
		            <th>分组</th>
		            <th>最后登录时间</th>
		            <th>状态</th>
		            <th>操作</th>
		        </tr>
	   		</thead>
	        <tbody>
			@foreach($lists as $item)
	          	<tr>
		            <td>{{$item['id']}}</td>
		            <td>{{$item['username']}}</td>
		            <td>{{$item['real_name']}}</td>
		            <td>{{$groups[$item['group_id']]['title']}}</td>
		            <td>{{$item['login_lasttime']!=0?date('Y-m-d H:i:s',$item['login_lasttime']):''}}</td>
		            <td>{!!$item['status'] ==0?'正常':'<span style= "color:red;">禁用</span>'!!}</td>
					<td>
		           		<button class="phpcn-button phpcn-bg-black phpcn-button-edit"  onclick="add({{$item['id']}})">修改</button>
		           		<button class="phpcn-button phpcn-bg-red phpcn-button-edit" onclick="dodel({{$item['id']}})">删除</button>
		           	</td>
	          	</tr>
				@endforeach
	        </tbody>
	    </table>
    </div>
</body>
<script>
	//添加、修改管理员
	function add(admin_id) {
		layer.open({
			type: 2,
			title: admin_id>0? '编辑管理员':'添加管理员',
			shadeClose: true,
			shade: 0.8,
			area: ['680px', '90%'],
			content: '/admins/admin/add?admin_id='+admin_id,  //添加管理员时，未传参，则为：admin_id=undefined，在后台要强转为整数
		});
	}

	function dodel(id) {
		var data = new Object();
		data._token = $('input[name="_token"]').val();
		data.admin_id = id;
		layer.confirm('确定要删除吗？', {
					icon:3,
					btn: ['确定','取消'] //按钮
				}, function(){
					$.post('/admins/admin/del',data,function (res) {
						if (res.code > 0) {
							return layer.msg(res.msg,{icon:2});
						}
						layer.msg(res.msg,{icon:1});
						setTimeout(function () {
							window.location.reload();
						},1000)
					},'json')
				}
		);
	}
</script>
</html>