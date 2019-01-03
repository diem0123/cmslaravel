<?php

namespace App\module\company\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateCompanyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
	  public function authorize()
	    {
	        return true;
	    }
    public function rules()
    {
        return [
            'name' => ['required', 'unique:categories']
        ];
    }
}
