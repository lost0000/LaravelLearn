<?php

namespace App\Models;

use App\Models\CartItem;
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
        return $this->hasMany(CartItem::class);
    }

    // public function returnForShop() 
    // {
    //      return $this-> ;
    // }



}
