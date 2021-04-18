<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'type'
    ];

    public function carts(){
        return $this->hasMany(Cart::class);
    }

    // public function returnForShop() 
    // {
    //      return $this-> ;
    // }



}
