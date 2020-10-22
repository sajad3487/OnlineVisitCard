<?php

namespace Modules\Card\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type'=>'required|numeric|between:0,7',
            'fname'=>'required|string|between:2,100',
            'lname'=>'required|string|between:2,100',
            'phone'=>'required|string|between:2,100',
            'email'=>'required|string|email|max:100',
            'company'=>'nullable|string|max:100',
            'position'=>'nullable|string|max:100',
            'home_address'=>'nullable|string|max:250',
            'work_address'=>'nullable|string|max:250',
            'home_phone'=>'nullable|string|max:20',
            'work_phone'=>'nullable|string|max:20',
            'fax'=>'nullable|string|max:20',
            'personal_website'=>'nullable|string|max:250',
            'work_website'=>'nullable|string|max:250',
            'facebook'=>'nullable|string|max:250|url',
            'instagram'=>'nullable|string|max:250|url',
            'twitter'=>'nullable|string|max:250|url',
            'linkdin'=>'nullable|string|max:250|url',
            'skype'=>'nullable|string|max:250',
            'whatsapp'=>'nullable|string|max:250',
            'file'=>'mimes:jpeg,jpg,png|max:2000',
            'picture'=>'mimes:jpeg,jpg,png|max:2000',
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
