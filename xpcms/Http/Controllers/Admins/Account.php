<?php
namespace xpcms\Http\Controllers\admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use xpcms\Http\Controllers\Controller;

class Account extends Controller
{
    //显示后台用户注册页面
    public function reg()
    {
        return view('admins.account.reg');
    }

    //后台用户注册
    public function doreg(Request $request)
    {
        $username = trim($request->username);
        $pwd = trim($request->pwd);
        $tel = trim($request->tel);
        $security_question = trim($request->security_question);
        $security_answer = trim($request->security_answer);
        $verifycode = strtolower($request->verifycode);

        session_start();
        if ($verifycode != strtolower($_SESSION['code'])) {
            exit(json_encode(array('code'=>1,'msg'=>'验证码错误！')));
        }

        //从数据库验证用户信息，使用laraver提供的函数自动比对
        $res = DB::table('xpcms_admin')->where('username',$username)->item(); //默认关联user模型，key为数据表字段名
        if ($res) {
            exit(json_encode(['code'=>1,'msg'=>'用户名已存在']));
        }else {
            $data = ['username' => $username, 'password' => $pwd, 'mobile' => $tel, 'security_question' => $security_question, 'security_answer' => $security_answer, 'add_time' => time(), 'login_lastip' => $request->getClientIp()];
            $result = DB::table('xpcms_admin')->insert($data);
            var_dump($request);
            return json_encode(array('code'=>0,'msg'=>'注册成功'));
        }




    }

    public function login()
    {
        //       echo password_hash('123456',PASSWORD_DEFAULT);
        return view('admins.account.login');
    }

    public function dologin(Request $request)
    {
        $username = trim($request->username);
        $pwd = trim($request->pwd);
        $verifycode = strtolower($request->verifycode);
        session_start();
        if ($verifycode != strtolower($_SESSION['code'])) {
            exit(json_encode(array('code'=>1,'msg'=>'验证码错误！')));
        }
        //从数据库验证用户信息，使用laraver提供的函数自动比对
        $res = Auth::attempt(['username'=>$username,'password'=>$pwd,'status'=>0]); //默认关联user模型，key为数据表字段名
        if (!$res) {
            exit(json_encode(['code'=>1,'msg'=>'用户名或密码错误']));
        }
        //更新登录信息
        DB::table('xpcms_admin')->where(['username'=>$username])->update(['login_lastip'=>$request->getClientIp(),'login_lasttime'=>time()]);

         return json_encode(array('code'=>0,'msg'=>'登录成功'));

    }

    public function captcha()
    {
        VeriCode::create(); //调用验证码创建方法
    }

    public function logout()
    {
        $res = Auth::logout();
        if($res) {
            return json_encode(['code' => 0, 'msg' => '成功退出']);
        }
    }
}


/**
 * 验证码类
 */
class VeriCode{
    // 获取验证码配置
    private static function _getCodeConfig(){
        return  [
            // 验证码字符集
            'codeStr' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',
            // 验证码个数
            'codeCount' => 4,
            // 字体大小
            'fontsize' =>24,
            // 验证码的宽度
            'width' => 100,
            // 验证码高度
            'height' => 36,
            // 是否有干扰点?true有,false没有
            'disturbPoint' => true,
            // 干扰点个数,disturbPoint开启后生效
            'pointCount' => 200,
            // 是否有干扰条?true有,false没有
            'disturbLine' => true,
            // 干扰条个数,disturbLine开启后生效
            'lineCount' => 3
        ];
    }

    // 创建图片验证码
    public static function create(){
        // 配置
        $config = self::_getCodeConfig();

        //创建画布
        $image = imagecreatetruecolor($config['width'],$config['height']);
        //背景颜色
        $bgcolor=imagecolorallocate($image,255,255,255);
        imagefill($image,0,0,$bgcolor);
        $captch_code = '';//存储验证码
        $captchCodeArr = str_split($config['codeStr']);

        //随机选取4个候选字符
        for($i=0;$i<$config['codeCount'];$i++){
            $fontsize = $config['fontsize'];
            $fontcolor=imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));//随机颜色
            $fontcontent = $captchCodeArr[rand(0,strlen($config['codeStr'])-1)];
            $captch_code.=$fontcontent;
            $_x = $config['width']/$config['codeCount'];
            $x=($i*(int)$_x)+rand(5,10);   //随机坐标
            $y=rand(5,10);
            imagestring($image,$fontsize,$x,$y,$fontcontent,$fontcolor);	// 水平地画一行字符串
        }
        session_start();
        $_SESSION['code']=$captch_code;
        //增加干扰点
        if($config['disturbPoint']){
            for($i=0;$i<$config['pointCount'];$i++){
                $pointcolor=imagecolorallocate($image,rand(50,200),rand(50,200),rand(50,200));
                imagesetpixel($image,rand(1,99),rand(1,29),$pointcolor);
            }
        }

        //增加干扰线
        if($config['disturbLine']){
            for($i=0;$i<$config['lineCount'];$i++){
                $linecolor=imagecolorallocate($image,rand(80,280),rand(80,220),rand(80,220));
                imageline($image,rand(1,99),rand(1,29),rand(1,99),rand(1,29),$linecolor);
            }
        }

        //输出格式
        header('content-type:image/png');
        imagepng($image);

        //销毁图片
        imagedestroy($image);
    }
}
