<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        // dd($request->all());
        // $data = User::where('email',$request->email)->firstOrFail();
        // if ($data) {
        //      if (\Hash::check($request->password,$data->password)) {
        //         session(['berhasil_login'=> true]);
        //         return redirect('/daftarbuku');
               
        //     }
        // }
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            return redirect('/daftarbuku');
        }
           return redirect('/')->with('message','Email atau Password Salah');
        
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
