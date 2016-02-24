<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $table = 'menuitems';

    public static function product(CatSubcat $id) {
        return MenuItem::where('sub_call', $id->sub_id)->get();
    }
    public static function itemdeath(Menuitem $id) {
        return MenuItem::where('id', $id->id)->delete();
    }
}
