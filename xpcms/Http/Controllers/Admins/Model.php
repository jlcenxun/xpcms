<?php
namespace xpcms\Http\Controllers\admins;

use xpcms\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

class Model extends Controller
{
    public function index()
    {
        $data['model'] = DB::table('xpcms_model')->getArray();
        return view('/admins/model/index',$data);
    }

    public function add(Request $request)
    {


        return view('/admins/model/add');
    }
}
