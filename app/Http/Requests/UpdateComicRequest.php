<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'title' => 'required|min:5|max:255',
                'description' => 'required|min:5|max:255',
                'thumb' => 'required|min:5|max:255',
                'price' => 'required',
                'series' => 'required|min:5|max:255',
                'sale_date' => 'nullable|date',
                'type' => 'nullable',
        ];
    }
}
