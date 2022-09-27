<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(){
        return view('adm.unit');
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama_unit' => '',
            'tipe_unit' => '',
            'harga_unit' => '',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'unit/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Unit::create($input);
     
        return redirect('/admin');
    }

    public function edit(Unit $unit){
        return view('adm.unitedit', compact('unit'));
    }

    public function update(Request $request, Unit $unit)
    {
        $request->validate([
            'nama_unit' => '',
            'tipe_unit' => '',
            'harga_unit' => '',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            \File::delete(public_path('unit/'.$unit->image));
            $destinationPath = 'unit/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $unit->update($input);
    
        return redirect('/admin');
    }

    public function delete(Unit $unit){
        \File::delete(public_path('images/'.$unit->image));
        $unit->delete();
        $datas = Unit::latest()->get();
        return view('adm.pages.index', compact('datas'));
    }
}
