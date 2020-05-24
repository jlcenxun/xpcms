<!DOCTYPE html>
<html>
<head>
    <title>xpcms后台管理系统</title>
    <link rel="stylesheet" href="/static/css/style.css"  media="all">
    <script type="text/javascript" src="/static/js/jquery3.4.1.js"></script>
    <script type="text/javascript" src="/static/layer/layer.js"></script>
    <script type="text/javascript" src="/static/js/vue.min.js"></script>
    <script type="text/javascript" src="/static/js/phpcn.js"></script>
</head>
<body>
<div class="top">
    <div class="phpcn-l area">欢迎使用xpcms后台网站管理系统</div>
    <div class="user phpcn-r phpcn-mr-20">
        <span class="">快捷管理中心</span>
        <span id='admin-select' class='bgcolor'>{{$admin['username']}}
			<dl class='user-pull-down'>
				<a href="javascript:;">修改密码</a>
                <!-- <a href="">登陆历史</a> -->
				<a href="javascript:;" onclick="logout()">退出登录</a>
			</dl>
		</span>
    </div>
</div>
<div class="container phpcn-clear">
    <!--左侧导航-->
    <div class="phpcn-tree phpcn-l ">
        <div class="logo">
            <img src="/static/images/logo.png" width='100%'>
        </div>
        <ul class="tree phpcn-clear" id="phpcn_nav_side">
            @foreach($menus as $items)
                <li>
                    <h2>
                        <span class="phpcn-icon {{$items['icon']}}"></span><label>{{$items['title']}}</label><i class="phpcn-r phpcn-icon phpcn-icon-down "></i>
                    </h2>
                    @if($items['children'])
                        <dl>
                            @foreach($items['children'] as $child)
                                <a href="javascript:;" onclick="menu_fire(this)" controller="{{$child['controller']}}" action="{{$child['action']}}">{{$child['title']}}</a>
                                @endforeach
                        </dl>
                    @endif
                </li>
                @endforeach
        </ul>
    </div>
    <!--左侧导航结束-->
    <div class="phpcn-content phpcn-r">
        <div class="header">
            <div class="h-left phpcn-clear">
                <ul class="phpcn-l-li phpcn-clear">
                    <li><i class='phpcn-icon phpcn-icon-liebiao'></i></li>
                    <li><i class='phpcn-icon phpcn-icon-shouyeshouye'></i></li>
                    <li class='phpcn-ps-r'>
                        <input type="" name=""> <i class='phpcn-ps-a phpcn-icon phpcn-icon-sousuo2'></i>
                    </li>
                </ul>
            </div>
            <div class='phpcn-tab-title phpcn-mt-10 '>
                <ul class="phpcn-l-li phpcn-clear">
                    <!--<span class='arrow'>
                        <i></i>
                        <dd> <a class="phpcn-tx-c phpcn-icon phpcn-icon-doubleleft"></a></dd>
                    </span>-->
                    <li class="on">
                        <i></i>
                        <dd>主页 <!--<a class="phpcn-icon phpcn-icon-guanbi"></a>--></dd>
                    </li>
                    <!--<span class='arrow'>
                        <i></i>
                        <dd href=""><a class="phpcn-icon phpcn-icon-doubleright"></a></dd>
                    </span>-->
                </ul>
            </div>
        </div>
        <div class="phpcn-row phpcn-clear ">
            <iframe id="main_frame" src="/admins/home/welcome" frameborder="0" scrolling="auto" onload="resetHeight(this)" style="height: 100%"></iframe>
        </div>
    </div>
</div>

<script type="text/javascript">
    // 重新设置页面高度，此函数在static/js/global.js中有定义
    function resetHeight(obj){
         var right_height = parent.document.documentElement.clientHeight - 141;//141是iframe顶部的距离
        $(obj).parent('div').height(right_height);
    }

    //促发菜单对应页面
    function menu_fire(obj){
        var controller = $(obj).attr('controller').toLowerCase();
        var action = $(obj).attr('action').toLowerCase();
        $('#main_frame').attr('src','/admins/'+controller+'/'+action);
    }

    function logout() {
        //询问框
        layer.confirm('确定退出登录吗？', {
            icon:3,
            btn: ['确定','取消'] //按钮
        }, function(){
            $.get('/admins/account/logout',function (res) {
                layer.alert(res.msg,{icon:1});
                setTimeout(function () {
                    parent.window.location.href = '/admins/account/login';
                },200)
            });
        });
    }

</script>
</body>
</html>