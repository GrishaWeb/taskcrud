<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:255|unique:posts,title',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please enter post title.',
            'title.unique' => 'The post has already been taken.',
            'description.required' => 'Please enter post description.'
        ];
    }
}
