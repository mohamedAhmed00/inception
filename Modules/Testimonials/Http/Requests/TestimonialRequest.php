<?php

namespace Modules\Testimonials\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TestimonialRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required|string',
            'company' => 'nullable|string',
            'person' => 'nullable|string',
            'person_title' => 'nullable|string',
            'content' => 'required|string',
            'status' =>   ['nullable', Rule::in(['0', '1']),],
            'image' =>   'nullable|image',
        ];
    }
}
