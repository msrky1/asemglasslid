<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MailNotify;

class MailController extends Controller
{
   public function index(Request $request) {


    $data = [

        'subject' => 'Gelen Mail' ,
        'body' => $request->body
    ];

 try {
     
    Mail::to('trglasslidmail@gmail.com')->send(new MailNotify($data));
    return response()->json(['Your Email Has Been Successfully Sent']);

 }catch (Exeption $th) {

    return response()->json(['Sorry upss!']);

    
 }
   }
}
