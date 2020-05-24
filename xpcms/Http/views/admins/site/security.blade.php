<!DOCTYPE html>
<html>
<head>
	<title>安全设置</title>
	<link rel="stylesheet" href="/static/css/style.css"  media="all">
	<script type="text/javascript" src="/static/js/jquery3.4.1.js"></script>
	<script type="text/javascript" src="/static/layer/layer.js"></script>
	<script type="text/javascript" src="/static/js/vue.min.js"></script>
	<script type="text/javascript" src="/static/js/phpcn.js"></script>
<style>
	.phpcn-form-lable{width:180px;}
	.phpcn-input-inline{margin-left:210px;}
</style>
</head>
<body>
	<div class="phpcn-title">安全设置</div>
		<form class="phpcn-form phpcn-bg-fff phpcn-p-10">
			<div class="phpcn-form-item phpcn-bg-fff ">
				<label class="phpcn-form-lable">后台最大登陆失败次数：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="login_faild" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff ">
				<label class="phpcn-form-lable">每分钟访问次数：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="visit_time" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff ">
				<label class="phpcn-form-lable">后台访问域名：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="sys_domain" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff ">
				<label class="phpcn-form-lable">错误日志预警大小：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="log_size" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff ">
			   <label class="phpcn-form-lable">设置：</label>
			    <div class="phpcn-input-inline phpcn-form-checkbox2" >
				 	<input type="checkbox" name="use_log" title="启用后台操作日志" value="1" >
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff ">
				<button type="button" class="phpcn-button" onclick="site_save();">保存</button>
			</div>
		</form>
	</div>
</body>
</html>