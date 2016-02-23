<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;
use App;
// set up id connection to these tables
use App\Category;
use App\SubCategory;
use App\Product;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function cdestroy(Product $id) {

        $sub=App\SubCategory::where('cat_id', $id->id)->get();
        for($i=0;$i<sizeof($sub);$i++) {
            $item[$i]=App\Product::where('sub_id', $sub[$i]->id)->delete();
        }

        $sub=App\SubCategory::where('cat_id', $id->id)->delete();

        $cat=App\Category::where('id', $id->id)->delete();

        return Redirect::back();
    }
    public function sdestroy(SubCategory $id) {

        $item=App\Product::where('sub_id', $id->id)->delete();

        $sub=App\SubCategory::where('id', $id->id)->delete();

        return Redirect::back();
    }
    public function pdestroy(Product $id) {

        $item=App\Product::where('id', $id->id)->delete();

        return Redirect::back();
    }
}
