<?php

namespace App\Http\Controllers;
use App\Carousel;
use App\CarouselTranslation;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index ()
    {
        $carousel=Carousel::all();
        return view('index',compact('carousel'));
    }
    public function about (){
        /* functie pentru baza de data */
    return view('/pages/aboutus' /* ,compact('variabila fara $' ,' alta variabila dac trebuie') */);
    }

    public function portfolio(){
        return view('/pages/portfolio');
    }
    
    public function contact(){
        return view('/pages/contact');
    }
    
    public function order(){
        return view('/pages/order');
    }

    public function calcKcal(){
        return view('/pages/calcKcal');
    }
    public function productinfo()
    {
        return view ('pages.productinfo');
    }

    
}
