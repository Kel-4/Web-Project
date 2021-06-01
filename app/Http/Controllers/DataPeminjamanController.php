<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPeminjaman;
Use App\Models\DataBuku;
Use App\Models\DataAnggota;

class DataPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')) {
            $data = DataPeminjaman::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('nama', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('judul', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('tgl_pinjam', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('tgl_jatuh_tempo', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('tgl_kembali', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('status', 'LIKE', '%'.$request->cari.'%')
            ->paginate(5);
        } else {
            $data = DataPeminjaman::paginate(5);
        }
        return view('DataPeminjaman.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataBuku = DataBuku::all();
        $dataAnggota = DataAnggota::all();
        return view('DataPeminjaman.tambah', compact('dataBuku', 'dataAnggota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'judul'=>'required',
            'tgl_pinjam'=>'required',
            'tgl_jatuh_tempo'=>'required',
        ]);

        DataPeminjaman::create([
            'nama' => $request->nama,
            'judul' => $request->judul,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_jatuh_tempo' => $request->tgl_jatuh_tempo,
            'tgl_kembali' => $request->tgl_kembali
        ]);

        return redirect('/DataPeminjaman')->with('success', 'Data Berhasil Ditambahkan!');
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
        $dataBuku = DataBuku::all();
        $dataAnggota = DataAnggota::all();
        $DataPeminjaman = DataPeminjaman::find($id);
        return view('DataPeminjaman.ubah', compact('DataPeminjaman', 'dataBuku', 'dataAnggota'));
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
        $DataPeminjaman->nama = $request->nama;
        $DataPeminjaman->judul = $request->judul;
        $DataPeminjaman->tgl_pinjam = $request->tgl_pinjam;
        $DataPeminjaman->tgl_jatuh_tempo = $request->tgl_jatuh_tempo;
        $DataPeminjaman->tgl_kembali = $request->tgl_kembali;
        $DataPeminjaman->save();
        return redirect('/DataPeminjaman')->with('success', 'Data Berhasil Diubah!');
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
        return redirect('/DataPeminjaman')->with('success', 'Data Telah Dihapus!');
    }
}
