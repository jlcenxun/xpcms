<?php
namespace xpcms\Http\Controllers\admins;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use xpcms\Http\Controllers\Controller;

class Image extends Controller
{
    public function upload(Request $request)
    {

        $path =  $request->file('file_upload')->store('/public/avatars');
        $url = Storage::url($path);
        $js = '<script>parent.upload_success("'.$url.'") </script>';  //注意parent
        return $js;
    }
}