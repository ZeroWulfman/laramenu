<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// add ability to use redirect as command
use Illuminate\Support\Facades\Redirect;

use DB;
use App;
// set up id connection to these tables
use App\CatSubcat;
use App\MenuItem;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function cdestroy(CatSubcat $id) {
        App\CatSubcat::catdeath($id);
        return Redirect::back();
    }
    public function sdestroy(CatSubcat $id) {
        App\CatSubcat::subdeath($id);
        return Redirect::back();
    }
    public function pdestroy(MenuItem $id) {
        App\MenuItem::itemdeath($id);
        return Redirect::back();
    }
}
