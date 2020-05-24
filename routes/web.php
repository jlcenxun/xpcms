<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//前台路由
Route::get('/','portal\Home@index');
Route::get('home','portal\Home@index');
Route::get('/list/{id}','portal\Home@list')->middleware('verifymember');
Route::get('/list','portal\Home@list');
Route::get('/account/login','portal\Account@login');
Route::post('/account/dologin','portal\Account@dologin');

//会员登录
Route::get('/user/login','portal\User@login');
Route::post('/user/dologin','portal\User@dologin');
Route::get('/personal','portal\User@personal');
Route::get('/user/captcha','portal\User@captcha');
Route::get('/user/regedit','portal\User@regedit');
Route::get('/user/getems','portal\User@getEms');
Route::post('/user/sendSms','portal\User@sendSms'); //发送验证码
//用户中心
//Route::namespace('portal')->middleware('verifymember')->group(function (){
//    //个人中心
//    Route::get('/personal','User@personal');
//});



//Route::get('/', function () {
//    return view('welcome');
//});
//注册
Route::get('/admins/account/reg','admins\Account@reg')->name('reg');
//请求登录页面
Route::get('/admins/account/login','admins\Account@login')->name('login'); //路由命名对应middleware/Authenticate.php中的定义
//请求验证码、登录
Route::get('/admins/account/captcha','admins\Account@captcha');
Route::post('/admins/account/dologin','admins\Account@dologin')->middleware('throttle:5,1'); //限定每分钟登录5次 throttle:节流、压制
//退出
Route::get('/admins/account/logout','admins\Account@logout');



//后台路由
Route::namespace('admins')->middleware(['auth','rights'])->group(function (){
    //后台首页
    Route::get('/admins/home/index','Home@index');
    Route::get('/admins/home/welcome','Home@welcome');
    //网站设置
    Route::get('/admins/site/index','Site@index');
    Route::get('/admins/site/email','Site@email');
    Route::get('/admins/site/sms','Site@sms');
    Route::get('/admins/site/annex','Site@annex');
    Route::get('/admins/site/wechat','Site@wechat');
    Route::get('/admins/site/seo','Site@seo');
    Route::get('/admins/site/security','Site@security');
    Route::post('/admins/site/save','Site@save');
    //管理员管理
    Route::get('/admins/admin/index','Admin@index');
    Route::get('/admins/admin/add','Admin@add');
    Route::post('/admins/admin/save','Admin@save');
    Route::post('/admins/admin/del','Admin@del');
    Route::post('/admins/admin/del','Admin@del');
    Route::get('/admins/admin/config','Admin@cofig1');
    //菜单管理
    Route::get('/admins/menus/index','Menus@index');
    Route::get('/admins/menus/add','Menus@add');
    Route::post('/admins/menus/save','Menus@save');
    Route::post('/admins/menus/del','Menus@del');
    //角色管理
    Route::get('/admins/groups/index','Groups@index');
    Route::get('/admins/groups/add','Groups@add');
    //内容管理
    Route::get('/admins/content/index','Content@index');
    Route::get('/admins/content/add','Content@add');
    Route::post('/admins/content/save','Content@save');
    //图片管理
    Route::post('/admins/image/upload','Image@upload');
    //模型管理
    Route::get('/admins/model/index','Model@index');
    Route::get('/admins/model/add','Model@add');


});



