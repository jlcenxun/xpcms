<!DOCTYPE html>
<html>
<head>
	<title>添加修改</title>
	@include('admins.public.init')
</head>
<body>
	<form class="phpcn-form phpcn-bg-fff phpcn-p-10">
		{{csrf_field()}}
		<input type="hidden" name="id" value="">
		<div class="phpcn-form-item">
			<label class="phpcn-form-lable">名称</label>
			<div class="phpcn-input-block">
				<input type="text" class="phpcn-input" name="title" value="" placeholder="比如：商城模块">
			</div>
		</div>
		<div class="phpcn-form-item">
			<label class="phpcn-form-lable">标识</label>
			<div class="phpcn-input-block">
				<input type="text" class="phpcn-input" name="code" value="" placeholder="标识必须英文">
			</div>
		</div>
		<div class="phpcn-form-item">
			<label class="phpcn-form-lable">前端首页功能</label>
			<div class="phpcn-input-block">
				<input type="text" class="phpcn-input" name="index_url" value="" placeholder="功能指php代码路径">
			</div>
		</div>
		<div id="index">
					<div class="phpcn-form-item" id="">
						<label class="phpcn-form-lable">前端首页模板</label>
						<div class="phpcn-input-block">
							<input type="text" class="phpcn-input" name="index_tpl[]" value="" placeholder="模版可多个">
						</div>
							<button type="button" class="layui-btn layui-btn-primary layui-btn-sm" onclick="model_add_index()">
								<i class="layui-icon">&nbsp;&nbsp;+&nbsp;&nbsp;</i>
							</button>
							<button type="button" class="layui-btn layui-btn-primary layui-btn-sm" onclick="model_del_index()">
								<i class="layui-icon">&nbsp;&nbsp;-&nbsp;&nbsp;</i>
							</button>
					</div>
				<div class="phpcn-form-item" id="index_0">
					<label class="phpcn-form-lable">前端首页模板</label>
					<div class="phpcn-input-block">
						<input type="text" class="phpcn-input" name="index_tpl[]" value="" placeholder="模版可多个">
					</div>
					<button type="button" class="layui-btn layui-btn-primary layui-btn-sm" onclick="model_add_index()">
						<i class="layui-icon">&nbsp;&nbsp;+&nbsp;&nbsp;</i>
					</button>
				</div>
		</div>
		<div class="phpcn-form-item">
			<label class="phpcn-form-lable">前端列表页功能</label>
			<div class="phpcn-input-block">
				<input type="text" class="phpcn-input" name="list_url" value="" placeholder="功能指php代码路径">
			</div>
		</div>
		<div id="list">
					<div class="phpcn-form-item" id="">
						<label class="phpcn-form-lable">前端列表页模板</label>
						<div class="phpcn-input-block">
							<input type="text" class="phpcn-input" name="list_tpl[]" value="" placeholder="模版可多个">
						</div>
							<button type="button" class="layui-btn layui-btn-primary layui-btn-sm" onclick="model_add_list()">
								<i class="layui-icon">&nbsp;&nbsp;+&nbsp;&nbsp;</i>
							</button>
							<button type="button" class="layui-btn layui-btn-primary layui-btn-sm" onclick="model_del_list()">
								<i class="layui-icon">&nbsp;&nbsp;-&nbsp;&nbsp;</i>
							</button>
					</div>
				<div class="phpcn-form-item" id="list_0">
					<label class="phpcn-form-lable">前端列表页模板</label>
					<div class="phpcn-input-block">
						<input type="text" class="phpcn-input" name="list_tpl[]" value="" placeholder="模版可多个">
					</div>
					<button type="button" class="layui-btn layui-btn-primary layui-btn-sm" onclick="model_add_list()">
						<i class="layui-icon">&nbsp;&nbsp;+&nbsp;&nbsp;</i>
					</button>
				</div>
		</div>
		<div class="phpcn-form-item">
			<label class="phpcn-form-lable">前端内容页功能</label>
			<div class="phpcn-input-block">
				<input type="text" class="phpcn-input" name="detail_url" value="" placeholder="功能指php代码路径">
			</div>
		</div>
		<div id="content">
					<div class="phpcn-form-item" id="">
						<label class="phpcn-form-lable">前端内容页模板</label>
						<div class="phpcn-input-block">
							<input type="text" class="phpcn-input" name="detail_tpl[]" value="" placeholder="模版可多个">
						</div>
							<button type="button" class="layui-btn layui-btn-primary layui-btn-sm" onclick="model_add_content()">
								<i class="layui-icon">&nbsp;&nbsp;+&nbsp;&nbsp;</i>
							</button>
							<button type="button" class="layui-btn layui-btn-primary layui-btn-sm" onclick="model_del_content()">
								<i class="layui-icon">&nbsp;&nbsp;-&nbsp;&nbsp;</i>
							</button>
					</div>
				<div class="phpcn-form-item" id="content_0">
					<label class="phpcn-form-lable">前端内容页模板</label>
					<div class="phpcn-input-block">
						<input type="text" class="phpcn-input" name="detail_tpl[]" value="" placeholder="模版可多个">
					</div>
					<button type="button" class="layui-btn layui-btn-primary layui-btn-sm" onclick="model_add_content()">
						<i class="layui-icon">&nbsp;&nbsp;+&nbsp;&nbsp;</i>
					</button>
				</div>
		</div>
		<div class="phpcn-form-item">
			<label class="phpcn-form-lable">排序</label>
			<div class="phpcn-input-block">
				<input type="number" class="phpcn-input" name="ord" value="">
			</div>
		</div>
		<div class="phpcn-form-item">
			<label class="phpcn-form-lable">介绍</label>
			<div class="phpcn-input-block">
				<textarea class="phpcn-input" name="descs"></textarea>
			</div>
		</div>
		<div class="phpcn-form-item">
			<label class="phpcn-form-lable">状态</label>
			<div class="phpcn-input-block phpcn-form-radio">
				<input type="radio" name="status" value="0" title="开启" >
				<input type="radio" name="status" value="1" title="关闭" >
			</div>
		</div>
		<!-- <div class="phpcn-form-item">
			<label class="phpcn-form-lable">成为左侧菜单</label>
			<div class="phpcn-input-block phpcn-form-radio">
				<input type="radio" name="menu" value="0" title="使用">	
				<input type="radio" name="menu" value="1" title="不使用" checked>
			</div>
		</div>
		<div class="phpcn-form-item">
			<label class="phpcn-form-lable">后端功能</label>
			<div class="phpcn-input-block">
				<input type="text" class="phpcn-input" name="controller" value="" placeholder="controller控制器">
			</div>
			<div class="phpcn-input-block">
				<input type="text" class="phpcn-input" name="action" value="" placeholder="action方法">
			</div>
		</div> -->
		<div class="phpcn-form-item">
			<label class="phpcn-form-lable">系统article基础表</label>
			<div class="phpcn-input-block phpcn-form-radio">
				<input type="radio" name="article" value="0" title="使用" >
				<input type="radio" name="article" value="1" title="不使用">
			</div>
		</div>
		<div class="phpcn-form-item">
			<label class="phpcn-form-lable">系统article内容表</label>
			<div class="phpcn-input-block phpcn-form-radio">
				<input type="radio" name="content" value="0" title="使用" >
				<input type="radio" name="content" value="1" title="不使用">
			</div>
		</div>
		<div id="mysql">
			<div class="phpcn-form-item">
				<label class="phpcn-form-lable">自定义数据表</label>
				<!-- <div class="phpcn-input-block">
					<input type="text" class="phpcn-input" placeholder="请输入表名" value="" disabled="disabled">
				</div> -->
				<div class="phpcn-input-block">
					<input type="text" class="phpcn-input" placeholder="请输入表作用" value="" disabled="disabled">
				</div>
				<div class="phpcn-input-block">
					<input type="text" class="phpcn-input" placeholder="请输入sql执行语句" value="" disabled="disabled">
				</div>
			</div>
			<div class="phpcn-form-item" id="mysql_0">
				<label class="phpcn-form-lable">自定义数据表</label>
				<!-- <div class="phpcn-input-block">
					<input type="text" class="phpcn-input" name="table_name[0]" placeholder="请输入表名">
				</div> -->
				<div class="phpcn-input-block">
					<input type="text" class="phpcn-input" name="table_effect[0]" placeholder="请输入表作用">
				</div>
				<div class="phpcn-input-block">
					
					<input type="text" class="phpcn-input" name="table_sql[0]" placeholder="请输入sql执行语句">
				</div>
				<button type="button" class="layui-btn layui-btn-primary layui-btn-sm" onclick="model_add_table()">
					<i class="layui-icon">&nbsp;&nbsp;+&nbsp;&nbsp;</i>
				</button>
			</div>
		</div>
	</form>
	<div class="phpcn-form-item phpcn-bg-fff">
		<div class="phpcn-tx-c">
			<button type="button" class="phpcn-button" onclick="model_save();">保存</button>
			<button type="button" class="phpcn-button phpcn-bg-black" onclick="model_cancel();">取消</button>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">

</script>