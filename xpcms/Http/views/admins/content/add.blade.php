<!DOCTYPE html>
<html>
<head>
<title>添加修改</title>
	@include('admins/public/init');
	<!-- 引入UE配置文件 -->
	<script type="text/javascript" src="/static/ueditor/ueditor.config.js"></script>
	<!-- 引入编辑器源码文件 -->
	<script type="text/javascript" src="/static/ueditor/ueditor.all.js"></script>
</head>
<body>
	<form class="phpcn-form phpcn-bg-fff phpcn-p-10 phpcn-clear">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$article['id']}}">
		<div class='phpcn-l phpcn-col-xs6 phpcn-box-sizing'>
			<div class="phpcn-form-item">
				<label class="phpcn-form-lable">标题</label>
				<div class="phpcn-input-inline">
					<input type="text" class="phpcn-input" name="title" value="{{$article['title']}}">
				</div>
			</div>
			<div class="phpcn-form-item">
				<label class="phpcn-form-lable">副标题</label>
				<div class="phpcn-input-inline">
					<input type="text" class="phpcn-input" name="subtitle" value="{{$article['subtitle']}}">
				</div>
			</div>
			<div class="phpcn-form-item">
				<label class="phpcn-form-lable">分类</label>
				<div class="phpcn-input-inline phpcn-form-select">
					<select name="cate_id" lay-filter="cate_id">
                        @foreach($cate as $item)
							<option value="{{$item['id']}}" {{$item['id']==$article['cate_id']?'selected':''}} >{{$item['title']}}</option>
                        @endforeach
					 </select>
				</div>
			</div>
			<div class="phpcn-form-item">
				<label class="phpcn-form-lable">封面图</label>
				<div class="phpcn-input-inline phpcn-form-file">
					<button class="phpcn-button" type='button' onclick="file_upload()"><i class="phpcn-icon phpcn-icon-jindutiaodaishangchuan"></i>选择文件</button>

					<img id="pre_img"  src="{{$article['cover_img']}}" style="height: 38px;" onmouseover="show_img()" onmouseleave="hide_img()" />
					<span style="color: gray;">封面图 为PNG/JPG/GIF 格式图片</span>
			        <iframe name="frame1" id="frame1" style="display: none;"></iframe> {{--加上一个<iframe>，form提交给这个没有实质内容的<iframe>，提交后停留在这个iframe，父页面就不会刷新。--}}
			        <input type="hidden" name="cover_img" id="imgurl" value="">
				</div>
			</div>
			<div class="phpcn-form-item">
				<label class="phpcn-form-lable">seo标题</label>
				<div class="phpcn-input-inline">
					<input type="text" class="phpcn-input" name="seo_title" value="{{$article['seo_title']}}">
				</div>
			</div>
			<div class="phpcn-form-item">
				<label class="phpcn-form-lable">keyword</label>
				<div class="phpcn-input-inline">
					<input type="text" class="phpcn-input" name="keyword" value="{{$article['keyword']}}">
				</div>
			</div>
			<div class="phpcn-form-item">
				<label class="phpcn-form-lable">文章摘要</label>
				<div class="phpcn-input-inline">
					<input type="text" class="phpcn-input" name="descs" value="{{$article['descs']}}">
				</div>
			</div>
			<div class="phpcn-form-item">
				<label class="phpcn-form-lable">作者</label>
				<div class="phpcn-input-inline">
					<input type="text" class="phpcn-input" name="author" value="{{$article['author']}}">
				</div>
			</div>
			<div class="phpcn-form-item">
				<label class="phpcn-form-lable">来源</label>
				<div class="phpcn-input-inline">
					<input type="text" class="phpcn-input" name="from_site" value="{{$article['from_site']}}">
				</div>
			</div>
			<div class="phpcn-form-item">
				<label class="phpcn-form-lable">来源URL</label>
				<div class="phpcn-input-inline">
					<input type="text" class="phpcn-input" name="from_url" value="{{$article['from_url']}}">
				</div>
			</div>
			<div class="phpcn-form-item">
				<label class="phpcn-form-lable">评论</label>
				<div class="phpcn-input-inline phpcn-form-radio">
				 	<input type="radio" name="is_comment" value="1" title="开启" {{$article['is_comment']?'checked':''}}>
					<input type="radio" name="is_comment" value="0" title="关闭" {{$article['is_comment']?'':'checked'}}>
				</div>
			</div>
			<div class="phpcn-form-item">
				<label class="phpcn-form-lable">状态</label>
				<div class="phpcn-input-inline phpcn-form-radio">
				 	<input type="radio" name="status" value="1" title="开启"  {{$article['status']?'checked':''}}>
					<input type="radio" name="status" value="0" title="关闭" {{$article['status']?'':'checked'}}>
				</div>
			</div>
		</div>
        {{--放置富文本编辑器ueditor的dom--}}
		<div class="phpcn-form-item phpcn-r">
			<div class="phpcn-input-block">
				<textarea placeholder="请输入内容" class="layui-textarea" id='content' name="contents">{{$content['contents']}}</textarea>
			</div>
		</div>
	</form>
	<form id="upload_form" target="frame1" enctype="multipart/form-data" action="/admins/image/upload" method="post" style="display: none;">
		@csrf
        <input type="file" name="file_upload" id="file_upload" onchange="upload_img()" >
    </form>
	<div class="phpcn-form-item phpcn-bg-fff phpcn-clear">
		<div class="phpcn-tx-c">
			<button type="button" class="phpcn-button" onclick="content_save();">保存</button>
			<button type="button" class="phpcn-button phpcn-bg-black" onclick="cancel();">取消</button>
		</div>
	</div>



</body>
</html>
<script type="text/javascript">
	//点击btn打开from控件
	function file_upload() {
		$('#file_upload').click();
	}
	//图片上传
	function upload_img() {
		$('#upload_form').submit();
	}
	//上传成功、显示图片
	function  upload_success(img_url){
		layer.closeAll();
		layer.msg('上传成功',{icon:1});
		$('#pre_img').attr('src',img_url);
		$('#imgurl').val(img_url);
	}

	//预览大图(div里已设置大图的尺寸,再追加构建的html到body里）
	function show_img( ) {
		var url = $('#pre_img').attr('src'); /*获取图片URL*/
		var pos = getMousePos();
		var html = '<div id="div_position" style="background: #fff;position: absolute;border: 1px solid lightgreen;border-radius: 6px;width: 200px;left: '+pos.x+'px;top:'+pos.y+'px;">\
				<img src="'+url+'" alt="" style="width: 100%;">\
				</div>';
		$('body').append(html);
	}

	function hide_img() {
		$('#div_position').remove();
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

function content_save() {
        $.post('/admins/content/save',$('form').serialize(),function (res) {
			if (res.code > 0) {
				return layer.alert(res.msg,{icon:2});
			}
			layer.alert(res.msg,{icon:1});
			setTimeout(function () {
				window.location.reload();
			},1000)
        },'json')
    }

	ini_editor();
	function ini_editor() {
		var ue_width = $('.phpcn-col-xs6').width()-20;
		var ue_height = $('.phpcn-col-xs6').height()-100;
		var ue = UE.getEditor('content',{
			initialFrameWidth:ue_width,
			initialFrameHeight:ue_height,
		});
	}

</script>





