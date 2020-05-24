<?php

namespace xpcms\Providers;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Support\ServiceProvider;

class DbServiceProvider extends ServiceProvider
{
       public function boot()
    {
        //扩展获取一条记录的方法
        QueryBuilder::macro('item', function () {
            $res = $this->first();
            return $res?(array)$res:false;  //不让返回空数组，在页面渲染时防止出现没有索引的错误
        });
        //数据库对象转成数组
        QueryBuilder::macro('getArray', function () {
            $res = $this->get()->all();
            $arr = [];
            foreach ($res as $value) {
                $arr[] = (array)$value;
            }
            return $arr;
        });

        //扩展的自定义索引的方法
        QueryBuilder::macro('changesubscriptmacro',function ($index) {
            $res = $this->getArray();
            $arr = [];
            foreach ($res as $k => $value) {
                $arr[$value[$index]] = (array)$value;  //数组的下标不再用0、1、2……表示，而是用传入的索引值表示
            }
            return $arr;
        });
    }
}
