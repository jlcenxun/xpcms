<!DOCTYPE html>
<html>
<head>
	<title>附件配置</title>
	<link rel="stylesheet" href="/static/css/style.css"  media="all">
	<script type="text/javascript" src="/static/js/jquery3.4.1.js"></script>
	<script type="text/javascript" src="/static/layer/layer.js"></script>
	<script type="text/javascript" src="/static/js/vue.min.js"></script>
	<script type="text/javascript" src="/static/js/phpcn.js"></script>
<style>
.phpcn-form-lable{width:180px;}
.phpcn-input-inline{margin-left:210px;}
.phpcn-input{display:inline-block;width:30%;}
</style>
</head>
<body>
	<div class="phpcn-title">附件配置</div>
		<form class="phpcn-form phpcn-bg-fff phpcn-p-10">
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">GD库检测：</label>
				<div class="phpcn-input-inline">
				 	<button class="phpcn-button" type='button' onclick="check_gd();">检测</button>
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">允许上传大小：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="upload_size" placeholder="请输入上传大小" class="phpcn-input" value=""><span class='phpcn-ml-30 phpcn-color-999'>单位：M</span>
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">允许上传类型：</label>
				<div class="phpcn-input-inline phpcn-form-checkbox">
				 	<input type="checkbox" name="upload_type[]" title=".jpg" value=".jpg" >
				 	<input type="checkbox" name="upload_type[]" title=".png" value=".png" >
				 	<input type="checkbox" name="upload_type[]" title=".gif" value=".gif">
				 </div>		
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">是否开启图片水印：</label>
				<div class="phpcn-input-inline phpcn-form-radio">
				 	<input type="radio" name="is_watermark" value="1" title="开启" >
					<input type="radio" name="is_watermark" value="0" title="关闭" >
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">水印图片最大宽度：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="watermark_width" placeholder="请输入水印图片宽度" class="phpcn-input" value=""><span class='phpcn-ml-30 phpcn-color-999'>单位：px</span>
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff ">
				<label class="phpcn-form-lable">水印图片最大高度：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="watermark_height" placeholder="请输入水印图片高度" class="phpcn-input" value=""><span class='phpcn-ml-30 phpcn-color-999'>单位：px</span>
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff ">
				<label class="phpcn-form-lable">水印图片地址：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="watermark_url" placeholder="请输入水印图片地址" class="phpcn-input" value="">
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">水印透明度：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="watermark_transparent" placeholder="水印透明度" class="phpcn-input" value=""><span class='phpcn-ml-30 phpcn-color-999'>范围：0-1</span>
				</div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">JPEG水印质量：</label>
				<div class="phpcn-input-inline">
				 	<input type="text" name="watermark_quality" placeholder="水印透明度" class="phpcn-input" value=""><span class='phpcn-ml-30 phpcn-color-999'>范围：0-1</span>
				</div>
			</div>

			<div class="phpcn-form-item phpcn-bg-fff">
				<label class="phpcn-form-lable">水印位置：</label>
				<div class="phpcn-input-inline phpcn-form-select">
				 	<select name="watermark_position" lay-filter="watermark_position">
		                <option value="0" >随机位置</option>
		                <option value="1" >顶部居左</option>
		                <option value="2" >中部居左</option>
		                <option value="3" >底部居左</option>
		                <option value="4" >顶部居右</option>
		                <option value="5" >中部居右</option>
		                <option value="6" >底部居右</option>
		             </select>
			    </div>
			</div>
			<div class="phpcn-form-item phpcn-bg-fff ">
				<button class="phpcn-button" type='button' onclick="site_save();">保存</button>
			</div>
		</form>
	</div>	
</body>
</html>