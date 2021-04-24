<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPeminjaman;

class DataPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DataPeminjaman::all();
        return view('DataPeminjaman.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DataPeminjaman.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DataPeminjaman::create([
            'id_peminjaman' => $request->id_peminjaman,
            'nama' => $request->nama,
            'judul_buku' => $request->judul_buku,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_jatuh_tempo' => $request->tgl_jatuh_tempo,
            'tgl_kembali' => $request->tgl_kembali
        ]);

        return redirect('/DataPeminjaman');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $DataPeminjaman = DataPeminjaman::find($id);
        return view('DataPeminjaman.ubah', ['DataPeminjaman' => $DataPeminjaman]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $DataPeminjaman = DataPeminjaman::find($id);
        $DataPeminjaman->id_peminjaman = $request->id_peminjaman;
        $DataPeminjaman->nama = $request->nama;
        $DataPeminjaman->tgl_pinjam = $request->tgl_pinjam;
        $DataPeminjaman->tgl_jatuh_tempo = $request->tgl_jatuh_tempo;
        $DataPeminjaman->tgl_kembali = $request->tgl_kembali;
        $DataPeminjaman->save();
        return redirect('/DataPeminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DataPeminjaman = DataPeminjaman::find($id);
        $DataPeminjaman->delete();
        return redirect('/DataPeminjaman');
    }
}
