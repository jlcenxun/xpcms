<!DOCTYPE html>
<html>
<head>
	<title>角色列表</title>
	<link rel="stylesheet" href="/static/css/style.css"  media="all">
	<script type="text/javascript" src="/static/js/jquery3.4.1.js"></script>
	<script type="text/javascript" src="/static/layer/layer.js"></script>
	<script type="text/javascript" src="/static/js/vue.min.js"></script>
	<script type="text/javascript" src="/static/js/phpcn.js"></script>
</head>
<body>
	<div class="header">
		<button class="phpcn-button phpcn-button-edit phpcn-r phpcn-m-5" onclick="groups_add()">添加</button>
	</div>
	<div class="phpcn-form phpcn-pd-10 phpcn-bg-fff">
		<table class="phpcn-table">
			<thead>
			    <tr>
					<th>ID</th>
					<th>角色名称</th>
					<th>操作</th>
			    </tr>
			</thead>
		  	<tbody>
				@foreach($groups as $item)
			    <tr>
					<td id="gid">{{$item['gid']}}</td>
					<td>{{$item['title']}}</td>
					<td>
						<button class="phpcn-button phpcn-button-xs" onclick="groups_add({{$item['gid']}})">编辑</button>
					</td>
			    </tr>
				@endforeach
		  	</tbody>
		</table>
	</div>
	<script>
		//添加（编辑）角色
		function groups_add(gid) {
			//iframe层
			layer.open({
				type: 2,
				title: gid?'编辑角色':'添加角色',
				shadeClose: true,
				shade: 0.8,
				area: ['780px', '90%'],
				content: '/admins/groups/add/?gid='+gid  //iframe的url
			});
		}
	</script>
</body>
</html>
