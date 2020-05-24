<!DOCTYPE html>
<html>
<head>
	<title>登录</title>
	<link rel="stylesheet" type="text/css" href="/models/portal/static/layui/css/layui.css">
	<script src="/static/js/jquery3.4.1.js"></script>
	<script type="text/javascript" src="/static/layer/layer.js"></script>
	<style type="text/css">
		body{padding: 10px;}
		form{
			margin:100px auto;
			width: 380px;}
	</style>
</head>
<body>
	<form class="layui-form layui-form-pane">
		{{csrf_field()}}
		<div class="layui-form-item">
			<input type="text" class="layui-input" name="username" placeholder="用户名">
		</div>
		<div class="layui-form-item">
			<input type="text" class="layui-input" name="pwd" placeholder="密码">
		</div>
		<div class="layui-form-item">
			<div class="layui-input-block" style="margin-left: 0px;">
				<input type="checkbox" lay-skin="primary" title="找回密码">
				<span><a href="">注册帐号</a></span>
			</div>
		</div>
		<button type="button" class="layui-btn" onclick="dologin()">登录</button>
	</form>
</body>
</html>
<script type="text/javascript">
	// layui.use(['layer','form'],function(){
	// 	layer = layui.layer;
	// 	form = layui.form;
	// 	$ = layui.jquery;
	// });

	function dologin(){
		var username = $.trim($('input[name="username"]').val());
		var pwd = $.trim($('input[name="pwd"]').val());
		var _token = $('input[name="_token"]').val();
		if(username==''){
			return layer.msg('请填写用户名',{icon:2});
		}
		if(pwd == ''){
			return layer.alert('请填写密码',{icon:2});
		}
		$.post('/account/dologin',{_token:_token,username:username,pwd:pwd},function(res){
			if(res.code>0){
				return layer.alert(res.msg,{icon:2});
			}else{
				layer.alert(res.msg,{icon:1});
				window.location.href='/list';
			}
		},'json');
	}
</script>