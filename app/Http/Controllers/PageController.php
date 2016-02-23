<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;
use App;
// set up id connection to these tables
use App\CatSubcat;
use App\MenuItem;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function main() {
        $maincat = App\CatSubcat::where('cat_call','')->get();
        // return view('main', compact('maincat'));
        return view('main', compact('maincat'));
    }
    public function sub(Catsubcat $id) {
        //grab items from SubCategories if cat_id = id of category
        $subcat = App\CatSubcat::where('cat_call', $id->id)->get();
        return view('sub', compact('id', 'subcat'));
    }
    public function prod(CatSubcat $id) {
        //grab items from Products if sub_id = id of subcategory
        $subcat = App\MenuItem::where('sub_call', $id->sub_id)->get();
        return view('prod', compact('id', 'subcat'));
    }
}
