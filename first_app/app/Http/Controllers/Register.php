<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kullanicilar;

class Register extends Controller
{
    function register(){
       
        return view('register');
    }
    
    function registerPost(Request $request){
        
        $request->validate([
            
            'username'=>'required',
            'email'=>'required',
            'password'=>'required',
            'password2'=>'required',
    
            
        ]);
      
        Kullanicilar::create([
             
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>password_hash($request->password,PASSWORD_DEFAULT),
            'yetki_duzeyi'=>1,
            
        ]);


        return redirect(route('login'))->with('success','Kayit Islemi Basarili');

    }

}