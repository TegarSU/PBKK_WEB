<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\mhs\StoreRequest;
use App\Http\Requests\mhs\UpdateRequest;
use App\Mahasiswa;
use App\Mhs_mkl;
use App\Dosen;

class mhscontroller extends Controller
{
    //
    public function index()
	{        
		$data = mahasiswa::all();
		 
		// dd($doswal);
	    return view('mhs.index',compact('data')); 
	    // return view('hasil',compact('name','pass'));  
	}

	public function create()
	{
		$doswal = Dosen::all();  
		// dd($doswal);  
		return view('mhs.create',compact('doswal'));
	}

	//public function create()    {        //    } 
	public function store(StoreRequest $request)
	{        	
		$m = new mahasiswa();
		// dd($m);
		$m->nrp = $request->nrp;
		$m->nama = $request->nama;		
		$m->alamat = $request->alamat;
		$m->dosens_id = $request->doswal;        
		$m->save();        
		return redirect()->route('mahasiswa.index')->with('alert-success', 'Data Berhasil Disimpan.');    
	}

	public function show($id)    
	{        //
		$data = mahasiswa::find($id);
		// dd($data);
		// $mhs_id = $data->nrp
		// $mkl = Mhs_mkl::find($id);
		// dd($mkl);
		return view('mhs.show', compact('data'));  
	} 

	public function edit($id) 
	{ 
	  $m = mahasiswa::findOrFail($id);
	  $doswal = Dosen::all(); 
	  //dd($m);
	  return view('mhs.edit', compact('m','doswal')); 
	}

	public function update(Request $request, $id)    
	{        	
		$m = mahasiswa::findOrFail($id);

		$m->nrp = $request->nrp;        
		$m->nama = $request->nama;        
		$m->alamat = $request->alamat;    
		$m->dosens_id = $request->doswal;    
		$m->save();        
	return redirect()->route('mahasiswa.index')->with('alert-success', 'Data Berhasil Diubah.');    
	}

	
	public function destroy($id)
	{        
	 	$m = mahasiswa::findOrFail($id);
	 	$m->delete();
  		return redirect()->route('mahasiswa.index')->with('alert-success', 'Data Berhasil Dihapus.');   
 	}
}
