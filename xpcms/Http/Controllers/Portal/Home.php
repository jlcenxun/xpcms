<?php
namespace xpcms\Http\Controllers\portal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use xpcms\Http\Controllers\Controller;
use xpcms\Http\Models\Article;

/**
 * 门户系统
 */
class Home extends Controller{
    // 首页
    public function index(Request $request,Article $article){



        $data = $article->index();
        $data2 = $article->list();
//        echo '<pre>';
//      exit(print_r($data));
        return view('portal.home.index',$data,$data2);
    }

    public function list(Request $request,Article $article)
    {
        $cate_id = $request->id;
        $data = $article->list($cate_id);
//        echo '<pre>';
//        print_r($data['lists']);
        return view('portal.home.list',$data);
    }

    public function detail()
    {
        
    }
}
