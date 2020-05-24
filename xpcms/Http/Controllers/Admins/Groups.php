<?php
namespace xpcms\Http\Controllers\admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use xpcms\Http\Controllers\Controller;

class Groups extends Controller
{
    //角色列表
    public function index()
    {
        $data['groups'] = DB::table('xpcms_admin_group')->getArray();
        return view('/admins/groups/index',$data);
    }

    //角色添加、修改
    public function add(Request $request)
    {
        //编辑角色时，根据传入的角色id获取角色
        $gid = (int)$request->gid;
        $group = DB::table('xpcms_admin_group')->where('gid',$gid)->item();
        $group['rights'] = json_decode($group['rights']);
        echo '<pre>';
        var_dump($group);
        $data['group'] = $group;

        //列出所有权限菜单
        //取出菜单表数据，并改变数组下标为对应的mid，这样就能找到pid对应的记录
        $menus = DB::table('xpcms_admin_menu')->where('status',0)->select('mid','title','pid')->changesubscriptmacro('mid');
        //把上面的平面的数组，按pid关系建立层级关系
        $menus = $this->getTreeItems($menus);
        //如果一条记录有多层级的children，则放在同一个children里面（多层级菜单转为二个层级菜单）
        $data['menus'] = [];
        foreach ($menus as $val) {
            //判断有没有子菜单，有则全部都放在元素children下
            $val['children'] = isset($val['children'])?$this->formateMenus($val['children']):false;
            $data['menus'][]= $val;
        }
//        echo '<pre>';
//        print_r($data['menus']);
        return view('/admins/groups/add',$data);
    }

    //保存角色
    public function save(Request $request)
    {
        $gid = (int)$request->gid;
        $title = $request->title;
        $menus = $request->menu;   //[1=>on,7=>on,8=>on,21=>on]
        $menuId = !empty($menus)?array_keys($menus):false; //取菜单的键
//        $admin_id = $request->admin['id'];

        //有角色id就是修改保存
        if ($gid) {
            if ($title=='') {
                return json_encode(['code'=>1,'msg'=>'请输入角色名']);
            }
            //此处需要完善一个地方：勾选子级菜单时，需要自动勾选父级菜单才合理
            $data = ['title'=>$title,'rights'=>json_encode($menuId),'edit_time'=>time(),'admin_id'=>0];
            $res = DB::table('xpcms_admin_group')->where('gid',$gid)->update($data);
        }else{
            if ($title=='') {
                return json_encode(['code'=>1,'msg'=>'请输入角色名']);
            }
            $data = ['title'=>$title,'rights'=>json_encode($menuId),'edit_time'=>time(),'admin_id'=>0];

            if ($group) {
                return json_encode(['code'=>1,'msg'=>'角色名已存在']);
            }
            if (empty($menuId)) {
                return json_encode(['code'=>1,'msg'=>'请勾选权限']);
            }
            $data['add_time']= time();
            $res = DB::table('xpcms_admin_group')->insert($data);
        }
        if ($res) {
            return json_encode(['code'=>0,'msg'=>'保存成功']);
        }else{
            return json_encode(['code'=>1,'msg'=>'保存失败']);
        }

//        print_r($menuId);

    }

    //一级数组转为带子菜单的多层级数组
    private function getTreeItems($items)
    {
        $tree = [];
        foreach ($items as $key => $item) {
            //当pid为零，$items[0]不存在，因为items的下标是mid，不可能为零
            //把记录放入对应pid的记录内，&表示指针，相当于剪切到上级数组内，不然原数组还在原来的内存地址
            if (isset($items[$item['pid']])) {
                $items[$item['pid']]['children'][] = &$items[$item['mid']];
            }else{
                //pid为零，即为顶级数组，直接放入新数组
                $tree[] = &$items[$item['mid']];
            }
        }
        return $tree;
    }
    //一个数组中多层级元素children统一放到数组的children里面，
    private function formateMenus($items,&$res=[])
    {
        foreach ($items as $item) {
            //判断有无子菜单，没有子菜单则直接放入新数组。也是递归结束的出口。
            if (!isset($item['children'])) {
                $res[] = $item;
            } else {
                $temp = $item['children']; //有子菜单，把子菜单拿出来(放入新的变量)，并销毁原数组的子菜单，不至于指针错乱
                unset($item['children']);
                $res[] = $item; //把销毁子菜单后的数组放进新数组，
                $this->formateMenus($temp,$res); //对拿出来的子菜单$temp继续处理，把结果统一放入$res
            }
        }
        return $res;
    }
}




