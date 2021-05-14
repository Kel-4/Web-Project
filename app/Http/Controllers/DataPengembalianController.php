<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPengembalian;
use Carbon\Carbon;

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
            $data = DataPengembalian::where('id', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('nama', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('tgl_jatuh_tempo', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('tgl_kembali', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('judul', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('status', 'LIKE', '%'.$request->cari.'%')
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
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
        //    
    }

}
