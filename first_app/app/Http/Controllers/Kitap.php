<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kitaplar;

class Kitap extends Controller
{
    function kitapForm(){
        return view('kitap.kitapEkle');
    }

    function kitapEkle(Request $request){
        $request->validate([

            'kitapismi'=>'required',
            'sayfasayisi'=>'required',
            'kitapturu'=>'required',
        ]);
         
        Kitaplar::create([

            'kitap_ismi'=>$request->kitapismi,
            'sayfa_sayisi'=>$request->sayfasayisi,
            'kitap_turu'=>$request->kitapturu,
        ]);
        return redirect(route('kitapformu'))->with('success','Kayit Islemi Basarili');
    }
    
    public function kitapVeriAl()
    {
        // Veritabanından tüm verileri al
        $data = Kitaplar::all();

        // View'a verileri gönder
        return view('kitap.dataBaseKitap', ['veri' => $data]);
    }


}