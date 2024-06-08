<?php

use App\Http\Controllers\Kitap;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\Login;
use App\Http\Controllers\DataBase;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register',[Register::class,'register'])->name('register');
Route::post('/register-add',[Register::class,'registerPost'])->name('registerpost');

Route::get('/login',[Login::class,'login'])->name('login');
Route::post('/login-post',[Login::class,'loginPost'])->name('loginpost');
Route::get('/logout', [Login::class, 'logout'])->name('logout');


// Route::middleware(['check'])->group(function () {
//     Route::get('/loginpage',function(){
//         return view('loginPage');
//     })->name('loginpage');
// });

Route::get('/loginpage',function(){
            return view('loginPage');
         })->name('loginpage');

Route::get('/adminpage',function(){
    return view('adminPage2');
})->name('adminpage');

Route::get('/kitap-formu',[Kitap::class,'kitapForm'])->name('kitapformu');
Route::post('/kitap-ekle',[Kitap::class,'kitapEkle'])->name('kitapekle');
Route::get('/kitap-tablosu',[Kitap::class,'kitapVeriAl'])->name('kitapverisi');

Route::get('/kullanicidatasi',[Database::class,'veriAl'])->name('verial');
Route::get('/admin/users/{id}/edit', [DataBase::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/{id}', [DataBase::class, 'update'])->name('admin.users.update');
Route::delete('/admin/users/{id}', [DataBase::class, 'destroy'])->name('admin.users.destroy');