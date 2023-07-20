<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
  
   

   function index(){   
       
    $sess_id=session('sess_id');
    if(!isset($sess_id))return redirect('/');   

    return view("layout.erp.dashboard");

   }
}
