<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function home()
    {
        if (Auth::id()) {
            $userType = Auth::user()->user_type;

            if ($userType == 'admin') {
                return view('admin.index');
            } else if ($userType == 'user') {
                return redirect()->route('dashboard');
            }
        }


    }
}
