<?php

namespace App\Http\Controllers;

use App\Models\DataAnggota;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->has('cari')){
            $data= DataAnggota::where('nama', 'LIKE','%'.$request->cari.'%')
            ->orWhere('jenis_kelamin', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('tanggal_terdaftar', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('kontak', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('alamat', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('status_peminjaman', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('id', 'LIKE', '%'.$request->cari.'%')
            ->paginate(8);
        }else{
            $data = DataAnggota::paginate(8);
        }
        return view('DataPengunjung.index', ['data'=>$data]);

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
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_terdaftar' => 'required',
            'kontak' => 'required',
            'alamat' => 'required',
            'status_peminjaman' => 'required',
            'foto' => 'required'
        ]);
        
        if ($request->file('foto')==NULL) {
            DataAnggota::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_terdaftar' => $request->tanggal_terdaftar,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'status_peminjaman' => $request->status_peminjaman,
            'foto' => $request->foto
        ]);
        }else{
            $nama = $request->nama;
            $jenis_kelamin = $request->jenis_kelamin;
            $tanggal_terdaftar = $request->tanggal_terdaftar;
            $kontak = $request->kontak;
            $alamat = $request->alamat;
            $status_peminjaman = $request->status_peminjaman;
            $foto = $request->file('foto');
            $NamaFoto = time().'.'.$foto->extension();
            $foto->move(public_path('foto'),$NamaFoto);

            $DataAnggota = new DataAnggota();
            $DataAnggota->nama = $nama;
            $DataAnggota->jenis_kelamin = $jenis_kelamin;
            $DataAnggota->tanggal_terdaftar = $tanggal_terdaftar;
            $DataAnggota->kontak = $kontak;
            $DataAnggota->alamat = $alamat;
            $DataAnggota->status_peminjaman = $status_peminjaman;
            $DataAnggota->foto = $NamaFoto;
            $DataAnggota->save(); 
        }
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
        $pengunjung = DataAnggota::find($id);
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
        $request->validate([
            'nama' => 'required',
            'tanggal_terdaftar' => 'required',
            'kontak' => 'required',
            'alamat' => 'required',
        ]);

        if ($request->file('gambar')==NULL) {
        $pengunjung = DataAnggota::find($id);
        $pengunjung->nama = $request->nama;
        $pengunjung->jenis_kelamin = $request->jenis_kelamin;
        $pengunjung->tanggal_terdaftar = $request->tanggal_terdaftar;
        $pengunjung->kontak = $request->kontak;
        $pengunjung->alamat = $request->alamat;
        $pengunjung->status_peminjaman = $request->status_peminjaman;
        $foto = $request->foto;

        $pengunjung->save();
        return redirect('/DataPengunjung')->with('success', 'Data Berhasil Diubah!');

        }else{
            $foto = $request->file('foto');
            $NamaFoto = time().'.'.$foto->extension();
            $foto->move(public_path('foto'),$NamaFoto);

            $nama = $request->nama;
            $jenis_kelamin = $request->jenis_kelamin;
            $tanggal_terdaftar = $request->tanggal_terdaftar;
            $kontak = $request->kontak;
            $alamat = $request->alamat;
            $status_peminjaman = $request->status_peminjaman;

            $pengunjung = DataAnggota::find($id);
            $pengunjung->nama = $nama;
            $pengunjung->jenis_kelamin = $jenis_kelamin;
            $pengunjung->tanggal_terdaftar = $tanggal_terdaftar;
            $pengunjung->kontak = $kontak;
            $pengunjung->alamat = $alamat;
            $pengunjung->status_peminjaman = $status_peminjaman;
            $pengunjung->foto = $NamaFoto;

            $pengunjung->save();
            return redirect('/DataPengunjung')->with('success', 'Data Berhasil Diubah!');    
        }
    }

    public function cetak_kartu($id)
    {
        //
        $pengunjung = DataAnggota::find($id);
        return view('DataPengunjung.cetak_kartu', ['pengunjung' => $pengunjung]);
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
        $pengunjung = DataAnggota::find($id);
        $pengunjung->delete();
        return redirect('/DataPengunjung')->with('success', 'Data Telah Dihapus!');
    }

}
