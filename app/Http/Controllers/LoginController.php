<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function loginProses(Request $request)
    {
        $exist = User::where('username', $request->username)->first();

        if ($exist) {
            if (Hash::check($request->password, $exist->password)) {
                $request->session()->put('username',$exist->username);
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()->with('error', 'Password Atau Username Salah');
            }
        } else {
            return redirect()->back()->with('error', 'User Tidak Ditemukan');
        }
    }

    public function dashboard(){
        if(session()->has('username')){
            return view('dashboard');
        }else{
            return redirect()->route('login')->with('error', 'Silahkan Login Terlebih Dahulu');
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }

}
