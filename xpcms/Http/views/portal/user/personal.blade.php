<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="user/css/safe/css.css"/>
    <link rel="stylesheet" href="user/css/safe/common.min.css"/>
    <link rel="stylesheet" href="user/css/safe/ms-style.min.css"/>
    <link rel="stylesheet" href="user/css/safe/personal_member.min.css"/>
    <link rel="stylesheet" href="user/css/safe/Snaddress.min.css"/>
    <link rel="stylesheet" href="user/css/sui.css"/>
    <script type="text/javascript" src="user/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="user/js/sui.js"></script>
    <style>
        body {
            background: #f5f5f5;
        }

        .sui-table th {
            padding: 16px 8px;
            line-height: 18px;
            text-align: center;
            vertical-align: middle;
            border-top: 1px solid #e6e6e6;
            font-weight: normal;
            font-size: 14px;
            color: #333333;
        }

        .sui-table td {
            padding: 16px 8px;
            line-height: 18px;
            text-align: center;
            vertical-align: middle;
            border-top: 1px solid #e6e6e6;
            font-weight: normal;
            font-size: 12px;
            color: #333333;
        }

        img {
            max-width: 100%;
            height: auto;
            /*vertical-align: bottom;*/
            border: 0;
            -ms-interpolation-mode: bicubic;
            margin-left: -10px;
        }

        a {
            color: #000000;
        }
    </style>
</head>

