<?php
namespace xpcms\Http\Controllers\admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use xpcms\Http\Controllers\Controller;

class Site extends Controller
{
    //基本配置
    public function index()
    {
        $data['basic'] = $this->getSetting('site_basic');
//        echo '<pre>';
//        print_r($data);
        return view('admins.site.index',$data);
    }

    public function email()
    {
        return view('admins.site.email');
    }
    //手机短信配置
    public function sms()
    {
        return view('admins.site.sms');
    }
    //附件配置
    public function annex()
    {
        return view('admins.site.annex');
    }
    //微信公众号配置
    public function wechat()
    {
        return view('admins.site.wechat');
    }
    //SEO配置
    public function seo(){
        $res =$this->getSetting('site_seo');
        $data['seo']=$res;
        return view('admins.site.seo',$data);
    }

    public function security()
    {
        return view('admins.site.security');
    }

    //保存设置
    public function save(Request $request)
    {
        //获取所有请求
        $data = $request->all();
        $data['site_logo'] = $request->site_logo;
        print_r($data);
        $keys = $data['keys'];
        unset($data['keys']);
        unset($data['_token']);

        $item = DB::table('xpcms_sys_setting')->where('keys',$keys)->item();
        if ($item) {
            $result =DB::table('xpcms_sys_setting')->where('keys',$keys)->update(['values'=>json_encode($data)]);
        } else {
            $result = DB::table('xpcms_sys_setting')->insert($res);
        }
        if ($result) {
            return json_encode(['code'=>0,'msg'=>'保存成功！']);
        } else {
            return json_encode(['code'=>1,'msg'=>'设置没有更改！']);
        }
    }

    //根据keys获取配置信息
    private function getSetting($keys)
    {
        $res = DB::table('xpcms_sys_setting')->where('keys',$keys)->item();
        //把values的string类型的值转为数组
        if ($res['values']) {
            $res['values'] = json_decode($res['values'],true);
        }else{
            $res['values'] = false;
        }
        return $res;
    }

    //图片上传
    public function upload(Request $request)
    {
        $thumb = $request->all();
        echo '<pre>';
        exit(print_r($thumb));
        $allowed_extensions = ["png", "jpg", "gif", 'jpeg', 'gif'];
        //验证图片的类型
        if ($thumb->getClientOriginalExtension() && !in_array($thumb->getClientOriginalExtension(), $allowed_extensions)) {
            return ['error' => 'You may only upload png, jpg or gif.'];
        }
        $destinationPath = 'storage/uploads/'; //public 文件夹下面建 storage/uploads 文件夹
        $extension = $thumb->getClientOriginalExtension();
        $fileName = str_random(10) . '.' . $extension; //设置文件名称
        $thumb->move($destinationPath, $fileName); //移动文件到对应位置
        $filePath = asset($destinationPath . $fileName); //上传成功返回图片访问地址
        if ($filePath) {
            ajax_return('0', $filePath);       //成功
        } else {
            ajax_return('-1', $filePath);//失败
        }

    }





}