<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBuku;

class DataBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = DataBuku::all();
        return view('DataBuku.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DataBuku.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('gambar');
        $filename = $file->getClientOriginalName(); 
        $dir = 'data_file';
        $file ->move($dir, $filename);

        DataBuku::create([
            'id_buku' => $request->id_buku,
            'judul' => $request->judul,
            'penerbit' => $request->penerbit,
            'rak' => $request->rak,
            'gambar' => $request->gambar
        ]);

        return redirect('/daftarbuku');
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
        $DataBuku = DataBuku::find($id);
        return view('DataBuku.ubah', ['DataBuku' => $DataBuku]);
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
        $DataBuku = DataBuku::find($id);
        $DataBuku->id_buku = $request->id_buku;
        $DataBuku->judul = $request->judul;
        $DataBuku->penerbit = $request->penerbit;
        $DataBuku->rak = $request->rak;
        $DataBuku->gambar = $request->gambar;
        $DataBuku->save();
        return redirect('/daftarbuku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DataBuku = Databuku::find($id);
        $DataBuku->delete();
        return redirect('/daftarbuku');
    }
}
