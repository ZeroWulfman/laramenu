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
        $maincat = App\CatSubcat::maincat();
        return view('main', compact('maincat'));
    }
    public function sub(Catsubcat $id) {
        $subcat = App\CatSubcat::subcat($id);
        return view('sub', compact('subcat'));
    }
    public function prod(CatSubcat $id) {
        $product = App\MenuItem::product($id);
        return view('prod', compact('product'));
    }
}
