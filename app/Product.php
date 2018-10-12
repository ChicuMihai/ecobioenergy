<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductTranslation;

class Product extends Model
{
    protected $fillable=['image','price'];
    public function langs() {return $this->hasMany(ProductTranslation::class, 'product_id');}

    public function lang() { return $this->hasOne(ProductTranslation::class, 'product_id')->where('locale', app()->getLocale());} 
}
