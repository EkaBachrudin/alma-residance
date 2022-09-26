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

    public function detailUnit(){
        return view('usr.detail-unit');
    }

    public function detailUnit42(){
        return view('usr.detail-unit42');
    }
}
