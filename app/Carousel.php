<?php

namespace App;
use App\CarouselTranslation;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $fillable=['image'];
    public function langs() {return $this->hasMany(CarouselTranslation::class, 'carousel_id');}

    public function lang() { return $this->hasOne(CarouselTranslation::class, 'carousel_id')->where('locale', app()->getLocale());} 
}
