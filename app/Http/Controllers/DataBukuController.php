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
    public function guest(Request $request)
    {   
        if($request->has('cari')) {
            $data = DataBuku::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('judul', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('penerbit', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('lokasi', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('status_buku', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('bahasa', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('kategori', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('tahun', 'LIKE', '%'.$request->cari.'%')
            ->paginate(8);
        } else {
            $data = DataBuku::paginate(6);
        }
        return view('DataBuku.guest',['data'=>$data]);
    }

    public function index(Request $request)
    {
        if($request->has('cari')) {
            $data = DataBuku::where('judul', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('penerbit', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('lokasi', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('status_buku', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('bahasa', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('kategori', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('tahun', 'LIKE', '%'.$request->cari.'%')
            ->paginate(8);
        } else {
            $data = DataBuku::paginate(5);
        }
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
        $request->validate([
            'judul'=>'required',
            'penerbit'=>'required',
            'lokasi'=>'required|unique:data_buku',
            'subjek'=>'required',
            'kategori'=>'required',
            'keterangan'=>'required',
            'tahun'=>'required',
            'bahasa'=>'required',
            'jumlah_buku'=>'required|integer',

        ]);

        if ($request->file('gambar')==NULL) {
            DataBuku::create([
                'judul' => $request->judul,
                'penerbit' => $request->penerbit,
                'subjek' => $request->subjek,
                'kategori' => $request->kategori,
                'bahasa' => $request->bahasa,
                'keterangan' => $request->keterangan,
                'lokasi' => $request->lokasi,
                'tahun' => $request->tahun,
                'jumlah_buku' => $request->jumlah_buku,
                'deskripsi' => $request->deskripsi,
                'gambar' => $request->gambar
            ]);
        } else {
            $judul = $request->judul;
            $penerbit = $request->penerbit;
            $subjek = $request->subjek;
            $kategori = $request->kategori;
            $bahasa = $request->bahasa;
            $keterangan = $request->keterangan;
            $jumlah_buku = $request->jumlah_buku;
            $lokasi = $request->lokasi;
            $tahun = $request->tahun;
            $deskripsi = $request->deskripsi;
            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('gambar'),$NamaGambar);

            $DataBuku = new DataBuku();
            $DataBuku->judul = $judul;
            $DataBuku->penerbit = $penerbit;
            $DataBuku->subjek = $subjek;
            $DataBuku->kategori = $kategori;
            $DataBuku->bahasa = $bahasa;
            $DataBuku->keterangan = $keterangan;
            $DataBuku->jumlah_buku = $jumlah_buku;
            $DataBuku->lokasi = $lokasi;
            $DataBuku->tahun = $tahun;
            $DataBuku->deskripsi = $deskripsi;
            $DataBuku->gambar = $NamaGambar;
            $DataBuku->save();
        }
        

        return redirect('/daftarbuku')->with('success', 'Data Berhasil Ditambahkan!');
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
        // 
       
        
        if ($request->file('gambar')==NULL) {
            $DataBuku = DataBuku::find($id);
            $DataBuku->id = $request->id;
            $DataBuku->judul = $request->judul;
            $DataBuku->tahun = $request->tahun;
            $DataBuku->penerbit = $request->penerbit;
            $DataBuku->subjek = $request->subjek;
            $DataBuku->kategori = $request->kategori;
            $DataBuku->bahasa = $request->bahasa;
            $DataBuku->keterangan = $request->keterangan;
            $DataBuku->lokasi = $request->lokasi;
            $DataBuku->status_buku = $request->status_buku;
            $DataBuku->jumlah_buku = $request->jumlah_buku;
            $DataBuku->deskripsi = $request->deskripsi;
            $gambar = $request->gambar;

            $DataBuku->save();
            return redirect('/daftarbuku')->with('success', 'Data Berhasil Diubah!');

        } else {
            $gambar = $request->file('gambar');
            $NamaGambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('gambar'), $NamaGambar);
    
            $id = $request->id;
            $judul = $request->judul;
            $tahun = $request->tahun;
            $penerbit = $request->penerbit;
            $subjek = $request->subjek;
            $kategori = $request->kategori;
            $bahasa = $request->bahasa;
            $keterangan = $request->keterangan;
            $lokasi = $request->lokasi;
            $status_buku = $request->status_buku;
            $jumlah_buku = $request->jumlah_buku;
            $deskripsi = $request->deskripsi;
    
            $DataBuku = DataBuku::find($id);
            $DataBuku->id = $request->id;
            $DataBuku->judul = $request->judul;
            $DataBuku->tahun = $request->tahun;
            $DataBuku->penerbit = $request->penerbit;
            $DataBuku->subjek = $request->subjek;
            $DataBuku->kategori = $request->kategori;
            $DataBuku->bahasa = $request->bahasa;
            $DataBuku->keterangan = $request->keterangan;
            $DataBuku->lokasi = $request->lokasi;
            $DataBuku->status_buku = $request->status_buku;
            $DataBuku->jumlah_buku = $request->jumlah_buku;
            $DataBuku->deskripsi = $request->deskripsi;
            $DataBuku->gambar = $NamaGambar;
    
            $DataBuku->save();
            return redirect('/daftarbuku')->with('success', 'Data Berhasil Diubah!');
        }
       
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
        return redirect('/daftarbuku')->with('success', 'Data Telah Dihapus!');
    }
}
