<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function register (){
    return view ('/register');
}
  public function welcome (Request $Request){
    // dd($Request->all());
    $first_name = $Request["first_name"];
    $last_name = $Request["last_name"];
    return view ('welcome',["nama1"=>$first_name,"nama2"=>$last_name]);
}
}
