<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Home2Controller extends Controller
{
    public function index()
    {
        $users = Auth::guard('admin')->user();
        return view('welcome2', ['user' => $users]);
        
    }
}
