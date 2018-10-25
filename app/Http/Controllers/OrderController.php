<?php
namespace App\Http\Controllers;
use App\Order;
use DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use  App\Mail\SendMailable;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['index']]);
    }

    public function index()
    {
        

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.order');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'status'=>'required',
            'nume'=>'required',
            'prenume'=>'required',
            'telefon'=>'required',
            
            'raion'=>'required',
            'localitate'=>'required',
            'produs'=>'required', 
            'cantitate'=>'required',  
            'detalii'=>'required'
        ]);
        //Create post
            $empty ='';
            $empty =$request->input('email');
            $order = new Order;
            $order->status=$request->input('status');
            $order->nume=$request->input('nume');
            $order->prenume=$request->input('prenume');
            $order->telefon=$request->input('telefon');
            $order->email=$empty;
            $order->raion=$request->input('raion');
            $order->localitate=$request->input('localitate');
            $order->produs=$request->input('produs');
            $order->cantitate=$request->input('cantitate');
            $order->detalii=$request->input('detalii');
            $order->save();
          
            $nume=$order->nume;
            $prenume=$order->prenume;
            $telefon=$order->telefon;
            
            Mail::to('andreigarbatovschi@gmail.com', 'Administrator Scoala')->send(new SendMailable( $nume,$prenume));
           
            Session::flash('success', 'Caomanda a fost facută cu success');
            return redirect('/order')->with('Success','Post created');
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