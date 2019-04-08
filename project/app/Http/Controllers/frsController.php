<?php

namespace App\Http\Controllers;

use App\Dosen;
use App\Mata_Kuliah;
// use App\Mengajar;
// use App\Mengambil;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class frsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('mahasiswas')
                // ->join('dosens','mahasiswas.dosens_id','=','dosens.id')
                ->join('frs','mahasiswas.id','=','frs.mahasiswas_id')
                ->join('kelas','frs.kelas_id','=','kelas.id')
                ->join('mata_kuliahs','kelas.mata_kuliahs_id','=','mata_kuliahs.id')
                ->join('dosens','kelas.dosens_id','=','dosens.id')
                // ->join('mata_kuliahs')
                ->get();
        // dd($data);
        return view('frs.index',compact('data'));
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
