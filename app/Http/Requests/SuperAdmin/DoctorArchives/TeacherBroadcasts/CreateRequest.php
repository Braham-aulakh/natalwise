<?php

namespace App\Http\Requests\SuperAdmin\DoctorBroadcasts;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'file_type' => 'required|string',
            'link_type' => 'required|string',
            'description' => 'nullable|string',
            'is_active' => 'nullable|boolean'
        ];
    }
}
