<?php

namespace App\Http\Controllers;
use App\Models\pelajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    public function index (Request $request){ 
         $pelajar = pelajar::all();

        return view('pelajar', 'pelajar ', $pelajar); 

    }
    public function create (){
        return view('pelajar_tambah');

}
public function store  (Request $request){
    
    pelajar ::create {(
        'nbi' =>$request->nbi,
        nama_pljr=>$request->nama_pljr,
    )};
    return redirect('pelajar');

}

}