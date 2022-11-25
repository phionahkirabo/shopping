<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class usersformController extends Controller
{
    function users(){
        return view('usersform');

}

function saveuser(Request $request){
    //return $request->all();
    country::create([
        'full_name'=> $request->country_name,
        'gender'=> $request->country_name,
        'date_of_birth'=> $request->country_name,
        'email'=> $request->country_name,
        'email_verified_at'=> $request->continent_name1Q
        ,
        'password'=> $request->country_name]);
        
   return redirect('/country');
}
}