<?php

namespace App\Http\Controllers;

use App\Models\Consumen;
use Illuminate\Http\Request;

class ConsumenController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'tlp' => 'required',
            'pesan' => 'required',
        ]);
  
        $input = $request->all();
        $input['status'] = "calon";
        Consumen::create($input);
        return redirect('/');
    }
}
