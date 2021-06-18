<?php

namespace App\Http\Controllers;

use App\Imports\DataImport;
use App\Models\Data;
use App\Models\PPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class DataController extends Controller
{
    public function index()
    {
    
        $data = DB::table('data')->join('ppi_table','data.p_aktivasi_node_id','=','ppi_table.spa')->paginate(20);

        return view('tampil', ['data' => $data]);
    }
    public function import(Request $req)
    {
        $this->validate($req, ['file' => 'required']);
        $path = $req->file;
        Excel::import(new DataImport, $path);
        return redirect('/data');
    }
    public function detail($id)
    {
        $data = Data::where('service_id', '=', $id)->get();


        return view('detail', ['data' => $data]);
    }
    public function hapus($id)
    {
        $dataall = Data::where('service_id', '=', $id)->get();
        $data = Data::where('service_id', '=', $id)->delete();
        $hapusppi=PPI::where('spa','=',$dataall[0]->p_aktivasi_node_id)->delete();
        if ($data) {
            if($hapusppi){
                return redirect('/data')->with('sukses', 'Data Berhasil Dihapus');
            }
        }
    }
    public function updateView($id)
    {
        $data = Data::where('service_id', '=', $id)->get();
        return view('formupdate', ['data' => $data]);
    }
    public function update(Request $req, $id)
    {
        $this->validate($req,[
            'c_name'=> 'required',
            'bandwidth' => 'required',
            'status' => 'required',
            'service_id' => 'required'
        ]);
        $data = Data::where('id', '=', $id)->update([
            'c_name' => $req->c_name,
            'bandwidth' => $req->bandwidth,
            'status' => $req->status,
            'service_id' => $req->service_id
        ]);
        if ($data) {
            return redirect('/data')->with('sukses', 'Data Berhasil DiUpdate');
        }
    }
    public function cari(Request $req){
        $this->validate($req,[
            'cari'=>'required'
        ]);
        $datacari=Data::where('c_name','like','%'.$req->cari.'%')
        ->orWhere('p_aktivasi_node_id','like','%'.$req->cari.'%')
        ->orWhere('service_id','like','%'.$req->cari.'%')
        ->get();
        
        if (!$datacari->isEmpty()){
            return view('caridata.cari',['data'=>$datacari]);
        }else{
            return view('caridata.cari',['data'=>'kosong']);
        }
    }
}
