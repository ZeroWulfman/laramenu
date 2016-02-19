<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App;

use App\Category;
use App\SubCategory;
use App\Product;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function main() {
        $maincat = App\Category::all();
        return view('main', compact('maincat'));
    }
    public function sub(Category $id) {
        $subcat = App\SubCategory::where('cat_id', $id->id)->get();
        return view('sub', compact('id', 'subcat'));
    }
    public function prod(SubCategory $id) {
        $subcat = App\Product::where('sub_id', $id->id)->get();
        return view('sub', compact('id', 'subcat'));
    }
}
