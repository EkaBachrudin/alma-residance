<?php

namespace App\Http\Controllers\usr;

use App\Http\Controllers\Controller;
use App\Models\Sop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Response;
use DB;

class SopController extends Controller
{
    public function index (Request $request){
        $search =  $request->search;
        if(!$search){
            $sops = Sop::latest()->paginate(50);
        }
        else{
            $sops = Sop::where(function ($query) use ($search){
                $query->where('sop_title', 'like', '%'.$search.'%');
            })
            ->paginate(50);
        }
        return view('usr.sop', compact('sops'));
    }

    public function detail (Sop $sop){
        return view('usr.sop-detail', compact('sop'));
    }

    public function downloadfile(Sop $sop)
    {
        $filepath = public_path('form/'.$sop->form);
        return Response::download($filepath); 
    }
}
