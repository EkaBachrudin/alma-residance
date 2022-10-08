<?php

namespace App\Http\Controllers\usr;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $news = News::latest()->get();
        return view('usr.dashboard', compact('news'));
    }
}
