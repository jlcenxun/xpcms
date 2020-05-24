<!DOCTYPE html>
<html>
<head>
<title>SEO设置</title>
	<link rel="stylesheet" href="/static/css/style.css"  media="all">
	<script type="text/javascript" src="/static/js/jquery3.4.1.js"></script>
	<script type="text/javascript" src="/static/layer/layer.js"></script>
	<script type="text/javascript" src="/static/js/vue.min.js"></script>
	<script type="text/javascript" src="/static/js/phpcn.js"></script>
</head>
<body>
	<div class="phpcn-title">SEO设置</div>
		<form class="phpcn-form phpcn-bg-fff phpcn-p-10">
			@csrf
			<input type="hidden" name="keys" value="site_seo">
			<div class="phpcn-form-item phpcn-bg-fff ">
				<label class="phpcn-form-lable">网站标题：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="title" placeholder="请输入网站标题" class="phpcn-input" value="{{$seo['values']['title']}}">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff ">
				<label class="phpcn-form-lable">关键词：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="keywords" placeholder="请输入关键词" class="phpcn-input" value="{{$seo['values']['keywords']}}">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff ">
				<label class="phpcn-form-lable">网站描述：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="descs" placeholder="请输入描述" class="phpcn-input" value="{{$seo['values']['descs']}}">
				 	
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff ">
				<button class="phpcn-button" type='button' onclick="site_save();">保存</button>
			</div>
		</form>
	</div>
	<script>
		function site_save() {
			$.post('/admins/site/save',$('form').serialize(),function (res) {
				if (res.code > 0) {
					return layer.alert(res.msg,{icon:2})
				}
				layer.alert(res.msg,{icon:1});
			},'json')
		}
	</script>
</body>
</html>