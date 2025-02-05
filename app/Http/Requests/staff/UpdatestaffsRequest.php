<?php

declare(strict_types=1);

namespace App\Http\Requests\staff;

use Illuminate\Foundation\Http\FormRequest;

class UpdatestaffsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
            'name'=>'required',
            'image'=>'required',
            'bio'=>'required',
            'department'=>'required',
        ];
    }
}
