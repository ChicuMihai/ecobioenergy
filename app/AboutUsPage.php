<?php

namespace App;
use App\AboutUsTranslation;
use Illuminate\Database\Eloquent\Model;

class AboutUsPage extends Model
{
   protected $fillable=['imagine'];
   public function langs() {return $this->hasMany(AboutUsTranslation::class, 'about_id');}

   public function lang() { return $this->hasOne(AboutUsTranslation::class, 'about_id')->where('locale', app()->getLocale());} 
}
