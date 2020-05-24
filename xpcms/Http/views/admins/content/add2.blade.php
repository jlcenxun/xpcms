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
    <div class='phpcn-l phpcn-col-xs6 phpcn-box-sizing'>
        <div class="phpcn-form-item">
            <label class="phpcn-form-lable">封面图</label>
            <div class="phpcn-input-inline phpcn-form-file">
                <button class="phpcn-button" type='button' onclick="file_upload()"><i class="phpcn-icon phpcn-icon-jindutiaodaishangchuan"></i>选择文件</button>
                <img id="pre_img"   style="height: 38px;" onmouseover="show_img()" onmouseleave="hide_img()" />
                <span style="color: gray;">封面图 为PNG/JPG/GIF 格式图片</span>
                <iframe name="frame1" id="frame1" style="display: none;"></iframe> {{--加上一个<iframe>，form提交给这个没有实质内容的<iframe>，提交后停留在这个iframe，父页面就不会刷新。--}}
                <input type="hidden" name="cover_img" id="imgurl" value="">
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
<form id="upload_form" target="frame1" enctype="multipart/form-data" action="/admins/image/upload" method="post" style="display: block;">
    @csrf
    <input type="file" name="file_upload" id="file_upload" onchange="upload_img()" >
</form>
</body>
</html>

<script>
    function file_upload() {
        $('#file_upload').click();
    }

    function upload_img() {
        $('#upload_form').submit();
    }

    function upload_success(imgUrl) {
        layer.msg('上传成功',{icon:1});
        $('#pre_img').attr('src',imgUrl);
    }

    function show_img() {
        var url = $('#pre_img').attr('src');
        var pos = getMousePos();
        var html = '<div id="hide_div" style="width: 250px;height: 200px; background: #fff;border: 1px solid gray; border-radius:6px; position:absolute;left:'+pos.x+'px;top:'+pos.y+'px; "> \
            <img src="'+url+'" style="width: 100%;"> \
             </div>';
        $('body').append(html);
    }

    function hide_img() {
        $('#hide_div').remove();
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

    ini_editor();
    function ini_editor() {
        var ue_width = $('.phpcn-col-xs6').width();
        var ue_height = $('.phpcn-col-xs6').height()-100;
        var ue = UE.getEditor('content',{
            initialFrameWidth:ue_width,
            initialFrameHeight:ue_height,
        });
    }
</script>
