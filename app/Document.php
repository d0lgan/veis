<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use DB;


class Document extends Model
{
    protected $fillable = ['module', 'module_id', 'lang', 'type', 'content'];

    public static function get($module, $type, $id, $lang = 'ru')
    {

        $res = Document::where([
            ['module', '=', $module],
            ['module_id', '=', $id],
            ['type', '=', $type],
            ['lang', '=', $lang]
        ])->first();

        if($res) {
            return $res->content;
        }

        return false;

    }
/*
    public static function test($i, $id, $lang) {
        $result = DB::table('documents')
            ->where([
                ['module', $i],
                ['module_id', $id],
                ['lang', $lang],
            ])->first();
        return $result;
    }*/

}
