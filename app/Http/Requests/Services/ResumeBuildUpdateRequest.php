<?php

namespace App\Http\Requests\Services;

use Illuminate\Foundation\Http\FormRequest;

class ResumeBuildUpdateRequest extends FormRequest
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
            'orderID' => ['unique:resume_builds,orderID'],
            'name' => ['string', 'unique:resume_builds,name'],
            'resume_type_id' => ['required', 'integer', 'exists:resume_types,id'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'completed' => [''],
            'asDownload' => [''],
            'paymentSuccessful' => [''],
            'datePurchased' => [''],
        ];
    }
}
