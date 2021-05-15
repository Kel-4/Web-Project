<?php

namespace App\Http\Controllers;

use App\Models\DataAnggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
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
            ->orWhere('tanggal_terdaftar', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('kontak', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('alamat', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('id', 'LIKE', '%'.$request->cari.'%')
            ->paginate(8);
        }else{
            $data = DataAnggota::paginate(8);
        }
        return view('DataAnggota.index', ['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('DataAnggota.tambah');
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
            'foto' => 'required',
        ]);


        if ($request->file('foto')==NULL) {
            DataAnggota::create([
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tanggal_terdaftar' => $request->tanggal_terdaftar,
                'kontak' => $request->kontak,
                'alamat' => $request->alamat,
                'foto' => $request->foto
            ]);

        } else {
            $nama = $request->nama;
            $jenis_kelamin = $request->jenis_kelamin;
            $tanggal_terdaftar = $request->tanggal_terdaftar;
            $kontak = $request->kontak;
            $alamat = $request->alamat;
            $foto = $request->file('foto');
            $NamaFoto = time().'.'.$foto->extension();
            $foto->move(public_path('foto'),$NamaFoto);

            $DataAnggota = new DataAnggota();
            $DataAnggota->nama = $nama;
            $DataAnggota->jenis_kelamin = $jenis_kelamin;
            $DataAnggota->tanggal_terdaftar = $tanggal_terdaftar;
            $DataAnggota->kontak = $kontak;
            $DataAnggota->alamat = $alamat;
            $DataAnggota->foto = $NamaFoto;
            $DataAnggota->save();
        }
        

        return redirect('/DataAnggota')->with('success', 'Data Berhasil Ditambahkan!'); 
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
        $anggota = DataAnggota::find($id);
        return view('DataAnggota.ubah', ['anggota' => $anggota]);
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
            'kontak' => 'required|max:14',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ]);
        

        if ($request->file('foto')==NULL) {
            $DataAnggota = DataAnggota::find($id);
            $DataAnggota->nama = $request->nama;
            $DataAnggota->jenis_kelamin = $request->jenis_kelamin;
            $DataAnggota->tanggal_terdaftar = $request->tanggal_terdaftar;
            $DataAnggota->kontak = $request->kontak;
            $DataAnggota->alamat = $request->alamat;
            $DataAnggota->status_peminjaman = $request->status_peminjaman;
            $foto = $request->foto;

            $DataAnggota->save();
            return redirect('/DataAnggota')->with('success', 'Data Berhasil Diubah!');

        } else {
            $foto = $request->file('foto');
            $NamaFoto = time().'.'.$foto->extension();
            $foto->move(public_path('foto'), $NamaFoto);
    
            $nama = $request->nama;
            $jenis_kelamin = $request->jenis_kelamin;
            $tanggal_terdaftar = $request->tanggal_terdaftar;
            $kontak = $request->kontak;
            $alamat = $request->alamat;
            $status_peminjaman = $request->status_peminjaman;
    
            $DataAnggota = DataAnggota::find($id);
            $DataAnggota->nama = $request->nama;
            $DataAnggota->jenis_kelamin = $request->jenis_kelamin;
            $DataAnggota->tanggal_terdaftar = $request->tanggal_terdaftar;
            $DataAnggota->kontak = $request->kontak;
            $DataAnggota->alamat = $request->alamat;
            $DataAnggota->status_peminjaman = $request->status_peminjaman;
            $DataAnggota->foto = $NamaFoto;
    
            $DataAnggota->save();
            return redirect('/DataAnggota')->with('success', 'Data Berhasil Diubah!');
        }
    }

    public function cetak_kartu($id)
    {
        //
        $anggota = DataAnggota::find($id);
        return view('DataAnggota.cetak_kartu', ['anggota' => $anggota]);
    }

    public function cetak_anggota($id)
    {
        //
        $anggota = DataAnggota::find($id);
        return view('DataAnggota.cetak_anggota', ['anggota' => $anggota]);
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
        $anggota = DataAnggota::find($id);
        $anggota->delete();
        return redirect('/DataAnggota')->with('success', 'Data Telah Dihapus!');
    }

}
