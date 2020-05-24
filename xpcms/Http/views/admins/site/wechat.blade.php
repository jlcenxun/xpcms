<!DOCTYPE html>
<html>
<head>
	<title>微信公众号设置</title>
	<link rel="stylesheet" href="/static/css/style.css"  media="all">
	<script type="text/javascript" src="/static/js/jquery3.4.1.js"></script>
	<script type="text/javascript" src="/static/layer/layer.js"></script>
	<script type="text/javascript" src="/static/js/vue.min.js"></script>
	<script type="text/javascript" src="/static/js/phpcn.js"></script>
</head>
<body>
	<div class="phpcn-title">微信公众号设置</div>
		<form class="phpcn-form phpcn-bg-fff phpcn-p-10">
			<div class="phpcn-form-item phpcn-bg-fff ">
				<label class="phpcn-form-lable">AppID：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="AppID" placeholder="请输入开发者ID(AppID)" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff ">
				<label class="phpcn-form-lable">AppSecret：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="AppSecret" placeholder="请输入开发者密码(AppSecret)" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff ">
				<label class="phpcn-form-lable">Token：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="Token" placeholder="请输入Token" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff ">
				<label class="phpcn-form-lable">EncodingAESKey：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="EncodingAESKey" placeholder="请输入EncodingAESKey" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff ">
				<label class="phpcn-form-lable">回调URL：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="url" placeholder="请输入url" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff ">
				<button class="phpcn-button" type='button' onclick="site_save();">保存</button>
			</div>
		</form>
	</div>
</body>
</html>