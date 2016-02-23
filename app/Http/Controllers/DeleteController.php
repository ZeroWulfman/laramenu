<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// add ability to use redirect as command
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
        // Since it's three tables and there is nothing connecting Products to Categories, this code pulls up the correct subcats and does a for loop through them to delete al associated products.
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
