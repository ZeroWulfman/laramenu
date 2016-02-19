<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $tbale = 'categories';

    public function subcat() {
        return $this->hasMany(SubCategory::class);
    }
}
