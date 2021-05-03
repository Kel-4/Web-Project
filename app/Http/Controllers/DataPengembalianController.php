<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPengembalian;

class DataPengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')) {
            $data = DataPengembalian::where('id_peminjaman', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('nama', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('tgl_kembali', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('judul_buku', 'LIKE', '%'.$request->cari.'%')
            ->paginate(5);
        } else {
            $data = DataPengembalian::paginate(5);
        }
        return view('DataPengembalian.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function denda(Request $request)
    {
        if($request->has('cari')) {
            $data = DataPengembalian::where('id_peminjaman', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('nama', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('tgl_jatuh_tempo', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('tgl_kembali', 'LIKE', '%'.$request->cari.'%')
            ->paginate(5);
        } else {
            $data = DataPengembalian::paginate(5);
        }
        return view('DataPengembalian.denda', ['data'=>$data]);
    }

    public function status($id)
    {
        $data = DataPengembalian::find($id);
        if ($data->status == 0) {
            $data->status = 1;
            $data->save();
            return redirect('/DataPengembalian')->with("Buku Telah Dikembalikan", "success");
        } else {
            $data->status = 0;
            $data->save();
            return redirect('/DataPengembalian')->with('warning', 'Buku Belum Dikembalikan');
        }
        

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DataPengembalian::create([
            'id_peminjaman' => $request->id_peminjaman,
            'nama' => $request->nama,
            'tgl_kembali' => $request->tgl_kembali,
            'judul_buku' => $request->judul_buku
        ]);

        return redirect('/DataPengembalian');
    }

 


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
    }

    
    public function update(Request $request, $id)
    {
        $DataPengembalian = DataPeminjaman::find($id);
        $DataPengembalian->id_peminjaman = $request->id_peminjaman;
        $DataPengembalian->nama = $request->nama;
        $DataPengembalian->tgl_kembali = $request->tgl_kembali;
        $DataPeminjaman->save();
        return redirect('/DataPengembalian');
    }

}
