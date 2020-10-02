<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use Illuminate\Support\Facades\Mail;
//use Mail;

class ContactUsController extends Controller
{
    public function index(){
        $pages = Page::All();

        return view('website.contact', ['pages' => $pages]);
    }
    public function sendMessage(Request $request){
        $pages = Page::All();
        $input = $request->all();
        
        $validatedData = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
        ]);

        Mail::send('mails.contactus', ['nameinput' => $input['name'], 'messageinput' => $input['message']], function($message){
            $message->from('wahyutirta123@gmail.com', 'Test Website');

            $message->to('wahyutirta12345@gmail.com');
        });

        return view('website.contact', ['pages' => $pages])->with('successMessage', "thank you, message has been sent");

    }
}
