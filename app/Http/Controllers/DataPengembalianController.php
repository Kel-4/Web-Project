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
    public function index()
    {
        $data = DataPengembalian::all();
        return view('DataPengembalian.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

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
