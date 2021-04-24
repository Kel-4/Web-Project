<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pengunjung = DB::table('data_pengunjung')->get();
        //return view('DataPengunjung.index', ['pengunjung' => $pengunjung]);

        $pengunjung = Pengunjung::all();
        return view('DataPengunjung.index', ['pengunjung'=>$pengunjung]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('DataPengunjung.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_pengunjung' => 'required',
            'nama' => 'required',
            'tanggal_terdaftar' => 'required',
            'kontak' => 'required',
            'alamat' => 'required',
        ]);

        Pengunjung::create([
            'id_pengunjung' => $request->id_pengunjung,
            'nama' => $request->nama,
            'tanggal_terdaftar' => $request->tanggal_terdaftar,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat
        ]);

        return redirect('/DataPengunjung')->with('success', 'Data Berhasil Ditambahkan!'); 
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
        //
        $pengunjung = Pengunjung::find($id);
        return view('DataPengunjung.ubah', ['pengunjung' => $pengunjung]);
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
        //
        $pengunjung = Pengunjung::find($id);
        $pengunjung->id_pengunjung = $request->id_pengunjung;
        $pengunjung->nama = $request->nama;
        $pengunjung->tanggal_terdaftar = $request->tanggal_terdaftar;
        $pengunjung->kontak = $request->kontak;
        $pengunjung->alamat = $request->alamat;
        $pengunjung->save();
        return redirect('/DataPengunjung')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pengunjung = Pengunjung::find($id);
        $pengunjung->delete();
        return redirect('/DataPengunjung')->with('success', 'Data Telah Dihapus!');
    }
}
