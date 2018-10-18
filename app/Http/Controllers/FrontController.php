<?php

namespace App\Http\Controllers;
use App\Carousel;
use App\CarouselTranslation;
use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index ()
    {
        $carousel=Carousel::all();
        $products=Product::latest()->paginate(3);
        return view('index',compact('carousel','products'));
    }
    public function about (){
        /* functie pentru baza de data */
    return view('/pages/aboutus' /* ,compact('variabila fara $' ,' alta variabila dac trebuie') */);
    }

    public function portfolio(){
        $products=Product::get()->all();
        return view('/pages/portfolio',compact('products'));
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
    public function productinfo($id)
    {
        $product=Product::find($id);
        return view ('pages.product',compact('product'));
    }

    
}
