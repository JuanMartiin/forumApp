<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentEditRequest extends CommentCreateRequest
{
    function attributes(){
        $rules = parent::rules();
        return $rules;
    }
}
