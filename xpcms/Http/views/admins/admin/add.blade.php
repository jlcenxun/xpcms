<!DOCTYPE html>
<html>
<head>
<title>添加、修改管理员</title>
	<link rel="stylesheet" href="/static/css/style.css"  media="all">
	<script type="text/javascript" src="/static/js/jquery3.4.1.js"></script>
	<script type="text/javascript" src="/static/layer/layer.js"></script>
	<script type="text/javascript" src="/static/js/vue.min.js"></script>
	<script type="text/javascript" src="/static/js/phpcn.js"></script>
</head>
<body style="padding: 10px;">
	@csrf
	<div class="phpcn-form phpcn-bg-fff phpcn-p-10">
		<input type="hidden" id="id" value="{{$admin['id']}}">
		<div class="phpcn-form-item phpcn-bg-fff ">
			<label class="phpcn-form-lable">用户名：</label>
			<div class="phpcn-input-inline">
			 	<input type="text" class="phpcn-input" id="username"  value=" {{$admin['username']}}" >
				<input type="text" id="user"  class="phpcn-input" style="border: 0;" value="{!!  $admin['username']? '不能修改用户名' : '' !!}">
			</div>
		</div>
		<div class="phpcn-form-item phpcn-bg-fff phpcn-form-select">
			<label class="phpcn-form-lable">角色：</label>
			<div class="phpcn-input-inline">
			 	<select id="group_id">
					<option value="0"></option>
					@foreach($groups as $group)
					<option value="{{$group['gid']}}" {{$admin['group_id']==$group['gid']?'selected':''}}>{{ $group['title'] }}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="phpcn-form-item phpcn-bg-fff ">
			<label class="phpcn-form-lable">密码：</label>
			<div class="phpcn-input-inline">
			 	<input type="text" class="phpcn-input" placeholder="不修改则无需填写" id="pwd">
			</div>
		</div>
		<div class="phpcn-form-item phpcn-bg-fff ">
			<label class="phpcn-form-lable">姓名：</label>
			<div class="phpcn-input-inline">
			 	<input type="text" class="phpcn-input" id="real_name" value=" {{$admin['real_name']}}">
			</div>
		</div>
		<div class="phpcn-form-item phpcn-bg-fff ">
			<label class="phpcn-form-lable">手机：</label>
			<div class="phpcn-input-inline">
			 	<input type="text" class="phpcn-input" id="mobile" value="{{$admin['mobile']}}">
			</div>
		</div>
		<div class="phpcn-form-item phpcn-bg-fff ">
		   <label class="phpcn-form-lable">设置：</label>
		    <div class="phpcn-input-inline phpcn-form-checkbox2" >
			 	<input type="checkbox" id="status" title="禁用" value="1" {{$admin['status']==1?'checked':''}} >
			 </div>
		</div>

		<div class="phpcn-form-item phpcn-bg-fff">
			<div class="phpcn-tx-c">
				<button class="phpcn-button" type='button' onclick="save()">保存</button>
				<button class="phpcn-button phpcn-bg-black" type='button' onclick="cancle()">取消</button>
			</div>
		</div>
	</div>
	<script>
		function save() {
			var data = new Object();
			data._token = $('input[name="_token"]').val();
			data.id = $('#id').val();
			data.username = $.trim($('#username').val());
			data.group_id =$('#group_id').val();
			data.password = $.trim($('#pwd').val());
			data.real_name = $.trim($('#real_name').val());
			data.mobile = $.trim($('#mobile').val());
			data.status = $('#status').is(":checked")?1:0;

			if (data.username == '') {
				return layer.msg('用户名不能为空',{icon:2});
			}

			if (data.group_id == 0) {
				return layer.msg('请选择角色',{icon:2});
			}

			if (data.id =='' & data.password == '') {
				layer.alert('密码不能为空',{icon:2});
				return;
			}

			if (data.real_name=='') {
				layer.alert('姓名不能为空',{icon:2})
				return;
			}
			if(data.mobile !=''& !(/^1[3456789]\d{9}$/.test(data.mobile))){
				layer.msg("手机号码有误，请重填",{icon:2});
				return false;
			}

			$.post('/admins/admin/save',data,function (res) {
				if (res.code > 0) {
					return layer.alert(res.msg,{icon:2});
				}
			layer.alert(res.msg,{icon:1});
				//刷新管理员列表
			setTimeout(function () {
				parent.window.location.reload() ;
			},1000)
			},'json');
		}
		
		function cancle() {
			parent.window.location.reload();
		}
	</script>
</body>
</html>