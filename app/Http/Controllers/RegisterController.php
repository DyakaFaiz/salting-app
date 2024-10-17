<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function registerProses(Request $request){
        $data = [
            'name' => $request->username,
            'password' => $request->password,
        ];

        $save = User::create($data);

        if($save){
            return route('dashboard');
        }else{
            return redirect()->back();
        }

    }
}
