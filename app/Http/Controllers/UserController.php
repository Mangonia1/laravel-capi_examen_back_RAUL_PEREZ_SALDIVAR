<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_domicilios;
use App\Models\User;

class UserController extends Controller
{
    public function UsersDireccion()
    {
        $obj = User::all();

        
    }
}
