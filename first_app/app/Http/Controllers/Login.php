<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kullanicilar;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    function login(){

        return view('login');
    }

    function loginPost(Request $request){

        $request->validate([

            'username'=>'required',
            'password'=>'required',
            'yetki_duzeyi'=>'integer',
            
        ]);
    
       $kullanici=$request->only('username','password');

       if(Auth::attempt($kullanici)){
        $user = Auth::user();
        if($user->yetki_duzeyi==1){
            return redirect()->intended(route('loginpage'))->with('success',$user->username);
        } 
        else{
            return redirect()->intended(route('adminpage'))->with('success',$request->username);
        }
        
       }
       else{
        return redirect(route('login'))->with('error','fail');
       }  
    
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login'); 
    }

}