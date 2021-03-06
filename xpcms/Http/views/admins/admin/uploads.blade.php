
<div class="form-group">
    <label for="name"  class="col-sm-3 control-label">上传头像</label>
    <div class="col-sm-8">
        <img id="image" class="cover-radius"  src="${basePath}/resources/bussiness/image/upload_img.png"
             width="100%" style="cursor: pointer;" />
        <input id="picture_upload" name="file" type="file" onchange="upload_cover(this)"
               style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; opacity: 0; cursor: pointer;"/>
        <small class="help-block cover-tips" style="color: #dd4b39;display: none;">请上传照片</small>
    </div>
</div>


<script>
    function upload_cover(obj) {
        ajax_upload(obj.id, function(data) { //function(data)是上传图片的成功后的回调方法
            var isrc = data.relatPath.replace(/\/\//g, '/'); //获取的图片的绝对路径
            $('#image').attr('src', basePath+isrc).data('img-src', isrc); //给<input>的src赋值去显示图片
        });
    }
    function ajax_upload(feid, callback) { //具体的上传图片方法
        if (image_check(feid)) { //自己添加的文件后缀名的验证
            $.ajaxFileUpload({
                fileElementId: feid,    //需要上传的文件域的ID，即<input type="file">的ID。
                url: basePath+'/houseKeeping/clean/upload', //后台方法的路径
                type: 'post',   //当要提交自定义参数时，这个参数要设置成post
                dataType: 'json',   //服务器返回的数据类型。可以为xml,script,json,html。如果不填写，jQuery会自动判断。
                secureuri: false,   //是否启用安全提交，默认为false。
                async : true,   //是否是异步
                success: function(data) {   //提交成功后自动执行的处理函数，参数data就是服务器返回的数据。
                    if (callback) callback.call(this, data);
                },
                error: function(data, status, e) {  //提交失败自动执行的处理函数。
                    console.error(e);
                }
            });
        }
    }
    function image_check(feid) { //自己添加的文件后缀名的验证
        var img = document.getElementById(feid);
        return /.(jpg|png|gif|bmp)$/.test(img.value)?true:(function() {
            modals.info('图片格式仅支持jpg、png、gif、bmp格式，且区分大小写。');
            return false;
        })();
    }
</script>