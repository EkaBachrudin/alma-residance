<?php

namespace App\Http\Controllers\usr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('usr.home');
    }

    public function about(){
        return view('usr.about');
    }
}
