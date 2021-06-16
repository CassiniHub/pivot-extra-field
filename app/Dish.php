<?php

namespace App;

use App\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dish extends Model
{
    protected $fillable = [
        'name',
        'price'
    ];

    public function orders() {

        return $this -> belongsToMany(Order::class);
    }
}
