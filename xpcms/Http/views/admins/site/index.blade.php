<!DOCTYPE html>
<html>
<head>
	<title>基本设置</title>
	@include('admins.public.init')
</head>
<body>
	<div class="phpcn-title">基本设置</div>

		<form class="phpcn-form phpcn-bg-fff phpcn-p-10">
			@csrf
			<input type="hidden" name="keys" value="site_basic">
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">网站名称：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="site_title" placeholder="请输入网站名称" class="phpcn-input" value="{{$basic['values']['site_title']}}">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">上传LOGO图片：</label>
				<button class="phpcn-button" type='button' onclick="logo();">上传LOGO图片</button>
				<img id="pre_img" src="{{$basic['values']['site_logo']}}" style="height: 38px;" onmouseover="show_img()" onmouseleave="hide_img()" />
				<span style="color: gray;">LOGO 为PNG/JPG/GIF 格式图片</span>
		        <iframe name="frame1" id="frame1" style="display: none;"></iframe>
		        <input type="hidden" name="site_logo" id="imgurl" value="{{$basic['values']['site_logo']}}">
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">网站目录：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="site_folder" placeholder="请输入网站目录" class="phpcn-input" value="{{$basic['values']['site_folder']}}">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">网站域名：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="site_domain" placeholder="请输入网站域名" class="phpcn-input" value="{{$basic['values']['site_domain']}}">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">网站开关：</label>
			    <div class="phpcn-input-inline phpcn-form-switch2" >
				 	<input type="radio" name="site_status" value="0" title="关站"  checked="checked">
				 	<input type="radio" name="site_status" value="1" title="开站"  checked="checked" >
				 </div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">管理员邮箱：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="adminer_email" placeholder="请输入管理员邮箱" class="phpcn-input" value="{{$basic['values']['adminer_email']}}">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">附件状态统计：</label>
			    <div class="phpcn-input-inline phpcn-form-switch2" >
				 	<input type="radio" name="annex_status" value="0" title="关闭"  checked="checked">
				 	<input type="radio" name="annex_status" checked value="1" title="开启"  checked="checked">
				 </div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">引用css路径：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="static_css" placeholder="请输入引用css路径" class="phpcn-input" value="{{$basic['values']['static_css']}}">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">引用js路径：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="static_js" placeholder="请输入js路径" class="phpcn-input" value="{{$basic['values']['static_js']}}">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">引用图片资源路径：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="static_image" placeholder="请输入图片资源路径" class="phpcn-input" value="{{$basic['values']['static_image']}}">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">引用附件路径：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="static_annex" placeholder="请输入附件路径" class="phpcn-input" value="{{$basic['values']['static_annex']}}">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<button class="phpcn-button" type='button' onclick="site_save();">保存</button>
			</div>
		</form>
		<form id="imgForm" target="frame1" enctype="multipart/form-data" action="/admins/image/upload" method="post" style="display: none;">
			@csrf
	        <input type="file" name="file_upload" id="file_upload" onchange="upload_img()">
	    </form>
	</div>
	<script>
		function logo() {
			$('#file_upload').click();
		}

		function upload_img() {
			$('#imgForm').submit();
		}

		function upload_success(imgUrl) {
			layer.msg('上传成功',{icon:1});
			$('#pre_img').attr('src',imgUrl);
			$('#imgurl').val(imgUrl);
		}

		function show_img() {
			var pos = getMousePos();
			var url = $('#pre_img').attr('src');
			var html = '<div id="img_show" style="width: 250;background-color: #fff;border: 1px solid darkgray;border-radius:6px;position: absolute;left: '+pos.x+'px;top:'+pos.y+'px;"> \
						<img src="'+url+'" style="width: 100%;">\
					</div>';
			$('body').append(html);
		}

		function hide_img() {
			$('#img_show').remove();
		}

		// 获取鼠标位置
		function getMousePos(event) {
			var e = event || window.event; //传入的事件赋值，没有传入的，则是window事件
			var scrollX = document.documentElement.scrollLeft || document.body.scrollLeft;
			var scrollY = document.documentElement.scrollTop || document.body.scrollTop;
			var x = e.pageX || e.clientX + scrollX; //获取
			var y = e.pageY || e.clientY + scrollY;
			return { 'x': x, 'y': y }; //返回x、y的坐标
		}

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