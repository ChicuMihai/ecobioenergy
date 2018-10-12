<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactInfo;

class AdminHomeController extends Controller
{
     public function index()
     {
      return view('admin.index');
     }
     public function contact()
     {
         return view('admin.contact');
     }
     public function store(Request $request)
     {
        ContactInfo::firstOrCreate([
            'adresa' => request('adress'),
            'telefon' => request('phone'),
            'email' => request('emai'),
            'mobil'=>request('mobile')
        ]);
        Session::flash('message','Informatia a fost salvata cu success');
        return redirect()->back();
     }

}
