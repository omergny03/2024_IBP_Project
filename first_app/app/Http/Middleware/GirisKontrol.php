<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class GirisKontrol
{
  
    public function handle(Request $request, Closure $next): Response
    {
         
        $username = $request->input('username');
        $password = $request->input('password');

        // Kullanıcıyı kimlik doğrulaması yap
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            // Kimlik doğrulama başarılı
            return $next($request);
        }

        // Kimlik doğrulama başarısız
        return redirect('login')->withErrors(['message' => 'Yanlış kullanıcı adı veya parola']);
    }
   


    
} 