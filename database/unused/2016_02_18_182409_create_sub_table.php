<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->increments('id');
            /* Set up connection to Categories Table*/
            $table->integer('cat_id')->unsigned()->index();
            $table->string('title');
            $table->string('image');
        });

        DB::table('subcategories')->insert([
            [
              "cat_id"=> "1",
              "title"=> "Appetizers",
              "image"=> "/img/twofor/mozzarella_sticks.jpg"
            ],
            [
              "cat_id"=> "1",
              "title"=> "Entrees",
              "image"=> "/img/twofor/chicken_penne.jpg"
            ],
            [
              "cat_id"=> "2",
              "title"=> "The Smarter Choice",
              "image"=> "/img/better4u/salmon.jpg"
            ],
            [
              "cat_id"=> "3",
              "title"=> "Beers",
              "image"=> "/img/beverages/Beers.jpg"
            ],
            [
              "cat_id"=> "3",
              "title"=> "Wines",
              "image"=> "/img/beverages/wine_toast.jpg"
            ],
            [
              "cat_id"=> "3",
              "title"=> "Refreshments",
              "image"=> "/img/beverages/refreshments.jpg"
            ],
            [
              "cat_id"=> "4",
              "title"=> "All-In Burgers",
              "image"=> "/img/burgers/burger_mushroomswiss.jpg"
            ],
            [
              "cat_id"=> "4",
              "title"=> "Neighborhood Burgers",
              "image"=> "/img/burgers/burger_triplebacon.jpg",
            ],
            [
              "cat_id"=> "5",
              "title"=> "Sweet Treats",
              "image"=> "/img/desserts/apple_cheesecake.jpg"
            ],
            [
              "cat_id"=> "6",
              "title"=> "Steaks",
              "image"=> "/img/mainEntrees/steak.jpg"
            ],
            [
              "cat_id"=> "6",
              "title"=> "Ribs",
              "image"=> "/img/mainEntrees/riblets.jpg"
            ],
            [
              "cat_id"=> "6",
              "title"=> "Chicken",
              "image"=> "/img/mainEntrees/bourbon_chicken.jpg"
            ],
            [
              "cat_id"=> "6",
              "title"=> "Pasta, Seafood & More",
              "image"=> "/img/better4u/salmon.jpg"
            ],
            [
              "cat_id"=> "6",
              "title"=> "Sides",
              "image"=> "/img/mainEntrees/bourbon_chicken.jpg"
            ],
            [
              "cat_id"=> "7",
              "title"=> "Some Combo Options",
              "image"=> "/img/lunchCombos/oriental_salad.jpg"
            ],
            [
              "cat_id"=> "8",
              "title"=> "Freshest Greens Around!",
              "image"=> "/img/lunchCombos/oriental_salad.jpg"
            ],
            [
              "cat_id"=> "9",
              "title"=> "Eat With a Cold Brewski",
              "image"=> "/img/pubdiet/SirloinStout.jpg"
            ],
            [
              "cat_id"=> "10",
              "title"=> "You Know You Love Them!",
              "image"=> "/img/ikea/smores.jpg"
            ],
            [
              "cat_id"=> "11",
              "title"=> "Appetizers",
              "image"=> "/img/snacks/srirachaShrimp.jpg"
            ],
            [
              "cat_id"=> "11",
              "title"=> "Bar Snacks",
              "image"=> "/img/snacks/churroSmores.jpg"
            ],
            [
              "cat_id"=> "12",
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
        Schema::drop('subcategories');
    }
}
