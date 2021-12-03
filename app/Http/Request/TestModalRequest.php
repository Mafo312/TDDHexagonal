<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class TestModalRequest extends FormRequest
{
    public function message()
    {
        return [
            'firstName.requied' => 'Nom obligatoir',
            'lastName.requied' => 'Prénom obligatoir',
            'phone.requied' => 'numéro obligatoir'
        ];
    }

    public function rules(){
        return[
            'firstName' => 'Required',
            'lastName' => 'Required',
            'phone' => 'Required'
    ];
    }
       
}