<?php

namespace App\Http\Requests\mhs;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()    
    {        
        return true;    
    }    

    public function rules()    
    {        
        return [            
        'nrp' => 'Required',            
        'nama' => 'Required',          
        'alamat' => 'Required'        
        ];    
    }   

    public function messages()    
    {        
        return [            
        'nrp.required' => 'Nrp Tidak Boleh Kosong.',            
        'nama.required' => 'Nama Tidak Boleh Kosong.',            
        'alamat.required' => 'alamat Tidak Boleh Kosong.'        
        ];    
    }
}
