<?php

namespace App;

use App\Dish;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    protected $fillable = [
        'totPrice'
    ];

    public function dishes() {

        return $this -> belongsToMany(Dish::class);
    }
}
