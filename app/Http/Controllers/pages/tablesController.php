<?php

namespace App\Http\Controllers\pages;
use App\Models\country;
use App\Http\Controllers\pages\tablesController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tablesController extends Controller
{
    function table(){  
         //return country::all();
        //return view('country'); 
        $countryy = country::all();
return view("country", compact("countryy"));//compact is used to take data from controller to the view.

    //another way to take data from controller to the view.
   // 'date' => $countryy
    }
   
}
