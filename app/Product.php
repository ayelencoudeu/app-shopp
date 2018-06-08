<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   public function category()
   {
   		return $this->belongsto(Category::class);
   }

   public function images()
   {
   		return $this->hasMany(ProductImage::class);
   }
}
