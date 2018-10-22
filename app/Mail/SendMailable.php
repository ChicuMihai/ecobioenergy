<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\OrderController;


class SendMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $status;
    public $nume;
    public $prenume;
    public $telefon;
    public $email;
    public $raion;
    public $localitate;
    public $produs;
    public $cantitate;
    public $detalii;




    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nume, $prenume)
    {
       
        $this->nume=$nume;
        $this->prenume=$prenume;
       
        

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.name');
    }
}