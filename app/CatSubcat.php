<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatSubcat extends Model
{
    protected $table = 'catsubcats';

    public function items() {
        return $this->hasMany(MenuItem::class);
    }
}
