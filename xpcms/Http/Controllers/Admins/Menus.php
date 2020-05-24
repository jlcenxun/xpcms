<?php
namespace xpcms\Http\Controllers\admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use xpcms\Http\Controllers\Controller;

class Menus extends Controller
{
    public function index(Request $request)
    {
        //菜单列表(主菜单及子菜单）
        $pid = (int)$request->pid;  //根据传入的pid判断，没有传入时，前台的undefined转为0
        $data['lists'] = DB::table('xpcms_admin_menu')->where('pid',$pid)->getArray();
        return view('/admins/menus/index',$data);
    }

    public function add(Request $request)
    {
        $mid = (int)$request->mid;
//        $mid = 21;
//        $pid = 2;
        $data['menu'] = DB::table('xpcms_admin_menu')->where('mid',$mid)->item();
        //顶级菜单
        $data['menus_top'] = DB::table('xpcms_admin_menu')->where('pid',0)->getArray();
        foreach ($data['menus_top'] as $menu_top) {
            /*echo '<pre>';
            print_r($menu_top);
            print_r($menu_top['mid']);*/
            //根据pid找出下级菜单
            $data['menus_sub'] = DB::table('xpcms_admin_menu')->where('pid',$menu_top['mid'])->getArray();
        return view('/admins/menus/add',$data);

        }


        echo '<pre>';
        echo '<hr>';
//        print_r($data['menu']);
//        echo '<hr>';
//        print_r($data['menus_top']);
        echo '<hr>';
        print_r($data['menus_sub']);
        exit();
        return view('/admins/menus/add',$data);
    }

    public function save(Request $request)
    {
        $data['pid'] = (int)$request->pid;
        $data['mid'] = (int)$request->mid;
        $data['title'] = trim($request->title);
        $data['ord'] = (int)$request->ord;
        $data['controller'] = trim($request->controller);
        $data['action'] = trim($request->action);
        $data['ishidden'] = (int)$request ->ishidden;
        $data['status'] = (int)$request->status;

        if ($data['title']=='') {
           exit(json_encode(['code'=>1,'msg'=>'菜单名称不能为空']));
        }

            //添加菜单
        if ($data['mid'] == 0) {
            //检查是否存在菜单名
            $title = DB::table('xpcms_admin_menu')->where('title',$data['title'])->item();
            if ($title) {
                exit(json_encode(['code'=>1,'msg'=>'菜单名已存在']));
            }
            $data['add_time'] = $data['edit_time'] = time();
            DB::table('xpcms_admin_menu')->insert($data);
            exit(json_encode(['code'=>0,'msg'=>'保存成功']));
        }else{
            $data['edit_time'] = time();
            DB::table('xpcms_admin_menu')->where('mid',$data['mid'])->update($data);
        }
        exit(json_encode(['code'=>0,'msg'=>'保存成功']));
    }

    //根据菜单id删除菜单
    public function del(Request $request)
    {
        $mid = (int)$request->mid;
        exit(print_r($mid));
        DB::table('xpcms_admin_menu')->where('mid',$mid)->delete();
        exit(json_encode(['code'=>0,'msg'=>'删除成功']));
    }

}
