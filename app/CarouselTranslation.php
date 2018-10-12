<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarouselTranslation extends Model
{
    protected $fillable = ['locale','content','carousel_id'];
    public $timestamps = false;
}
