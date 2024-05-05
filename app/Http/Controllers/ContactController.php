<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactView(){
        $title = "Studio Legale";
        return view('/contattaci', compact('title'));
    }
    public function saveContact(Request $request){
        $contact=$request->all();
        Mail::to('tizio@mail.mail')->send(new ContactMail($contact));
        return redirect()->back()->with('message', 'Controlla la tua mail, ti abbiamo inviato un messaggio!');
    }
}
