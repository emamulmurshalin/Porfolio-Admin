<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerView()
    {
        return view('backend.auth.register');
    }
    public function loginView()
    {
        return view('backend.auth.login');
    }
}
