<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Carousel;
use App\CarouselTranslation;
use Session;


class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides=Carousel::get()->all();
        return view('admin.carousel.index',compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.carousel.create');
          
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
            'img' => 'required|image|dimensions:min_width=1900,min_height=700',
            'content.*'=>'required'
            
        ]);
        if($validator->fails()){
        Session::flash('message', 'Imaginea trebuie sa fie 1900*700px');  
        return redirect()->back()->withErrors($validator);
        }
        else
       $image = request()->file('img');
       $filename = time() . '.' . $image->getClientOriginalExtension();
       $destinationPath = public_path('/slides');
       $image->move($destinationPath, $filename);
       $carousel=new Carousel;
       $carousel->image=$filename;
       $carousel->save();

        foreach($request['content'] as $lang => $content) { 
            $translation = new CarouselTranslation(); 
            $translation->carousel_id = $carousel->id; 
            $translation->content = $content; 
            $translation->locale = $lang; 
            $translation->save();

        }
    
        Session::flash('success','Slide-ul a fost adaugat cu success');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carousel=Carousel::find($id);
        $carousel_translation=CarouselTranslation::where('carousel_id',$id)->orderBy('id','asc')->get();
        return view('admin.carousel.edit',compact('carousel','carousel_translation'));
        
        
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
        
        $validator = Validator::make($request->all(), [
            'img' => 'required|image|dimensions:min_width=1900,min_height=700',
            'content.*'=>'required',
            
        ]);
        if($validator->fails()){
            Session::flash('message', 'Imaginea trebuie sa fie 1900*700px');  
            return redirect()->back()->withErrors($validator);
            }
        else 
        
        $carousel=Carousel::findOrFail($id);
        foreach($request['content'] as $lang => $content) {
            $translation=CarouselTranslation::find($lang);
            $translation->content=$content;
            $translation->update();
         }

        $path = public_path('/slides' . '/' . $carousel->image);
        \File::delete($path);
        $image = request()->file('img');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/slides');
        $image->move($destinationPath, $filename);
        $carousel->image=$filename;
        $carousel->update();
         Session::flash('message', 'Slide actualizat cu success');  
         return redirect()->back();
        }
        
    


    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel=Carousel::find($id);
        $carousel_translation=CarouselTranslation::where('carousel_id',$id);
        $carousel_translation->delete();
        $path = public_path('/slides' . '/' . $carousel->image);
        \File::delete($path);
        $carousel->delete();
        return back();
       

    }
}
