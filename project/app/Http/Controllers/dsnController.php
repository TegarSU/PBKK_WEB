<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class dsnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Dosen::all(); 
        // dd($data);       
        return view('dsn.index',compact('data')); 
        // return view('hasil',compact('name','pass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
         return view('dsn.create');
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
        $m = new Dosen();
        $m->nip = $request->nip;
        $m->nama = $request->nama;      
        $m->alamat = $request->alamat;        
        $m->save();        
        return redirect()->route('dosen.index')->with('alert-success', 'Data Berhasil Disimpan.');
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
        $data = Dosen::findOrFail($id);
        //dd($m);
        return view('dsn.show', compact('data')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) 
    { 
      $m = Dosen::findOrFail($id); 
      //dd($m);
      return view('dsn.edit', compact('m')); 
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
        $m = dosen::findOrFail($id);        
        $m->nip = $request->nip;        
        $m->nama = $request->nama;        
        $m->alamat = $request->alamat;        
        $m->save();        
    return redirect()->route('dosen.index')->with('alert-success', 'Data Berhasil Diubah.');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {        
        $m = Dosen::findOrFail($id);
        $m->delete();
        return redirect()->route('dosen.index')->with('alert-success', 'Data Berhasil Dihapus.');   
    }
}
