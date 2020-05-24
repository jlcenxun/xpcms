<?php

namespace xpcms\Http\Controllers\admins;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use xpcms\Http\Controllers\Controller;

class Content extends Controller
{
    public function index(Request $request)
    {
        //获取搜索的类型、关键字
        $type = (int)$request->type;
        $wordkeys = trim($request->wd);
        //搜索时根据关键字查询，没有关键字时则查询所有的。结果为对象
        $listsObj = DB::table('xpcms_article')->where('title','like','%'.$wordkeys.'%')->Paginate(2);  //bootstrap样式
        $lists = $listsObj -> items(); //转为数组，数组里面包含对象
        $art_lists = [];
        foreach ($lists as $list) {
            $art_lists[] = (array)$list;   //每条列表由对象转为数组
        }
        $data['lists'] = $art_lists;
        //搜索
        $data['links'] = $listsObj ->appends(['wd'=>$wordkeys,'type'=>$type])->links('/admins/public/paginate');  //传入修改过的（自定义）分页模板；附加参数到分页链接，否则点击页码后变成显示全部分页
        $data['total'] = $listsObj ->total();

       return view('admins/content/index',$data);

    }

    public function add(Request $request)
    {
        $aid = (int)$request->id;
        $data['cate'] = DB::table('xpcms_article_category')->changesubscriptmacro('id');

        $data['article'] = DB::table('xpcms_article')->where('id',$aid)->item();
        $data['content'] = DB::table('xpcms_article_content')->where('aid',$aid)->item();


        return view('admins/content/add',$data);
    }

    public function save(Request $request)
    {
        $aid = (int)$request->id;
        $data['title'] = trim($request->title);
        $data['subtitle'] = trim($request->subtitle);
        $data['cate_id'] = $request->cate_id;
        $data['cover_img'] = $request->cover_img;
        $data['seo_title'] = $request->seo_title;
        $data['keyword'] = $request->keyword;
        $data['descs'] = $request->descs;
        $data['author'] = $request->author;
        $data['from_site'] = $request->from_site;
        $data['from_url'] = $request->from_url;
        $data['is_comment'] = $request->is_comment;
        $data['status'] = $request->status;
        $detail['contents'] = $request->contents;
        if ( $aid>0) {
            DB::table('xpcms_article')->where('id',$aid)->update($data);
            DB::table( 'xpcms_article_content')->where('aid',$aid)->update($detail);
            exit(json_encode(['code'=>0,'msg'=>'保存成功！']));
        }else{
            $title = DB::table('xpcms_article')->select('title')->where('title',$data['title'])->item();
            if ($title) {
                exit(json_encode(['code'=>1,'msg'=>'标题已存在']));
            }
            try {
                DB::beginTransaction(); //开启事务
                $data['add_time']=$data['edit_time'] = time();
                $id = DB::table('xpcms_article')->insertGetId($data);
                $detail['aid'] = $id;
                DB::table( 'xpcms_article_content')->insert($detail);
                DB::commit();
                return json_encode(['code'=>0,'msg'=>'保存成功！']);
            }catch (\Exception $e){
                DB::rollBack();
                exit(json_encode(['code'=>1,'msg'=>'保存失败']));
            }
        }
    }

    public function delete(Request $request)
    {
        $aid = $request->aid;
        try {
            DB::beginTransaction();
            DB::table('xpcms_article')->where('id',$aid)->delete();
            DB::table('xpcms_article_content')->where('aid',$aid)->delete();
            DB::commit();
            exit(json_encode(['code'=>0,'msg'=>'删除成功']));
        } catch (\Exception $e) {
            DB::rollBack();
            exit(json_encode(['code'=>1,'msg'=>'删除失败']));
        }
    }
}
