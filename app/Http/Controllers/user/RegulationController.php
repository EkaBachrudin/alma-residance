<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Regulation;
use Illuminate\Http\Request;

class RegulationController extends Controller
{
    public function index (Request $request){
        $search =  $request->search;
        if(!$search){
            $regulations = Regulation::latest()->paginate(50);
        }
        else{
            $regulations = Regulation::where(function ($query) use ($search){
                $query->where('title', 'like', '%'.$search.'%');
            })
            ->paginate(50);
        }
        return view('usr.regulation', compact('regulations'));
    }

    public function detail (Regulation $regulation){
        return view('usr.regulation-detail', compact('regulation'));
    }
}
