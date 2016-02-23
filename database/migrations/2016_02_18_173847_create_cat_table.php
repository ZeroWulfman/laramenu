<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catsubcats', function (Blueprint $table) {
            // Set up Categories Table
            $table->increments('id');
            $table->integer('cat_call');
            $table->integer('sub_id');
            $table->string('title');
            $table->string('image');
        });

        DB::table('catsubcats')->insert([
            [
              "cat_call"=>"",
              "sub_id"=>"",
              "title"=> "Two For Twenty",
              "image"=> "img/main/2420.jpg"
            ],
            [
              "cat_call"=>"",
              "sub_id"=>"",
              "title"=> "Better For You",
              "image"=> "img/main/better4u.jpg"
            ],
            [
              "cat_call"=>"",
              "sub_id"=>"",
              "title"=> "Beverages",
              "image"=> "img/main/beverages.jpg"
            ],
            [
              "cat_call"=>"",
              "sub_id"=>"",
              "title"=> "Handcrafted Burgers",
              "image"=> "img/main/handcraftedHamburger.jpg"
            ],
            [
              "cat_call"=>"",
              "sub_id"=>"",
              "title"=> "Desserts",
              "image"=> "img/main/desserts.jpg"
            ],
            [
              "cat_call"=>"",
              "sub_id"=>"",
              "title"=> "Main Entrees",
              "image"=> "img/main/entrees.jpg"
            ],
            [
              "cat_call"=>"",
              "sub_id"=>"",
              "title"=> "Lunch Combos",
              "image"=> "img/main/LunchCombos.jpg"
            ],
            [
              "cat_call"=>"",
              "sub_id"=>"",
              "title"=> "Fresh Salads",
              "image"=> "img/main/salads.jpg"
            ],
            [
              "cat_call"=>"",
              "sub_id"=>"",
              "title"=> "Pub Diet",
              "image"=> "img/main/pubDiet.jpg"
            ],
            [
              "cat_call"=>"",
              "sub_id"=>"",
              "title"=> "Kids",
              "image"=> "img/main/kids.jpg"
            ],
            [
              "cat_call"=>"",
              "sub_id"=>"",
              "title"=> "Bar Snacks",
              "image"=> "img/main/apps.jpg"
            ],
            [
              "cat_call"=>"",
              "sub_id"=>"",
              "title"=> "New Handhelds",
              "image"=> "img/main/handHeld.jpg"
            ]

        ]);

        DB::table('catsubcats')->insert([
            [
              "cat_call"=> "1",
              "sub_id"=>"1",
              "title"=> "Appetizers",
              "image"=> "/img/twofor/mozzarella_sticks.jpg"
            ],
            [
              "cat_call"=> "1",
              "sub_id"=>"2",
              "title"=> "Entrees",
              "image"=> "/img/twofor/chicken_penne.jpg"
            ],
            [
              "cat_call"=> "2",
              "sub_id"=>"3",
              "title"=> "The Smarter Choice",
              "image"=> "/img/better4u/salmon.jpg"
            ],
            [
              "cat_call"=> "3",
              "sub_id"=>"4",
              "title"=> "Beers",
              "image"=> "/img/beverages/Beers.jpg"
            ],
            [
              "cat_call"=> "3",
              "sub_id"=>"5",
              "title"=> "Wines",
              "image"=> "/img/beverages/wine_toast.jpg"
            ],
            [
              "cat_call"=> "3",
              "sub_id"=>"6",
              "title"=> "Refreshments",
              "image"=> "/img/beverages/refreshments.jpg"
            ],
            [
              "cat_call"=> "4",
              "sub_id"=>"7",
              "title"=> "All-In Burgers",
              "image"=> "/img/burgers/burger_mushroomswiss.jpg"
            ],
            [
              "cat_call"=> "4",
              "sub_id"=>"8",
              "title"=> "Neighborhood Burgers",
              "image"=> "/img/burgers/burger_triplebacon.jpg",
            ],
            [
              "cat_call"=> "5",
              "sub_id"=>"9",
              "title"=> "Sweet Treats",
              "image"=> "/img/desserts/apple_cheesecake.jpg"
            ],
            [
              "cat_call"=> "6",
              "sub_id"=>"10",
              "title"=> "Steaks",
              "image"=> "/img/mainEntrees/steak.jpg"
            ],
            [
              "cat_call"=> "6",
              "sub_id"=>"11",
              "title"=> "Ribs",
              "image"=> "/img/mainEntrees/riblets.jpg"
            ],
            [
              "cat_call"=> "6",
              "sub_id"=>"12",
              "title"=> "Chicken",
              "image"=> "/img/mainEntrees/bourbon_chicken.jpg"
            ],
            [
              "cat_call"=> "6",
              "sub_id"=>"13",
              "title"=> "Pasta, Seafood & More",
              "image"=> "/img/better4u/salmon.jpg"
            ],
            [
              "cat_call"=> "6",
              "sub_id"=>"14",
              "title"=> "Sides",
              "image"=> "/img/mainEntrees/bourbon_chicken.jpg"
            ],
            [
              "cat_call"=> "7",
              "sub_id"=>"15",
              "title"=> "Some Combo Options",
              "image"=> "/img/lunchCombos/oriental_salad.jpg"
            ],
            [
              "cat_call"=> "8",
              "sub_id"=>"16",
              "title"=> "Freshest Greens Around!",
              "image"=> "/img/lunchCombos/oriental_salad.jpg"
            ],
            [
              "cat_call"=> "9",
              "sub_id"=>"17",
              "title"=> "Eat With a Cold Brewski",
              "image"=> "/img/pubdiet/SirloinStout.jpg"
            ],
            [
              "cat_call"=> "10",
              "sub_id"=>"18",
              "title"=> "You Know You Love Them!",
              "image"=> "/img/ikea/smores.jpg"
            ],
            [
              "cat_call"=> "11",
              "sub_id"=>"19",
              "title"=> "Appetizers",
              "image"=> "/img/snacks/srirachaShrimp.jpg"
            ],
            [
              "cat_call"=> "11",
              "sub_id"=>"20",
              "title"=> "Bar Snacks",
              "image"=> "/img/snacks/churroSmores.jpg"
            ],
            [
              "cat_call"=> "12",
              "sub_id"=>"21",
              "title"=> "Yummy Handhelds",
              "image"=> "/img/Handhelds/blt.jpg"
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('catsubcats');
    }
}
