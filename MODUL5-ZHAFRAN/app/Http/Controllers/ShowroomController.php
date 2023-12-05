<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function index(){
        $users = Showroom::all();

        return view('showroom.index', compact('showroom'));
    }
    
    public function create() {
        return view('showroom.create');
    }

    public function store(Request $request) {
        $data = $request->all();

        Showroom::create([
            'nama'=>$data['nama'],
            'merk_mobil'=>$data['brand'],
            'warna_mobil'=>$data['warna'],
            'tipe_mobil'=>$data['tipe'],
            'harga_mobil'=>$data['harga'],
        ]);

        return redirect(route('showroom.index'));
    }
}