<body class="ms-body">
<div id="" class="ng-top-banner"></div>
<div class="ng-toolbar">
    <div class="ng-toolbar-con wrapper">
        <div class="ng-toolbar-left">
            <a class="ng-bar-node ng-bar-node-backhome" id="ng-bar-node-backhome" href="/" style="display: block;">
                <span><img src="user/img/Home.png" style="margin-right: 10px;"/>返回蜂鸟首页</span>
            </a>
            <div class="ng-bar-node-box ng-site-nav-box">
                <a href="" class="ng-bar-node ng-bar-node-site">
                    <span><img src="user/img/daohang.png" style="margin-right: 5px;"/>网站导航</span><em
                            class="ng-iconfont down"></em>
                </a>
                <div class="ng-sn-site-nav ng-d-box site-nav-child" style="display:none;">
                    <dl class="sn-site-list lnb">
                        <dt>
                            特色购物
                        </dt>
                        <dd>
                            <p><a target="_blank">###</a></p>
                            <p><a target="_blank">###</a></p>
                            <p><a target="_blank">###</a></p>
                        </dd>
                    </dl>
                    <dl class="sn-site-list">
                        <dt>
                            主题频道
                        </dt>
                        <dd>
                            <p><a target="_blank">###</a></p>
                            <p><a target="_blank">###</a></p>
                            <p><a target="_blank">###</a></p>
                            <p><a target="_blank">###</a></p>
                            <p><a target="_blank">###</a></p>
                            <p><a target="_blank">###</a></p>
                        </dd>
                    </dl>
                    <dl class="sn-site-list">
                        <dt>
                            生活助手
                        </dt>
                        <dd>
                            <p><a target="_blank">###<i class="hot"></i></a></p>
                            <p><a target="_blank">###</a></p>
                            <p><a target="_blank">###</a></p>
                            <p><a target="_blank">###</a></p>
                            <p><a target="_blank">###</a></p>
                            <p><a target="_blank">###</a></p>
                        </dd>
                    </dl>
                    <dl class="sn-site-list">
                        <dt>
                            会员服务
                        </dt>
                        <dd>
                            <p><a target="_blank">###<i class="hot"></i></a></p>
                            <p><a target="_blank">###</a></p>
                            <p><a target="_blank">###</a></p>
                            <p><a target="_blank">###</a></p>
                        </dd>
                    </dl>
                    <dl class="sn-site-list rnb">
                        <dt>
                            更多热点
                        </dt>
                        <dd>
                            <p><a target="_blank">###</a></p>
                            <p><a target="_blank">###</a></p>
                            <p><a target="_blank">###<i class="hot"></i></a></p>
                        </dd>
                    </dl>
                    <a href="" class="ng-close"><em class="ng-iconfont"></em></a>
                </div>
            </div>

        </div>
        <div class="ng-toolbar-right">
            <a href="" class="ng-bar-node username-bar-node username-bar-node-showside" id="" rel="nofollow"
               style="display:none;">
                <span id="">吉米小子</span>
                <em class="hasmsg ng-iconfont"></em>
            </a>
            <div class="ng-bar-node-box username-handle" id="" style="display: block;">
                <a href="" rel="nofollow" class="ng-bar-node username-bar-node username-bar-node-noside">
                    <span id="">吉米小子</span>
                    <em class="hasmsg ng-iconfont"></em>
                    <em class="ng-iconfont down"></em>
                </a>
                <div class="ng-d-box ng-down-box ng-username-slide" style="display:none;">
                    <a href="" class="ng-vip-union" target="_blank" rel="nofollow">账号管理</a>
                    <a href="" rel="nofollow">退出登录</a>
                </div>
            </div>
            <div class="ng-bar-node reg-bar-node" id="reg-bar-node" style="display: none;">
                <a href="" rel="nofollow" class="login">登录</a>
                <a href="" target="_blank" class="login reg-bbb" rel="nofollow">注册</a>
            </div>

            <div class="ng-bar-node-box myorder-handle">
                <a class="ng-bar-node ng-bar-node-fix touch-href ng-bar-node-pr5"><span>我的蜂鸟</span><em
                            class="ng-iconfont down"></em></a>
                <div class="ng-down-box ng-d-box myorder-child" style="display:none;">
                    <a>待支付<em id="waitPayCounts"></em></a>
                    <a>待收货<em id="waitDeliveryCounts"></em></a>
                    <a>待评价<em id="waitEvaluation"></em></a>
                    <a>修改订单</a>
                </div>
            </div>
            <a class="ng-bar-node ng-bar-node-mini-cart" rel="nofollow" href="">
                <span><img src="user/img/购物车.png"/>&nbsp;购物车</span>
                <span class="total-num-bg-box">
						<em></em>
						<i></i>
					</span>
                </span>
            </a>
            <div class="ng-bar-node-box mysuning-handle">
                <a href="" rel="nofollow" name="" class="ng-bar-node ng-bar-node-fix touch-href ng-bar-node-pr5"><span>收藏夹</span><em
                            class="ng-iconfont down"></em></a>
                <div class="ng-down-box ng-d-box mysuning-child" style="display:none;">
                    <a href="" rel="nofollow" target="_blank">我的二手</a>
                    <a href="" rel="nofollow" target="_blank">我的金融</a>
                    <a href="" rel="nofollow">我的收藏</a>
                    <a href="" rel="nofollow">我的任性付</a>
                    <a href="" rel="nofollow">我的优惠券</a>
                    <a href="" rel="nofollow">打卡赚云钻</a>
                    <a href="" class="ng-vip-union" target="_blank" rel="nofollow">会员联盟<em
                                class="ng-iconfont"></em></a>
                </div>
            </div>

            <div class="ng-bar-node-box app-down-box">
                <a href="" target="_blank" rel="nofollow" class="ng-bar-node mb-suning touch-href">
                    <span>关注蜂鸟</span>
                </a>
                <div class="ng-mb-box ng-d-box mb-down-child" style="display:none;">
                    <div class="ng-code-box">
                        <p class="ng-tip">
                            <a href="" rel="nofollow" target="_blank"></a>
                        </p>
                        <a target="_blank">
                            <img src="" height="80" width="80">
                        </a>
                    </div>
                    <div class="ng-app-box">
                        <div class="ng-app-list">
                            <a href="" target="_blank" rel="nofollow" class="ng-app">
                                <img src="" title="###"></a>
                            <a href="" target="_blank" rel="nofollow" class="ng-app">
                                <img src="" title="###"></a>
                            <a class="ng-app">
                                <img src="" title="###"></a>
                            <a href="" target="_blank" rel="nofollow" class="ng-app">
                                <img src="" title="###"></a>
                        </div>
                    </div>
                    <a href="" target="_blank" rel="nofollow">
                        <img src="" height="35" width="242">
                    </a>
                    <a href="" class="ng-close" rel="nofollow"><em class="ng-iconfont"></em></a>
                </div>
            </div>

            <a href="" class="ng-bar-node ng-bar-node-pr5" target="_blank"><span>卖家中心</span><em
                        class="ng-iconfont down"></em></a>
            <div class="ng-bar-node-box service-handle">
                <a href="" class="ng-bar-node ng-bar-node-service ng-bar-node-fix touch-href ng-bar-node-pr5"
                   rel="nofollow"><span>联系我们</span><em class="ng-iconfont down"></em>
                </a>
                <div class="ng-down-box ng-d-box service-center-child ng-ser-list" style="display:none;">
                    <a>帮助中心</a>
                    <a>查找门店</a>
                    <a>退换货</a>
                    <a>帮客预约</a>
                    <a>建议反馈</a>
                    <a>在线咨询</a>
                </div>
            </div>
        </div>
        <div id="ng-minicart-slide-box"></div>
    </div>
