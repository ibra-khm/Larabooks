<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validate\Rule;

class UserController extends Controller
{
    // Show Register/Create
    public function create()
    {
        return view('users.register');
    }

    // Show login form
    public function login()
    {
        return view('users.login');
    }
}
