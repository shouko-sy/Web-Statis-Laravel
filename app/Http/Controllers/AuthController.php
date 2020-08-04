<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    // public function welcome(){
    //     return view('welcome');
    // }

    public function welcome_post(Request $request){
        return view('welcome', ['nama_awal'=>$request['nama-awal'], 'nama_akhir'=>$request['nama-akhir']]);
    }
}
