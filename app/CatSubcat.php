<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatSubcat extends Model
{
    protected $table = 'catsubcats';

    public static function maincat() {
        return CatSubcat::where('cat_call','')->get();
    }
    public static function subcat(CatSubcat $id) {
        return CatSubcat::where('cat_call', $id->id)->get();
    }
    public static function subdeath(CatSubcat $id) {
        MenuItem::where('sub_call', $id->sub_id)->delete();
        CatSubcat::where('sub_id', $id->sub_id)->delete();
    }
    public static function catdeath(CatSubcat $id) {
        $sub=CatSubcat::where('cat_call', $id->id)->get();
        for($i=0;$i<sizeof($sub);$i++) {
            MenuItem::where('sub_call', $sub[$i]->sub_id)->delete();
        }
        CatSubcat::where('cat_call', $id->id)->delete();
        CatSubcat::where('id', $id->id)->delete();
    }
}
