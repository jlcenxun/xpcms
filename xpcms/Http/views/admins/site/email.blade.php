<!DOCTYPE html>
<html>
<head>
	<title>邮箱配置</title>
	<link rel="stylesheet" href="/static/css/style.css"  media="all">
	<script type="text/javascript" src="/static/js/jquery3.4.1.js"></script>
	<script type="text/javascript" src="/static/layer/layer.js"></script>
	<script type="text/javascript" src="/static/js/vue.min.js"></script>
	<script type="text/javascript" src="/static/js/phpcn.js"></script>
<style>
.phpcn-form-lable{width:180px;}
.phpcn-input-inline{margin-left: 210px;}
</style>
</head>
<body>
	<div class="phpcn-tab phpcn-bg-fff">
		<dl>
			<dd class="phpcn-tab-on">邮箱配置</dd>
			<dd>发送测试</dd>
		</dl>
	</div>
	<form class="phpcn-form phpcn-bg-fff phpcn-p-10">
		{{csrf_field()}}
		<div class="phpcn-tab-item">
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">邮件发送模式：</label>
				<div class="phpcn-input-inline phpcn-form-radio">
				 	<input type="radio" name="send_type" value="1" title="SMTP发送" >
					<input type="radio" name="send_type" value="2" title="MAIL模块发送" >
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">邮件服务器：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="server_address" placeholder="请输入邮件服务器地址" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">邮件发送端口：</label>
				<div class="phpcn-input-block">
				 	<input type="text" name="port" placeholder="邮件发送端口" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">发件人地址：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="from_address" placeholder="发件人地址" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">AUTH LOGIN验证：</label>
				<div class="phpcn-input-inline phpcn-form-switch2" >
				 	<input type="radio" name="auth_check" value="0" title="关闭" >
				 	<input type="radio" name="auth_check" value="1" title="开启">
				 </div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">用户名：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="check_user" placeholder="验证用户名" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">密码：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="check_pwd" placeholder="验证密码" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">加密方式：</label>
				<div class="phpcn-input-block phpcn-form-select">
				 	<select name="encryption">
		                <option value="1" >TLS</option>
		                <option value="2" >SSL</option>
		             </select>
			    </div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">发件人名称：</label>
				<div class="phpcn-input-block">
				 	<input type="text" name="name" placeholder="发件人名称" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<button class="phpcn-button" type='button' onclick="site_save();">保存</button>
			</div>
		</div>
		<div class="phpcn-tab-item">
			<div class="phpcn-form-item phpcn-bg-fff phpcn-clear">
				<div class="phpcn-form-item phpcn-bg-fff">
					<label class="phpcn-form-lable">测试邮件标题：</label>
					<div class="phpcn-input-inline">
					 	<input type="text" name="subject" placeholder="测试邮件标题" class="phpcn-input" value="">
					</div>
				</div>
				<div class="phpcn-form-item phpcn-bg-fff">
					<label class="phpcn-form-lable">测试邮件内容：</label>
					<div class="phpcn-input-inline">
					 	<textarea placeholder="测试邮件内容" class="phpcn-textarea" name="content"></textarea>
					</div>
				</div>
				<div class="phpcn-form-item phpcn-bg-fff">
					<label class="phpcn-form-lable">收件人邮箱地址：</label>
					<div class="phpcn-input-inline">
					 	<input type="text" name="to" placeholder="收件人邮箱地址" class="phpcn-input" value="">
					</div>
				</div>
				<div class="phpcn-input-inline phpcn-l phpcn-ml-30">
				 	<button class="phpcn-button phpcn-bg-yellow" type='button' onclick="check_email();">发送测试</button>
				</div>
			</div>
		</div>
	</form>
</body>
</html>