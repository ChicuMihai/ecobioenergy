<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Product;
use App\ProductTranslation;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::get()->all();
        return view('admin.products.index',compact('products'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'img' => 'required|image',
            'description.*'=>'required',
            'title.*'=>'required',
            'price'=>'required'
            
        ]);
        if($validator->fails()){
        return redirect()->back()->withErrors($validator);
        }
        else
       $image = request()->file('img');
       $filename = time() . '.' . $image->getClientOriginalExtension();
       $destinationPath = public_path('/products');
       $image->move($destinationPath, $filename);
       $product=new Product;
       $product->image=$filename;
       $product->price=request('price');
       $product->save();

        foreach($request['description'] as $lang => $description) { 
            $translation = new ProductTranslation(); 
            $translation->product_id = $product->id; 
            $translation->description = $description; 
            $translation->locale = $lang;
            $translation->title=$request['title'][$lang];
            $translation->save();
            
        }
        Session::flash('success','Produsul a fost adaugat cu success');
    
        return redirect()->back();
    


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
