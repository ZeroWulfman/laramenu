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
        Schema::create('categories', function (Blueprint $table) {
            // Set up Categories Table
            $table->increments('id');
            $table->string('title');
            $table->string('image');
        });

        DB::table('categories')->insert([
            [
              "title"=> "Two For Twenty",
              "image"=> "img/main/2420.jpg"
            ],
            [
              "title"=> "Better For You",
              "image"=> "img/main/better4u.jpg"
            ],
            [
              "title"=> "Beverages",
              "image"=> "img/main/beverages.jpg"
            ],
            [
              "title"=> "Handcrafted Burgers",
              "image"=> "img/main/handcraftedHamburger.jpg"
            ],
            [
              "title"=> "Desserts",
              "image"=> "img/main/desserts.jpg"
            ],
            [
              "title"=> "Main Entrees",
              "image"=> "img/main/entrees.jpg"
            ],
            [
              "title"=> "Lunch Combos",
              "image"=> "img/main/LunchCombos.jpg"
            ],
            [
              "title"=> "Fresh Salads",
              "image"=> "img/main/salads.jpg"
            ],
            [
              "title"=> "Pub Diet",
              "image"=> "img/main/pubDiet.jpg"
            ],
            [
              "title"=> "Kids",
              "image"=> "img/main/kids.jpg"
            ],
            [
              "title"=> "Bar Snacks",
              "image"=> "img/main/apps.jpg"
            ],
            [
              "title"=> "New Handhelds",
              "image"=> "img/main/handHeld.jpg"
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
        Schema::drop('categories');
    }
}
