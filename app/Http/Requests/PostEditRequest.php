<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostEditRequest extends PostCreateRequest
{
    function attributes(){
        $rules = parent::rules();
        return $rules;
    }
}
