<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $address = Address::find(1);
        // $user = User::find(1);
        // dd($user->address);
        dd($address->user);
    }
}
