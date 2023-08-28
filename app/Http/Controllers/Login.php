<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{   
    public function index()
    {
    if($user = Auth::user()) {
        if ($user->level == 'admin') {
            return redirect()->intended('admin');
        } elseif ($user->level == 'siswa') {
            return redirect()->intended('siswa');
            }
        }
    
    return view('login');
    }
}
