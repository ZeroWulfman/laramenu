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
        // Since it's three tables and there is nothing connecting Products to Categories, this code pulls up the correct subcats and does a for loop through them to delete al associated products.
        $sub=App\CatSubcat::where('cat_call', $id->id)->get();
        for($i=0;$i<sizeof($sub);$i++) {
            $item[$i]=App\MenuItem::where('sub_call', $sub[$i]->sub_id)->delete();
        }

        $sub=App\CatSubcat::where('cat_call', $id->id)->delete();

        $cat=App\CatSubcat::where('id', $id->id)->delete();

        return Redirect::back();
    }
    public function sdestroy(CatSubcat $id) {

        $item=App\MenuItem::where('sub_call', $id->sub_id)->delete();
        $sub=App\CatSubcat::where('sub_id', $id->sub_id)->delete();

        return Redirect::back();
    }
    public function pdestroy(MenuItem $id) {

        $item=App\MenuItem::where('id', $id->id)->delete();

        return Redirect::back();
    }
}
