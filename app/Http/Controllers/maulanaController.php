<?php

namespace App\Http\Controllers;

use App\Exports\DATA_1461900138Export;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class maulanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buku()
    {
        $buku = DB::table('rak_buku')
                ->join('buku','rak_buku.id_buku', '=', 'buku.id')
                ->join('jenis_buku', 'rak_buku.id_jenis_buku', '=', 'jenis_buku.id')
                ->select('rak_buku.id','buku.judul','buku.tahun_terbit','jenis_buku.jenis')
                ->get();
                return view('buku0138', ['rak_buku'=>$buku]);
    }

    public function export()
    {
        return Excel::download(new DATA_1461900138Export,'DATA_1461900138.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
}
