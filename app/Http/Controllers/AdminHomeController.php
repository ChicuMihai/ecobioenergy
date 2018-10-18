<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactInfo;
use Session;

class AdminHomeController extends Controller
{
     public function index()
     {
      return view('admin.index');
     }
     public function contact()
     {
         $info=ContactInfo::first();
         return view('admin.contact',compact('info'));
     }
     public function store(Request $request)
     {
        ContactInfo::updateOrCreate(['id'=>1],['adresa' => request('adress'),
        'telefon' => request('phone'),
        'email' => request('email'),
        'mobil'=>request('mobile')]);
        Session::flash('message','Informatia a fost salvata cu success');
        return redirect()->back();
     }

}
