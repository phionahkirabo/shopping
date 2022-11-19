<?php

namespace App\Http\Controllers\pages;
use App\Models\country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class pagesController extends Controller
{
    
    function countries(){
        return view('secondform');
    
}

function saveCountry(Request $request){
    //return $request->all();
    country::create([
    'name'=> $request->country_name,
    'continent_name'=> $request->continent_name]);
    return redirect('/country'); // this is view file; 
   
    
    
}
}
