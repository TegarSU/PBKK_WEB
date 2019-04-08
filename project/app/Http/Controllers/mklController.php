<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mata_Kuliah;

class mklController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Mata_Kuliah::all(); 
        // dd($data);       
        return view('matkul.index',compact('data')); 
        // return view('hasil',compact('name','pass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
         return view('matkul.create');
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
        // $m = new Mata_Kuliah();
        // $m->kode = $request->kode;
        // $m->nama = $request->nama;      
        // // $m->alamat = $request->alamat;        
        // $m->save(); 
       $m = Mata_Kuliah::create($request->all());       
        return redirect()->route('mata_kuliah.index')->with('alert-success', 'Data Berhasil Disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mata_Kuliah $matkul)
    {
        //
        // $m = mata_kuliah::findOrFail($id);
        // //dd($m);
        // return view('mkl.show', compact('m'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mata_Kuliah $matkul) 
    { 
        $m = $matkul;
      // $m = Mata_Kuliah::findOrFail($id); 
      // //dd($m);
      return view('matkul.edit', compact('m')); 
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
        // $m = Mata_Kuliah::findOrFail($id);        
        // $m->kode = $request->kode;        
        // $m->nama = $request->nama;        
        // // $m->alamat = $request->alamat;        
        // $m->save();        
        $m = Dosen::findorfail($id);
        // dd($m);
        $m->update($request->all());
    return redirect()->route('mata_kuliah.index')->with('alert-success', 'Data Berhasil Diubah.');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $m = Mata_Kuliah::findOrFail($id);
        $m->delete();
        return redirect()->route('mata_kuliah.index')->with('alert-success', 'Data Berhasil Dihapus.');   
    }
}
