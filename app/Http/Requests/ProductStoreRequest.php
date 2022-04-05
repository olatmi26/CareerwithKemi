<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name' => ['string'],
            'category_id' => ['integer', 'exists:categories,id'],
            'name' => ['string'],
            'qtyInStock' => ['integer'],
            'price' => ['integer'],
            'image' => ['string'],
            'availability' => ['required'],
            'discountAllow' => ['integer'],
            'category_id' => ['integer', 'exists:categories,id'],
            'name' => ['string'],
            'qtyInStock' => ['integer'],
            'price' => ['integer'],
            'image' => ['string'],
            'availability' => ['required'],
            'discountAllow' => ['integer'],
            'category_id' => ['integer', 'exists:categories,id'],
            'name' => ['string'],
            'qtyInStock' => ['integer'],
            'price' => ['integer'],
            'image' => ['string'],
            'availability' => ['required'],
            'discountAllow' => ['integer'],
            'category_id' => ['integer', 'exists:categories,id'],
            'name' => ['string'],
            'qtyInStock' => ['integer'],
            'price' => ['integer'],
            'image' => ['string'],
            'availability' => ['required'],
            'discountAllow' => ['integer'],
            'category_id' => ['integer', 'exists:categories,id'],
            'name' => ['string'],
            'qtyInStock' => ['integer'],
            'price' => ['integer'],
            'image' => ['string'],
            'availability' => ['required'],
            'discountAllow' => ['integer'],
            'category_id' => ['integer', 'exists:categories,id'],
            'name' => ['string'],
            'qtyInStock' => ['integer'],
            'price' => ['integer'],
            'image' => ['string'],
            'availability' => ['required'],
            'discountAllow' => ['integer'],
        ];
    }
}
