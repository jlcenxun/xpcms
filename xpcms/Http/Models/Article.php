<?php
namespace xpcms\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    public function index()
    {
        //一次性构建数据
//        $navs = DB::table('xpcms_article_category')->whereIn('id',[28,29,30,35])->changesubscriptmacro('id');
//        $childrens  = DB::table('xpcms_article_category')->where('pid',[28,29,30,35])->getArray();
//        foreach ($childrens as $item) {
//            $navs[$item['pid']]['children'][] = $item;
//        }
//        return $navs;

        //分别对应构建数据
        $data['zixunkanxue'] = DB::table('xpcms_article_category')->where('id',28)->item();
        $data['zixunkanxue_sub'] = DB::table('xpcms_article_category')->where('pid',28)->getArray();
        $data['xiaopitoutiao'] = DB::table('xpcms_article_category')->where('id',29)->item();
        $data['xiaopitoutiao_sub'] = DB::table('xpcms_article_category')->where('pid',29)->getArray();
        $data['jinrizixun'] = DB::table('xpcms_article_category')->where('id',30)->item();
        $data['jinrizixun_sub'] = DB::table('xpcms_article_category')->where('pid',30)->getArray();
        $data['tujidaquan'] = DB::table('xpcms_article_category')->where('id',35)->item();
        $data['tujidaquan_sub'] = DB::table('xpcms_article_category')->where('pid',35)->getArray();
        return $data;
    }

    public function list($cid=null)
    {   //首页新闻资讯列表
        $data['lists_1'] = DB::table('xpcms_article')->limit(5)->getArray();
        $data['lists_2'] = DB::table('xpcms_article')->offset(5)->limit(5)->getArray();
        $data['lists_3'] = DB::table('xpcms_article')->offset(10)->limit(5)->getArray();
        $data['lists_4'] = DB::table('xpcms_article')->offset(15)->limit(5)->getArray();

        if ($cid==null) {
            $listObject = DB::table('xpcms_article')->paginate(100);
        }else{
            $listObject = DB::table('xpcms_article')->where('cate_id',$cid)->paginate(5);
        }
        $lists = $listObject->items();
        $art_lists = [];
        foreach ($lists as $list) {
            $art_lists[] = (array)$list;   //每条列表由对象转为数组
        }
        $data['lists'] = $art_lists;

        return $data;
    }
}