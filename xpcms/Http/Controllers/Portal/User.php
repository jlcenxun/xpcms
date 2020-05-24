<?php
namespace xpcms\Http\Controllers\portal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use xpcms\Http\Controllers\Controller;
use xpcms\Http\Controllers\common\VerifyCode; //验证码
use xpcms\Http\Controllers\common\Sms;

class User extends Controller
{
    public function login()
    {
        return view('portal.user.login');
    }

    public function dologin(Request $request)
    {
        $username = trim($request->username);
        $password = trim($request->password);
        $captcha = strtolower(trim($request->captcha));
        session_start();
        if ($captcha != strtolower($_SESSION['code'])) {
            return json_encode(['code'=>1,'msg'=>'验证码不正确']);
        }
        //比对会员（用户）模型，登录验证
        $res = Auth::guard('member')->attempt(['username'=>$username,'password'=>$password,'status'=>0]);

        if (!$res) {
            return json_encode(['a'=>$res,'user'=>$username,'pwd'=>$password,'code'=>1,'msg'=>'登录失败']);
        }
        //更新数据库
        DB::table('xpcms_member')->where('username',$username)->update(['login_lasttime'=>time(),'login_lastip'=>$request->getClientIp()]);
        return json_encode(['code'=>0,'msg'=>'登录成功']);
    }

    public function captcha()
    {
        VerifyCode::create();
    }

    //用户注册页面
    public function regedit()
    {
        return view('portal.user.regedit');
    }

    //发送验证码并保存验证码到session
    public function sendSms(Request $request,Sms $sms)
    {
        $tel = $request->tel;
        $code = mt_rand(100000,999999);
        $expire_time = config('rlsms.expire_time');
        $tempId = config('rlsms.templateId');
        $res = $sms->sendTemplateSMS($tel,[$code,$expire_time],$tempId);
        return $res;
        if ($res) {
            return json_encode(['code'=>0,'msg'=>'验证码发送成功！']);
        }

    }

    public function personal()
    {
        return view('portal.user.personal');
    }

    //获取物流信息
    public function getEms()
    {
        die(config('rlsms.accountSid'));
        $host = "https://wuliu.market.alicloudapi.com";//api访问链接
        $path = "/kdi";//API访问后缀
        $method = "GET";
        $appcode = "0a8bec602aa046b9911596d0913ef6a8";//替换成自己的阿里云appcode
        $headers = array();
        array_push($headers, "Authorization:APPCODE " . $appcode);
        $querys = "no=73128776937863&type=zto";  //参数写在这里
        $bodys = "";
        $url = $host.$path.'?'.$querys;//url拼接

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_FAILONERROR, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        //curl_setopt($curl, CURLOPT_HEADER, true); 如不输出json, 请打开这行代码，打印调试头部状态码。
        //状态码: 200 正常；400 URL无效；401 appCode错误； 403 次数用完； 500 API网管错误
        if (1 == strpos("$".$host, "https://"))
        {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        }
        $result = curl_exec($curl);
        echo '<pre>';
       return $result;

//        $res = file_get_contents($url);
//        echo '<pre>';
//        var_dump($res);

        }



}
