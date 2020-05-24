<?php
namespace xpcms\Http\Controllers\admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use xpcms\Http\Controllers\Controller;

class Home extends Controller
{
    public function index(Request $request)
    {
//        print_r($request->admins);
        $data['menus'] = $this->getMenus($request->admins);  //根据路由中间件带过来的用户信息（权限）来获取菜单
        $data['admin'] = $request->admins;
//        echo '<pre>';
//        print_r($data);
        return view('/admins/home/index',$data); //把上面的数据带到视图
    }

    private function getMenus($admin)
    {
        //查顶级菜单，考虑权限条件whereIn('mid',$admin['rights'])
        $menus = DB::table('xpcms_admin_menu')->where('ishidden',0)->where('pid',0)->whereIn('mid',$admin['rights'])->where('status',0)->orderBy('ord','asc')->get()->toArray();
        //查询子菜单，同意考虑权限条件
        foreach ($menus as $key=>$val) {
            $val = (array)$val;    //数组menus的元素是对象，需要转为数组
            $menus[$key] = (array)$val;
            $children  = DB::table('xpcms_admin_menu')->where('pid',$val['mid'])->whereIn('mid',$admin['rights'])->where('ishidden',0)->get()->toArray();
            //为了视图渲染方便，把对象$chrldren中的每一项转为数组
            foreach ($children as $k => $v) {
                $children[$k] = (array)$v;  //转为数组，放回大数组
            }
            $menus[$key]['children'] = $children;
        }
        return $menus;
    }

    public function welcome()
    {
        return view('/admins/home/welcome2');
    }
}