</div>
<header class="ms-header ms-header-inner ms-head-position">
    <article class="ms-header-menu">
        <style type="text/css">
            .nav-manage .list-nav-manage {
                position: absolute;
                padding: 15px 4px 10px 15px;
                left: 0;
                top: -15px;
                width: 90px;
                background: #FFF;
                box-shadow: 1px 1px 2px #e3e3e3, -1px 1px 2px #e3e3e3;
                z-index: 10;
            }

            .ms-nav li {
                float: left;
                position: relative;
                padding: 0 20px;
                height: 44px;
                font: 14px/26px "Microsoft YaHei";
                color: #FFF;
                cursor: pointer;
                z-index: 10;
            }

            .personal-member .main-wrap {
                width: 1068px;
                margin: 15px 0 30px 180px;
                padding: 0 0 39px 0;
                border: 1px solid #ddd;
                background: none;
            }
        </style>
        <div class="header-menu">
            <div class="ms-logo">
                <a class="ms-head-logo" name="Myyigou_index_none_daohangLogo"><span
                            style="font-size: 30px;color: #fff;font-weight: bold;    line-height: 28px;;">我的蜂鸟</span></a>

            </div>
            <nav class="ms-nav">
                <ul>
                    <li class=""><a href="" data-url="" style="    padding-bottom: 17px;border-bottom: 3px #fff solid;">首页</a><i
                                class="nav-arrow"></i></li>
                    <li class="nav-manage selected">
                        <a href="" data-url="">账户管理<em hidden></em></a><i class="nav-arrow" hidden></i>
                        <div class="list-nav-manage " hidden>
                            <p class="nav-mge-hover">账户管理<em></em></p>
                            <p><a>个人资料</a></p>
                            <p><a>安全设置</a></p>
                            <p><a>账号绑定</a></p>
                            <p><a>地址管理</a></p>

                        </div>
                    </li>
                    <li class="ms-nav-msg"><a>消息</a><i class="nav-arrow"></i></li>
                </ul>
                <div class="ms-search">
                    <form>
                        <input id="" type="text" value="">
                        <img src="img/搜索.png" style="height: 10px;width: 10px;float: right;margin-right: 10px;"/>
                    </form>
                </div>
            </nav>
        </div>

    </article>

    <article class="ms-useinfo">
        <div class="header-useinfo" id="">
            <div class="ms-avatar">
                <div class="useinfo-avatar">
                    <img src="user/img/头像.png">
                    <div class="edit-avatar"></div>
                    <a class="text-edit-avatar">修改</a>
                </div>
                <a>sunshine</a>
            </div>

            <div class="ms-name-info">
                <div class="link-myinfo">
                    <a>我的编号:99653</a>
                </div>
                <div class="info-member">
							<span class="name-member member-1">
        				 <i></i><a target="_blank">注册会员</a></span>
                    <span style="margin-left: 20px;">
        				 <a target="_blank">我的资料</a></span>
                </div>
                <div class="info-safety">
							<span class="safety-lv lv-3">
        				<a>安全等级：<span>中</span></a>
							</span>
                    <a class="bind-phone">
                        <i style="background-image: url(img/修改手机.png);"></i>修改手机</a>
                    <a class="bind-email">
                        <i style="background-image: url(img/绑定邮箱.png);"></i>修改邮箱</a>
                    <a class="manage-addr"><i style="background-image: url(img/地址管理.png);"></i>地址管理</a>
                </div>
            </div>
        </div>

    </article>
