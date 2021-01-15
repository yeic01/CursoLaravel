<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //metodo invoke administra una sola ruta
    public function __invoke(){
        return view("home");
    }
    
}
