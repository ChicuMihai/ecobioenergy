<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUsTranslation extends Model
{
    protected $fillable = ['content','locale','about_id'];
   	public $timestamps = false;
}
