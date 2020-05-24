<!DOCTYPE html>
<html>
<head>
	<title>短信配置</title>
	<link rel="stylesheet" href="/static/css/style.css"  media="all">
	<script type="text/javascript" src="/static/js/jquery3.4.1.js"></script>
	<script type="text/javascript" src="/static/layer/layer.js"></script>
	<script type="text/javascript" src="/static/js/vue.min.js"></script>
	<script type="text/javascript" src="/static/js/phpcn.js"></script>
<style>.phpcn-input{width:250px;}</style>
</head>
<body>
	<div class="phpcn-title">短信通知自定义配置</div>
		<form class="phpcn-form phpcn-bg-fff phpcn-p-10" i=''>
			<div class="phpcn-form-item">
				<div class="phpcn-input-block">
				 	<input type="text" name="key[]" placeholder="请输入配置名，例：accessKeyId" class="phpcn-input" value="">
				</div>
				<div class="phpcn-input-block">
				 	<input type="text" name="key[]" placeholder="请输入值" class="phpcn-input" value="">
				</div>
				<div class="phpcn-input-block">
					<button type="button" class="phpcn-button phpcn-bg-red" onclick="form_del(this);">&nbsp;&nbsp;删除 -&nbsp;&nbsp;</button>
				</div>	
			</div>
			<div class="phpcn-form-item">
				<div class="phpcn-input-block">
				 	<input type="text" name="key1[]" placeholder="请输入配置名，例：accessKeyId" class="phpcn-input">
				</div>
				<div class="phpcn-input-block">
				 	<input type="text" name="key1[]" placeholder="请输入值" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item">
				<div class="phpcn-input-block">
				 	<input type="text" name="key2[]" placeholder="请输入配置名，例：accessKeySecret" class="phpcn-input">
				</div>
				<div class="phpcn-input-block">
				 	<input type="text" name="key2[]" placeholder="请输入值" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item">
				<div class="phpcn-input-block">
				 	<input type="text" name="key3[]" placeholder="请输入配置名，例：SignName" class="phpcn-input" value="">
				</div>
				<div class="phpcn-input-block">
				 	<input type="text" name="key3[]" placeholder="请输入值" class="phpcn-input" value="">
				</div>
			</div>

			<button type="button" class="phpcn-button phpcn-bg-black phpcn-m-10" onclick="form_add(this);">&nbsp;&nbsp;添加更多 +&nbsp;&nbsp;</button>

			<div class="phpcn-form-item phpcn-bg-fff">
				<button class="phpcn-button" type='button' onclick="site_save();">保存</button>
			</div>
		</form>
	</div>
</body>
</html>