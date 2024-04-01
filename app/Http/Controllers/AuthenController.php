<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenController extends Controller
{
    public function deconnexion()
    {
        Auth::logout();
        return redirect()->route('loginc');
    }
}
