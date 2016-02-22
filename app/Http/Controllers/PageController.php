<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App;

// set up id connection to these tables
use App\Category;
use App\SubCategory;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function main() {
        $maincat = App\Category::all();
        return view('main', compact('maincat'));
    }
    public function sub(Category $id) {
        //grab items from SubCategories if cat_id = id of category
        $subcat = App\SubCategory::where('cat_id', $id->id)->get();
        return view('sub', compact('id', 'subcat'));
    }
    public function prod(SubCategory $id) {
        //grab items from Products if sub_id = id of subcategory
        $subcat = App\Product::where('sub_id', $id->id)->get();
        return view('sub', compact('id', 'subcat'));
    }
}