</header>
<div id="ms-center" class="personal-member">
    <div class="cont">
        <div class="cont-side">
            <div class="side-neck" style="margin-top: 20px;">
                <i></i>
            </div>
            <div class="ms-side" style="margin-top: 20px;">
                <article class="side-menu side-menu-off">
                    <dl class="side-menu-tree" style="padding-left: 50px;">
                        <dt><img src="user/img/左侧/我的购物车.png" style="margin-right: 10px;margin-left: -20px;"/>我的购物车</dt>
                        <dt><img src="user/img/左侧/file.png" style="margin-right: 10px;margin-left: -20px;"/>订单管理</dt>
                        <dd>
                            <a>我的订单</a>

                        </dd>
                        <dd>
                            <a>我的收藏</a>

                        </dd>
                        <dd>
                            <a>我的评价</a>

                        </dd>
                        <dd>
                            <a>我的足迹</a>

                        </dd>
                        <dd>
                            <a>我的拍卖</a>

                        </dd>
                        <dd>
                            <a>我的优惠券</a>

                        </dd>
                        <dt><img src="user/img/左侧/我的蜂鸟.png" style="margin-right: 10px;margin-left: -20px;"/>我的蜂鸟</dt>
                        <dd>
                            <a>我的推荐</a>

                        </dd>
                        <dd>
                            <a>我的钱包</a>

                        </dd>
                        <dd>
                            <a>我要提现</a>

                        </dd>
                        <dd>
                            <a>我的买豆</a>

                        </dd>
                        <dd>
                            <a>邀请管理</a>

                        </dd>
                        <dt><img src="user/img/左侧/v-card-3.png" style="margin-right: 10px;margin-left: -20px;"/>售后服务</dt>
                        <dd>
                            <a>退换货</a>

                        </dd>
                        <dd>
                            <a>意见/投诉</a>

                        </dd>
                    </dl>

                    <a ison="on" class="switch-side-menu icon-up-side"><i></i></a>
                </article>
            </div>
        </div>
        <div class="cont-main">
            <div class="main-wrap mt15" style="border: 0px;">
                <!--<h3>
                    <strong>我的会员等级</strong>
                </h3>-->
                <div class="server-wrapper">
                    <div class="server-tab" style="margin-top: 26px;">
                        <div style=" float: left;vertical-align: bottom;text-align: center;">
                            <div style="width: 680px;padding: 10px;float: left;background-color: #fff;height: 250px;">
                                <div style="float: left;width:200px ;height: 152px;border: 1px #ccc solid;box-shadow: 1px 1px 1px #F5F5F5;padding: 5px;">
                                    <div style="width: 100%;height: 100%;border: 1px #F2873B dashed;">
                                        <span style="font-size: 18px;color: #686868;font-weight: bold;display: block;    display: block; width: 100px; margin-left: 50px;    margin-top:20px;">2016年4月</span>
                                        <span style="font-size: 36px;color: #F88600;display: block;    display: block; width: 100px; margin-left: 50px;margin-top: 28;">12</span>
                                        <input type="button" value="签到领买豆"
                                               style="background-color: #f56a48;border-radius: 5px;color: #fff; font-size:14px;border: 0px;width: 107px;height: 26px;margin-top: 30px;"/>
                                    </div>
                                </div>

                                <div style="float: left;width:200px ;height: 152px;;margin-left: 20px;border: 1px #ccc solid;box-shadow: 1px 1px 1px #F5F5F5;padding: 5px;">
                                    <div style="width: 100%;height: 100%;border: 1px #F2873B dashed;">
                                        <span style="font-size: 18px;color: #686868;font-weight: bold;display: block;    display: block; width: 100px; margin-left: 50px; margin-bottom: 20px;   margin-top: 20px;">我的资产</span>
                                        <span style="width: 87px;height: 20px;background-color: #fee3dc;padding: 5px;border: 1px #C62B26 dashed;border-radius: 5px;">显示今日收益</span>
                                        <img src="user/img/我的买豆/矢量智能对象.png"
                                             style="position: absolute; margin-top: 30px;  margin-left: -80px;;"/>
                                    </div>
                                </div>

                                <div style="float: left;width:200px ;height: 152px;margin-left: 20px;border: 1px #ccc solid;box-shadow: 1px 1px 1px #F5F5F5;padding: 5px;">
                                    <div style="width: 100%;height: 100%;border: 1px #F2873B dashed;">
                                        <span style="font-size: 18px;color: #686868;font-weight: bold;display: block;    display: block; width: 100px; margin-left: 50px;    margin-top: 20px; margin-bottom: 20px;">我的买豆</span>
                                        <span style="width: 87px;height: 20px;background-color: #fee3dc;padding: 5px;border: 1px #C62B26 dashed;border-radius: 5px;">显示今日收益</span>
                                        <img src="user/img/我的买豆/猪的图标.png"
                                             style="position: absolute; margin-top: 13px;  margin-left: -80px;;"/></div>
                                </div>

                                <div style="border-top:1px #ccc solid;width: 650px;position: absolute;margin-top: 200px;margin-left: 20px;float: left;"></div>
                                <div style="position: absolute;margin-top: 230px;font-size: 14px;color: #686868;float: left;">
                                    <span style="margin-left: 20px;">待付款</span>
                                    <font style="color: #CF2D27;">0</font>
                                    <span style="margin-left: 40px;margin-right: 40px;">|</span>
                                    <span>待发货</span>
                                    <font style="color: #CF2D27;">0</font>
                                    <span style="margin-left: 40px;margin-right: 40px;">|</span>
                                    <span>待收货</span>
                                    <font style="color: #CF2D27;">0</font>
                                    <span style="margin-left: 40px;margin-right: 40px;">|</span>
                                    <span>待评价</span>
                                    <font style="color: #CF2D27;">0</font>
                                    <span style="margin-left: 40px;margin-right: 40px;">|</span>
                                    <span>退款</span>

                                </div>
                            </div>


                            <!--
                                作者：右侧
                                时间：2016-05-24
                                描述：
                            -->
                            <div style="float: left;width:250px ;height: 152px;margin-left: 20px;">
                                <p style="font-size: 14px;color: #686868;text-align:center;background-color: #fff;padding: 10px;color: #F88600;font-size: 14px;">
                                    菜单管理</p>
                                <div style="background-color: #fff;margin-top: 10px;height: 300px;padding: 10px;">
                                    <p style="font-size: 16px;text-align: left;">我的优惠券</p>
                                    <img src="user/img/个人中心/组-15.png"/>
                                    <img src="user/img/个人中心/组-14.png" style="margin-top: 20px;"/>
                                    <p style="margin-top: 30px;font-size: 14px;color: #686868;">全部优惠券(<font color="red">96</font>)
                                    </p>
                                </div>

                                <div style="background-color: #fff;margin-top: 10px;height: 200px;padding: 10px;">
                                    <p style="font-size: 20px;text-align: left;">收藏的商品</p>
                                    <img src="user/img/个人中心/形状-1.png" style="margin-top: 20px;"/>
                                    <p style="margin-top: 30px;font-size: 14px;color: #686868;">您的收藏空空的，赶紧<br/>
                                        去首页看看购物吧</p>
                                </div>

                                <div style="background-color: #fff;margin-top: 10px;height: 300px;padding: 10px;">
                                    <p style="font-size: 16px;text-align: left;">购物车</p>
                                    <div style="float:left ;">
                                        <img src="user/img/个人中心/屏幕快照-2016-04-08-15.50.46.png"
                                             style="margin-top: 10px;height: 100px;width: 100px;float: left;"/>
                                        <br/>
                                        <span style="display: block;float: left;margin-left: 10px;color: #f78642;font-size: 16px;">¥156</span>
                                        <del style="float: left;margin-left: 20px;">¥189</del>
                                        <p style="width: 100px;font-size: 12px;color: #686868">化妆水化妆水化妆水化妆水化妆水化妆水</p>
                                    </div>
                                    <div style="float:left ;">
                                        <img src="user/img/个人中心/屏幕快照-2016-04-08-15.50.46.png"
                                             style="margin-top: 10px;height: 100px;width: 100px;float: left;margin-left: 20px;"/>
                                        <br/>
                                        <span style="display: block;float: left;margin-left: 40px;color: #f78642;font-size: 16px;">¥156</span>
                                        <del style="float: left;margin-left: 20px;">¥189</del>
                                        <p style="width: 100px;margin-left: 20px;font-size: 12px;color: #686868;">
                                            化妆水化妆水化妆水化妆水化妆水化妆水</p>
                                    </div>

                                    <p style="margin-top: 30px;font-size: 14px;color: #686868;">查看购物车(<font color="red">96</font>)
                                    </p>

                                </div>


                                <div style="background-color: #fff;margin-top: 10px;height: 200px;padding: 10px;">
                                    <p style="font-size: 16px;text-align: left;">我的足迹</p>
                                    <img src="user/img/个人中心/矢量智能对象.png" style="margin-top: 20px;"/>
                                    <p style="margin-top: 30px;font-size: 14px;color: #686868;">您还没有留下任何足迹呢！</p>
                                </div>


                            </div>

                            <!--右侧---end------->

                            <div style="width: 680px;padding:10px;display: inline-block; float: left;margin-top: 20px;background-color: #fff;">
                                <div style="border-bottom: 1px #ccc solid;">
                                    <p style="font-size: 20px;text-align: left;">我的物流</p>
                                </div>
                                <div style="padding: 20px 20px;border-bottom: 1px #F5F5F5 solid;height: 150px;">
                                    <div style="float: left;margin-top: 10px;">
                                        <img src="user/img/宝贝收藏/组-58.png"/>
                                    </div>
                                    <div style="float: left;margin-top: 20px;">
                                        <p>在浙江临安市公司市区北方扫描，快件已被签收</p>
                                        <p>2016-04-10 12:20:30 <strong>查看物流信息</strong></p>
                                    </div>
                                    <div style="float: right;margin-right: 20px;margin-top: 50px;">
                                        <button style="border: 1px #ccc solid;padding: 5px;background-color: #fff;">
                                            确认收货
                                        </button>
                                    </div>

                                </div>
                                <div style="padding: 20px 20px;border-bottom: 1px #F5F5F5 solid;height: 150px;">
                                    <div style="float: left;margin-top: 10px;">
                                        <img src="user/img/宝贝收藏/组-56.png"/>
                                    </div>
                                    <div style="float: left;margin-top: 20px;">
                                        <p>在浙江临安市公司市区北方扫描，快件已被签收</p>
                                        <p>2016-04-10 12:20:30 <strong>查看物流信息</strong></p>
                                    </div>
                                    <div style="float: right;margin-right: 20px;margin-top: 50px;">
                                        <button style="border: 1px #ccc solid;padding: 5px;background-color: #fff;">
                                            确认收货
                                        </button>
                                    </div>

                                </div>
                                <div style="padding: 20px 20px;border-bottom: 1px #F5F5F5 solid;height: 150px;">
                                    <div style="float: left;margin-top: 10px;">
                                        <img src="user/img/宝贝收藏/组-57.png"/>
                                    </div>
                                    <div style="float: left;margin-top: 20px;">
                                        <p>在浙江临安市公司市区北方扫描，快件已被签收</p>
                                        <p>2016-04-10 12:20:30 <strong>查看物流信息</strong></p>
                                    </div>
                                    <div style="float: right;margin-right: 20px;margin-top: 50px;">
                                        <button style="border: 1px #ccc solid;padding: 5px;background-color: #fff;">
                                            确认收货
                                        </button>
                                    </div>

                                </div>
                                <p style="text-align: center;margin-top: 30px;">展开全部信息</p>
                                <!--<div style="float:left;display: inline;border: 1px #ccc solid;display: inline-block;background-color: #f5f5f5;height: 25px;width: 150px;">
                                   <input type="text" placeholder="搜索会员编号"  style="padding-left:5px;width:130px;border: 0px;background-color: #fff;line-height: 25px;border-right: 0px #ccc solid;" />
                                   <img src="img/搜索.png"  style="height: 10px;width: 10px;  margin-left: 2px; margin-bottom: 5px;" />
                                   </div> -->
                            </div>

                            <div style="width: 680px;padding:10px;display: inline-block; margin-top: 20px;background-color: #fff;float: left;border-bottom: 1px #ccc solid;padding-bottom: 20px;">
                                <span style="text-align: left;line-height: 20px;">根据浏览 猜你喜欢</span>
                            </div>
                            <div style="width: 680px;padding:10px;display: inline-block; margin-top:0px;background-color: #fff;float: left;">
                                <div style="padding:10px ;text-align: center;float: left;">
                                    <div style="float: left;margin-left: 30px">
                                        <img src="user/img/wdxx_01.png"/>
                                        <p style="width: 180px;">乐扣乐扣彼得兔水杯系列700ml便携式茶杯</p>
                                        <span style="display: block;float: left;margin-left: 10px;color: #f78642;font-size: 16px;">¥156</span>
                                        <del style="margin-left: 0px;margin-top: 10px;">¥189</del>
                                        <dl style="    float: left; margin-top: 30px; margin-left: -50px;">好评：90%</dl>
                                        <dl style="float: right;margin-top: 30px;">月销量：56</dl>
                                    </div>

                                    <div style="float: left;margin-left: 30px">
                                        <img src="user/img/wdxx_01.png"/>
                                        <p style="width: 180px;">乐扣乐扣彼得兔水杯系列700ml便携式茶杯</p>
                                        <span style="display: block;float: left;margin-left: 10px;color: #f78642;font-size: 16px;">¥156</span>
                                        <del style="margin-left: 0px;margin-top: 10px;">¥189</del>
                                        <dl style="    float: left; margin-top: 30px; margin-left: -50px;">好评：90%</dl>
                                        <dl style="float: right;margin-top: 30px;">月销量：56</dl>
                                    </div>

                                    <div style="float: left;margin-left: 30px;">
                                        <img src="user/img/wdxx_01.png"/>
                                        <p style="width: 180px;">乐扣乐扣彼得兔水杯系列700ml便携式茶杯</p>
                                        <span style="display: block;float: left;margin-left: 10px;color: #f78642;font-size: 16px;">¥156</span>
                                        <del style="margin-left: 0px;margin-top: 10px;">¥189</del>
                                        <dl style="    float: left; margin-top: 30px; margin-left: -50px;">好评：90%</dl>
                                        <dl style="float: right;margin-top: 30px;">月销量：56</dl>
                                    </div>

                                </div>

                                <div style="padding:10px ;text-align: center;float: left;">
                                    <div style="float: left;margin-left: 30px">
                                        <img src="user/img/wdxx_01.png"/>
                                        <p style="width: 180px;">乐扣乐扣彼得兔水杯系列700ml便携式茶杯</p>
                                        <span style="display: block;float: left;margin-left: 10px;color: #f78642;font-size: 16px;">¥156</span>
                                        <del style="margin-left: 0px;margin-top: 10px;">¥189</del>
                                        <dl style="    float: left; margin-top: 30px; margin-left: -50px;">好评：90%</dl>
                                        <dl style="float: right;margin-top: 30px;">月销量：56</dl>
                                    </div>

                                    <div style="float: left;margin-left: 30px">
                                        <img src="user/img/wdxx_01.png"/>
                                        <p style="width: 180px;">乐扣乐扣彼得兔水杯系列700ml便携式茶杯</p>
                                        <span style="display: block;float: left;margin-left: 10px;color: #f78642;font-size: 16px;">¥156</span>
                                        <del style="margin-left: 0px;margin-top: 10px;">¥189</del>
                                        <dl style="    float: left; margin-top: 30px; margin-left: -50px;">好评：90%</dl>
                                        <dl style="float: right;margin-top: 30px;">月销量：56</dl>
                                    </div>

                                    <div style="float: left;margin-left: 30px;">
                                        <img src="user/img/wdxx_01.png"/>
                                        <p style="width: 180px;">乐扣乐扣彼得兔水杯系列700ml便携式茶杯</p>
                                        <span style="display: block;float: left;margin-left: 10px;color: #f78642;font-size: 16px;">¥156</span>
                                        <del style="margin-left: 0px;margin-top: 10px;">¥189</del>
                                        <dl style="    float: left; margin-top: 30px; margin-left: -50px;">好评：90%</dl>
                                        <dl style="float: right;margin-top: 30px;">月销量：56</dl>
                                    </div>

                                </div>


                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="clear "></div>
    <div class="ng-footer ">

			<textarea class="footer-dom " id="footer-dom-02 ">
			</textarea>
        <div class="ng-fix-bar "></div>
    </div>
    <style type="text/css ">

        .ng-footer {
            height: 130px;
            margin-top: 0;
        }


        .ng-s-footer {
            height: 130px;
            background: none;
            text-align: center;
        }

        .ng-s-footer p.ng-url-list {
            height: 25px;
            line-height: 25px;
        }

        .ng-s-footer p.ng-url-list a {
            color: #666666;
        }

        .ng-s-footer p.ng-url-list a:hover {
            color: #f60;
        }

        .ng-s-footer .ng-authentication {
            float: none;
            margin: 0 auto;
            height: 25px;
            width: 990px;
            margin-top: 5px;
        }

        .ng-s-footer p.ng-copyright {
            float: none;
            width: 100%;
        }

        .root1200 .ng-s-footer p.ng-copyright {
            width: 100%;
        }
    </style>
    <script type="text/javascript " src="user/js/safe/ms_common.min.js "></script>
    <div style="text-align:center;">
        <p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
    </div>
</body>

</html>