<?php

namespace App\Http\Requests\Services;

use Illuminate\Foundation\Http\FormRequest;

class PaymentStoreRequest extends FormRequest
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
            'user_id' => ['integer', 'exists:users,id'],
            'resume_build_id' => ['integer', 'exists:resume_builds,id'],
            'AmountPaid' => ['integer'],
            'paymentStatus' => ['required'],
        ];
    }
}
