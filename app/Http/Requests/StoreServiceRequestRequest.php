<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'description'=>'', 
            'province_id'=>'',
            'latitude'=>'', 
            'longitude'=>'',
            'execution_date'=>'', 
            'status'=>'',
            'user_id'=>'',
            'service_id'=>'', 
            'image'=>'', 
            //
        ];
    }
}
