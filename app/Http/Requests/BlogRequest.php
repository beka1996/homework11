<?php

namespace App\Http\Requests;


use App\Rules\BlogRule;
use Illuminate\Foundation\Http\FormRequest;


class BlogRequest extends FormRequest
{
    private $title;

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
            'title' => ['required', new BlogRule],
            'second_title' =>  'required|',
            'author'=>'required|',
            'description'=>'required|'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'შეიყვანეთ სათაური',
            'second_title.required' => 'შეიყვანეთ ქვე სათაური',
            'author.required' => 'შეიყვანეთ ავტორი',
            'description.required' => 'შეიყვანეთ აღწერა'
        ];
    }
}
