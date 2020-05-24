<?php
namespace xpcms\Http\Controllers\admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use xpcms\Http\Controllers\Controller;

class Admin extends Controller
{
    public function index()
    {

        //获取管理员数据表
        $data['lists'] = DB::table('xpcms_admin')->getArray();
        //获取角色
        $data['groups'] = DB::table('xpcms_admin_group')->changesubscriptmacro('gid');
        return view('admins.admin.index',$data);
    }

    public function add(Request $request)
    {
        //根据$admin_id查询管理员表
        $admin_id =(int)$request->admin_id;
        $data['admin'] = DB::table('xpcms_admin')->where('id',$admin_id)->item();
        $data['groups'] = DB::table('xpcms_admin_group')->getArray();

//        echo '<pre>';
        var_dump($data['groups']);
        var_dump($data['admin'] );

        return view('/admins/admin/add',$data);
    }

    public function save(Request $request)
    {
       $data['id'] = (int)$request->id;
       $data['username'] = trim($request->username);
       $data['password'] = trim($request->password);
       $data['group_id'] = (int)$request ->group_id;
       $data['real_name'] = trim($request->real_name);
       $data['mobile'] = trim($request->mobile);
       $data['status']= (int)$request->status;


        //检查是否输入
        if ($data['username'] == '') {
            exit(json_encode(['code'=>1,'msg'=>'请输入用户名']));
        }
        if ($data['group_id']==0) {
            exit(json_encode(['code'=>1,'msg'=>'请选择角色']));
        }
        if ($data['id']=='' & $data['password']=='') {
            exit(json_encode(['code'=>1,'msg'=>'请输入密码']));
        }
        if ($data['real_name']=='') {
            exit(json_decode(['code'=>1,'msg'=>'请输入真实姓名！']));
        }
        /*添加管理员*/
        if ($data['id']==0) {
            //检查用户是否存在
            $user = DB::table('xpcms_admin')->where('username',$data['username'])->item();
            if ($user) {
                exit(json_encode(['code'=>1,'msg'=>'用户已存在！']));
            }
            //用户密码加密
            $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
            $data['add_time'] = time();
            DB::table('xpcms_admin')->insert($data);
        } else {
            /*修改管理员*/
            $data['edit_time'] = time();
            unset($data['username']); //不允许修改用户名
            DB::table('xpcms_admin')->where('id',$data['id'])->update($data);
        }
        exit(json_encode(['code'=>0,'msg'=>'保存成功']));
    }

    //删除管理员
    public function del(Request $request)
    {
        $admin_id = (int)$request->admin_id;
        DB::table('xpcms_admin')->where('id',$admin_id)->delete();
        exit(json_encode(['code'=>0,'msg'=>'删除成功']));
    }





}




