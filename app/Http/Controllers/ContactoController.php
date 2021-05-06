<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index(){
        return view('contacto');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'body' => 'required'
        ]);

        $correo = new ContactoMailer($request->all());
        Mail::to('pina.rossette@jumase.com.mx')->send($correo);
        return redirect()->route('contacto.index')->with('info', 'Mensaje enviado');
    }
}
