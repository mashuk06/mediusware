<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'sku', 'description'
    ];

    public static function saveProduct($data){
        $product = new Product();
        $product->title = $data['title'];
        $product->sku   = $data['sku'];
        $product->description = $data['description'];
        $product->save();
    }

    public function productVariants(){
        return $this->belongsToMany(\App\Models\ProductVariant);
    }
}
