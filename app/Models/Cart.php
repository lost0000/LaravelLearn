<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'price',
        'title'

    ];

    public function user()
    {
        return $this -> belongsTo(User::class);
    }


    public function cartItems(){
        return $this->hasMany(Product::class);
    }

    public function cartOwner(User $user)
    {
        return $this->cart->contains('user_id', $user->id); //Collection method
    }

}
