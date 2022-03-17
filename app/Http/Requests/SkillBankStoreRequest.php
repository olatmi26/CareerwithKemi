<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillBankStoreRequest extends FormRequest
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
            'career_id' => ['integer', 'exists:careers,id'],
            'skill' => ['string'],
        ];
    }
}
