<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AsemController extends Controller
{
     
    public function index($dil) {

         App::setLocale($dil);
        return view('welcome');
    }
}
