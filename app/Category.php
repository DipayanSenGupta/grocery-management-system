<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name','aisle'
    ];
    public function items(){
        return $this->hasMany('App\Item');
    }

}
