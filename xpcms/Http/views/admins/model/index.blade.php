<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>模型列表</title>
@include('admins.public.init')
</head>
<body>
	<div class="phpcn-pd-10 phpcn-bg-fff">
		<div class="phpcn-list-header phpcn-mb-20 phpcn-clear">
			<div class="phpcn-row">
				<div class="phpcn-title phpcn-ps-r">模型列表</div>
				<!-- <button class="phpcn-button phpcn-bg-black phpcn-button-edit" onclick="field()" style="color:#fff;float:right;">字段列表</button> -->
				<button class="phpcn-button phpcn-bg-black phpcn-button-edit" onclick="model_add()" style="color:#fff;float:right;">添加</button>
				<div class="phpcn-col-md6 phpcn-mt-20">
					<div class="phpcn-form phpcn-bg-fff ">
						<div class="phpcn-form-item phpcn-bg-fff ">
							<div class="phpcn-input-block phpcn-col-md3">
								<select name="type">
									<option value="1">名称</option>
								 </select>
							</div>
							<div class="phpcn-input-block phpcn-col-md3">
								<input type="text" name="wd" value="" placeholder="搜索内容" class="phpcn-input">
							</div>
							<div class="phpcn-input-block phpcn-col-md2 phpcn-ml-10">
								<button class="phpcn-button" onclick="model_searchs()">搜索</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<table class="phpcn-table">
			<thead>
				<tr>
					<th>排序</th>
					<th>ID</th>
					<th>标识</th>
					<th>名称</th>
					<th>首页功能</th>
					<th>首页模版</th>
					<th>列表页模功能</th>
					<th>列表页模版</th>
					<th>内容页功能</th>
					<th>内容页模版</th>
					<th>修改时间</th>
					<th>状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
			@foreach($model as $item)
				<tr>
					<td>{{$item['ord']}}</td>
					<td>{{$item['id']}}</td>
					<td>{{$item['code']}}</td>
					<td>{{$item['title']}}</td>
					<td>{{$item['index_url']}}</td>
					<td>{{$item['index_tpl']}}</td>
					<td>{{$item['list_url']}}</td>
					<td>{{$item['list_tpl']}}</td>
					<td>{{$item['detail_url']}}</td>
					<td>{{$item['detail_tpl']}}</td>
					<td>{{$item['edit_time'] !=0?date('Y-m-d H:i:s',$item['edit_time']):''}}</td>
					<td>{{$item['status']==1?'启用':'禁用'}}</td>
					<td>
						<button class="phpcn-button phpcn-bg-black phpcn-button-edit" onclick="model_add({{$item['id']}})">修改</button>
						<button class="phpcn-button phpcn-bg-red phpcn-button-edit" onclick="model_del()">删除</button>
						<button class="phpcn-button phpcn-bg-black phpcn-button-edit" onclick="model_form_index()">生成表单</button>
						<button class="phpcn-button phpcn-bg-black phpcn-button-edit" onclick="model_field_index()">数据库</button>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</body>
<script>
	function model_add(id) {
		//iframe层
		layer.open({
			type: 2,
			title: id>0?'模型修改':'模型添加',
			shadeClose: true,
			shade: 0.8,
			area: ['680px', '100%'],
			content: '/admins/model/add?id='+id,  //iframe的url
		});
	}
</script>
</html>