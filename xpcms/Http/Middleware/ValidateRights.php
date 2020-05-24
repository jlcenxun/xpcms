<?php
namespace xpcms\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class ValidateRights
{
    public function handle($request,Closure $next)
    {
        $admin = Auth::user();  //返回对象

        //获取请求路由的控制器和方法
        $route = Route::currentRouteAction(); // 或者：$request->route()->getActionName(); 这两种方式可以获取完整命名空间，$_SERVER[REQUEST_URI],$request->path(),$request->url()等方法只能获取 /admins/homess/indexss，不能获取控制器和方法。
        $controller_action = explode('@',$route);
        $action = $controller_action[1];  //index
        $controller = $controller_action[0]; //xpcms\Http\Controllers\admins\Home
        $controller = explode('\\',$controller);
        $controller = array_pop($controller);   // 或者：$controller = $controller[count($controller)-1];

        //查询菜单表有没有请求的菜单（功能）
        $menu = DB::table('xpcms_admin_menu')->where('controller',$controller)->where('action',$action)->first();  //数组元素为对象
        if (!$menu) {
            return response($this->_msg($request,'你请求的地址不存在'));
        }

        //查询用户在角色表（xpcms_admin_group)的类型，权限是否包含这个菜单id
        $role = DB::table('xpcms_admin_group')->where('gid',$admin->group_id)->first();
        //如果没有判断角色是否存在，当没有角色时程序报错
        if (!$role) {
            return response($this->_msg($request,'你的角色不存在'));
        }
        $role->rights = json_decode($role->rights,true); //把对象转为数组
        //没有权限
        if (!in_array($menu->mid, (array)$role->rights)) {
            return response($this->_msg($request,'你没有访问权限'));
        }

        //有权限，继续程序
        $admin = $admin->toarray(); //user object可以用toarray（），标准对象不能使用这个函数。
        unset($admin['password']);//不要的字段
        unset($admin['security_question']);
        $admin['rights'] = $role->rights;  //把rights字段放入admins数组
        $request->admins = $admin;  //自定义属性，就把用户信息（主要是rights）带过控制器Home，其根据用户权限显示菜单。
        return $next($request);
    }

    protected function _msg($request,$str) //URL请求时，错误提示信息可以html；当ajax请求时，返回的应该是json格式信息比较好
    {
        if ($request->ajax()) { //$request->isajax()返回true或false
            $msg =  json_encode(['code'=>1,'msg'=>$str]);
        }else {
            $msg = "<div style='font-size: 160px;text-align: center;color: #cc2255;margin-top: 200px'>" . $str . "</div>";
        }
        return $msg;
    }
}