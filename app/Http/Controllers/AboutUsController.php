<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutUsPage;
use App\AboutUsTranslation;
use Session;

class AboutUsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about=AboutUsPage::first();
        return view('pages.aboutus',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $about=AboutUsPage::first();
        $about_translation=AboutUsTranslation::orderBy('id','asc')->get();
        return view('admin.about',compact('about','about_translation'));
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(request()->hasFile('img')){
        $image = request()->file('img');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/images/about');
        $image->move($destinationPath, $filename);
        $about = AboutUsPage::updateOrCreate(['id'=>'1'],['imagine'=>$filename]);
        } 
        foreach($request['content'] as $lang => $content) { 
            $translation = AboutUsTranslation::updateOrCreate(['locale'=>$lang],['content'=>$content,'about_id'=>'1','locale'=>$lang]); 
        }
        Session::flash('message','Informatia a fost salvata cu success');
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
