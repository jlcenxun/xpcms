<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>内容列表</title>
@include('admins.public.init')
	<link rel="stylesheet" href="/static/layer/theme/default/layer.css"  media="all">
</head>
<body>
	<div class="phpcn-pd-10 phpcn-bg-fff">
		{{csrf_field()}}
		<div class="phpcn-list-header phpcn-mb-20 phpcn-clear">
			<div class="phpcn-row">
				<div class="phpcn-title phpcn-ps-r">内容列表</div>
				<button class="phpcn-button phpcn-bg-black phpcn-button-edit" onclick="add()" style="color:#fff;float:right;">添加</button>
				<div class="phpcn-col-md6 phpcn-mt-20">
					<div class="phpcn-form phpcn-bg-fff ">
						<div class="phpcn-form-item phpcn-bg-fff ">
							<div class="phpcn-input-block phpcn-col-md3">
								<select name="type">
									<option value="1" >标题</option>
								 </select>
							</div>
							<div class="phpcn-input-block phpcn-col-md3">
								<input type="text" name="wd" value="" placeholder="搜索内容" class="phpcn-input">
							</div>
							<div class="phpcn-input-block phpcn-col-md2 phpcn-ml-10">
								<button class="phpcn-button" onclick="searchs()">搜索</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<table class="phpcn-table">
			<thead>
				<tr>
					<th>ID</th>
					<th>模版</th>
					<th>标题</th>
					<th>分类</th>
					<th>作者</th>
					<th>修改时间</th>
					<th>状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach($lists as $item)
				<tr>
					<td>{{$item['id']}}</td>
					<td>{{isset($item['model']) ? $item['model']['title'] : '无'}}</td>
					<td>@if($item['cover_img'])
							<img style="widht:100px;height:50px;" src="{{$item['cover_img']}}">
						@endif
						{{$item['title']}}</td>
					<td>{{isset($item['cat']) ? $item['cat']['title'] : '无'}}</td>
					<td>{{$item['author']}}</td>
					<td>{{$item['edit_time']?date('Y-m-d H:i:s',$item['edit_time']):''}}</td>
					<td>{!!$item['status']==0?'待发布':'<span style="color:#FF5722">已发布</span>'!!}</td>
					<td>
						<button class="phpcn-button phpcn-bg-black phpcn-button-edit" onclick="add({{$item['id']}})">修改</button>
						<button class="phpcn-button phpcn-bg-red phpcn-button-edit" onclick="del({{$item['id']}})">删除</button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{$links}}
	</div>
	<div class="phpcn-page phpcn-bg-fff phpcn-pt-10 phpcn-pb-10"><span>共{{$total}}条记录</span></div>
</body>
</html>
<script type="text/javascript">
		function searchs() {
			var type = $('select[name="type"]').val();
			var keyword = $.trim($('input[name = "wd"]').val());

			window.location.href = '?type='+type+'&wd='+keyword;
		}
		//添加、修改内容
		function add(id) {
			window.location.href = '/admins/content/add?id='+id;
        }

        //删除内容
		function del(id) {
			var data = new Object();
			data._token = $('input[name="_token"]').val();
			data.aid = id;
			layer.confirm('确定要删除吗？', {
						icon:3,
						btn: ['确定','取消'] //按钮
					}, function(){
						$.post('/admins/content/delete',data,function (res) {
							if (res.code > 0) {
								return layer.alert(res.msg,{icon:2});
							}
							layer.alert(res.msg,{icon:1});
							setTimeout(function () {
								window.location.reload();
							},1000)
						},'json')
					}
			);
		}
</script>

