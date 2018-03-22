<?php

namespace HelpNow\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelpFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

           'problema' =>'required|max:256',
           'descricao'=>'max:50',
           'status'=>'max:50'
            
        ];
    }
}
