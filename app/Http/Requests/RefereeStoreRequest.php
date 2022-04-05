<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RefereeStoreRequest extends FormRequest
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
            'user_id' => ['integer', 'exists:users,id'],
            'refFullName' => ['string'],
            'refOrganisation' => ['string', 'max:140'],
            'refPosition' => ['string'],
            'refEmail' => ['string', 'unique:referees,refEmail'],
            'refPhone' => ['string', 'max:11', 'unique:referees,refPhone'],
            'onRequest' => ['required'],
            'user_id' => ['integer', 'exists:users,id'],
            'refFullName' => ['string'],
            'refOrganisation' => ['string', 'max:140'],
            'refPosition' => ['string'],
            'refEmail' => ['string', 'unique:referees,refEmail'],
            'refPhone' => ['string', 'max:11', 'unique:referees,refPhone'],
            'onRequest' => ['required'],
            'user_id' => ['integer', 'exists:users,id'],
            'refFullName' => ['string'],
            'refOrganisation' => ['string', 'max:140'],
            'refPosition' => ['string'],
            'refEmail' => ['string', 'unique:referees,refEmail'],
            'refPhone' => ['string', 'max:11', 'unique:referees,refPhone'],
            'onRequest' => ['required'],
            'user_id' => ['integer', 'exists:users,id'],
            'refFullName' => ['string'],
            'refOrganisation' => ['string', 'max:140'],
            'refPosition' => ['string'],
            'refEmail' => ['string', 'unique:referees,refEmail'],
            'refPhone' => ['string', 'max:11', 'unique:referees,refPhone'],
            'onRequest' => ['required'],
            'user_id' => ['integer', 'exists:users,id'],
            'refFullName' => ['string'],
            'refOrganisation' => ['string', 'max:140'],
            'refPosition' => ['string'],
            'refEmail' => ['string', 'unique:referees,refEmail'],
            'refPhone' => ['string', 'max:11', 'unique:referees,refPhone'],
            'onRequest' => ['required'],
            'user_id' => ['integer', 'exists:users,id'],
            'refFullName' => ['string'],
            'refOrganisation' => ['string', 'max:140'],
            'refPosition' => ['string'],
            'refEmail' => ['string', 'unique:referees,refEmail'],
            'refPhone' => ['string', 'max:11', 'unique:referees,refPhone'],
            'onRequest' => ['required'],
        ];
    }
}
