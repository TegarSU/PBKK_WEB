<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\mhs\StoreRequest;
use App\Http\Requests\mhs\UpdateRequest;
use App\Mahasiswa;
// use App\Mhs_mkl;
use App\Dosen;
use DB;

class mhscontroller extends Controller
{
    //
    public function index()
	{        
		$data = mahasiswa::all();
		 
		// dd($data);
	    return view('mhs.index',compact('data')); 
	    // return view('hasil',compact('name','pass'));  
	}

	public function create()
	{
		// $doswal = Dosen::all(); 
		// $dsn = dosen::pluck('nama','id');
		$dsn = Dosen::pluck('nama', 'id')->toArray();
		// dd($dsn);

        // return view ('students.create',compact('dsn')); 
		// dd($doswal);  
		return view('mhs.create',compact('dsn'));
	}

	//public function create()    {        //    } 
	public function store(Request $request)
	{        	
		//dd($request->all());
		// $m = new mahasiswa();
		// // dd($m);
		// $m->nrp = $request->nrp;
		// $m->nama = $request->nama;		
		// $m->alamat = $request->alamat;
		// $m->dosens_id = $request->doswal;        
		// $m->save();  
		Mahasiswa::create($request->all());
        // return redirect('/students');      
		return redirect()->route('mahasiswa.index')->with('alert-success', 'Data Berhasil Disimpan.');    
	}

	public function show(Mahasiswa $mhs)    
	{        //

		//
        //Query Join
        // $data = DB::table('mahasiswas')->join('dosens','mahasiswas.dosens_id','=','dosens.id')->get();
        // dd($data);
        
        //Raw
        // $data = DB::select( DB::raw("select * from dosens JOIN mahasiswas ON dosens.id = mahasiswas.dosens_id") );
        // dd($data);

		// $data = mahasiswa::find($id);
		
		// return view('mhs.show', compact('mhs'));  
	} 

	public function edit($id) 
	{ 
	  $m = mahasiswa::findOrFail($id);
	  $doswal  = Dosen::pluck('nama', 'id')->toArray();
	  // dd($doswal);
	  return view('mhs.edit', compact('m','doswal')); 
	}

	public function update(Request $request, $id)    
	{        	
		// $m = Mahasiswa::find($id);

		// $m->nrp = $request->nrp;        
		// $m->nama = $request->nama;        
		// $m->alamat = $request->alamat;    
		// $m->dosens_id = $request->doswal;    
		// $m->save(); 
		$m = Mahasiswa::findorfail($id);
		// dd($m);
        $m->update($request->all());
        // return redirect('/students');       
	return redirect()->route('mahasiswa.index')->with('alert-success', 'Data Berhasil Diubah.');    
	}

	
	public function destroy($id)
	{
		// $post= mahasiswa::where('id', $id)->where('user_id',$user_id);
		// dd($post);
		// $post->delete();   
	 	// $m = mahasiswa::where('id', $id);
	 	// dd($mhs);
	 	$mhs = mahasiswa::findOrFail($id);
	 	$mhs->delete();
	 	// $m->delete();
  		return redirect()->route('mahasiswa.index')->with('alert-success', 'Data Berhasil Dihapus.');   
 	}
}
