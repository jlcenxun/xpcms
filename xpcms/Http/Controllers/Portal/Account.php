<?php
namespace xpcms\Http\Controllers\portal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use xpcms\Http\Controllers\Controller;

class Account extends Controller
{
    //显示登录页面
    public function login()
    {
        echo password_hash('123456',PASSWORD_DEFAULT);
        return view('portal/account/login');
    }

    //登录验证
    public function dologin(Request $request)
    {
        $username = $request -> username;
        $pwd = $request -> pwd;

        $res = Auth::guard('member')->attempt(['username'=>$username,'pwd'=>$pwd]);
//        exit(print_r($res));
        if ($res) {
            return json_encode(['code'=>0,'msg'=>'登录成功！']);
        }else{
            return json_encode(['code'=>$pwd,'msg'=>'登录失败！！']);
        }
    }
}