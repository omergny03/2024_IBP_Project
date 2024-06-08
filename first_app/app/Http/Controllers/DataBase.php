<?php

namespace App\Http\Controllers;

use App\Models\Kullanicilar;
use Illuminate\Http\Request;

class DataBase extends Controller
{
    public function veriAl()
    {
        // Veritabanından tüm verileri al
        $data = Kullanicilar::all();

        // View'a verileri gönder
        return view('dbgüncelle.dataBaseKullanici', ['veri' => $data]);
    }
    
    public function edit($id)
    {
        $user = Kullanicilar::findOrFail($id);
        return view('dbgüncelle.dataBaseguncelle', compact('user'));
    }
    
    public function update(Request $request, $id)
    {
        $user = Kullanicilar::findOrFail($id);

        // Validation
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Kullanıcı bilgilerini güncelle
        $user->username = $request->input('username');
        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return redirect()->route('adminpage')->with('success2', 'Kullanıcı başarıyla güncellendi.');
    }
    
    public function destroy($id)
    {
        $user = Kullanicilar::findOrFail($id);
        $user->delete();

        return redirect()->route('adminpage')->with('success2', 'Kullanıcı başarıyla silindi.');
    }
}