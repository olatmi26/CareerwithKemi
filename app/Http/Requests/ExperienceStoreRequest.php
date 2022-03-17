<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceStoreRequest extends FormRequest
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
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'companyName' => ['string'],
            'positionHeld' => ['string', 'max:180'],
            'fromYear' => ['date'],
            'toYear' => ['date'],
            'isCurrentJob' => ['required'],
        ];
    }
}
