<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class berandaUserController extends Controller
{
    public function berandaUser()
    {
        return view('halamanUser.layout.master');
    }
}
