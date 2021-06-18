<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Odp;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class MapsController extends Controller
{
    public function index(){
        $koor=Odp::get();

        return view('maps',['data'=>$koor]);
    }
    public function proses(Request $request){
        $long=$request->long;
        $lat=$request->lati;
        $maps="https://maps.google.com/maps?q={$long},{$lat}&output=embed";
        return view('hasilmaps',['maps'=>$maps]);
    }
    public function tambahKoor(Request $req){
        $this->validate($req,[
            'nama_odp'=>'required',
            'longi'=>'required',
            'lat'=>'required'
        ]);
        
        $tambah=Odp::create([
            'nama'=>$req->nama_odp,
            'longi'=>$req->longi,
            'lat'=>$req->lat
        ]);
        if($tambah){
            return redirect('/maps')->with('sukses',"Data Berhasil Ditambahkan");
        }
    }
}
