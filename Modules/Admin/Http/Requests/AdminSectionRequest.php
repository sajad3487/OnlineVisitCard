<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminSectionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'nullable|string|max:255',
            'text'=>'nullable|string|max:255',
            'file'=>'nullable|mimes:jpeg,jpg,png|max:2000',
            'button_text'=>'nullable|string|max:255',
            'priority'=>'nullable|numeric|max:255',
            'status'=>'nullable|numeric|max:255',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
