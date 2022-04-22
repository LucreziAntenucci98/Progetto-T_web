<?php

namespace App\Models\Resources;
use Illuminate\Database\Eloquent\Model;

class Prodotto extends Model{
   protected $table = 'prodotto';
    protected $primaryKey = 'prodId';
    protected $guarded=['prodId'];
    public $timestamps = false;

    public function getPrice($withDiscount = false) {
        $price = $this->price;
        if (true == ($this->discounted) && true == $withDiscount) {
            $discount = ($price * $this->discountPerc) / 100;
            $price = round($price - $discount, 2);
        }
        return $price;
    }

    // Realazione One-To-One con Category
    public function prodCat() {
        return $this->hasOne(Categoria::class, 'catId', 'catId');
    }

} 


