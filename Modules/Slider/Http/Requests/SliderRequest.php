<?php

namespace Modules\Slider\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SliderRequest extends FormRequest
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
            'second_title' => 'nullable|string',
            'subtitle' => 'required|string',
            'link' => 'required|string',
            'status' =>   ['nullable', Rule::in(['0', '1']),],
            'image' =>   'nullable|image',
        ];
    }
}
