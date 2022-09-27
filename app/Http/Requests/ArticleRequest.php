<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        $rules = [
            "title"=>'required|min:3|max:255',
            "description"=>'required|min:3',
            "photo"=>'image',
            "body"=>'required|min:3'
        ];
        if($this->isMethod('POST')){
            $rules['photo'] = 'required|'. $rules['photo'];
        }
        return $rules;
    }

    public function messages()
    {
        return [
            "title.required"=>"Please enter the article title",
            "title.min"=>"The title must be at least 3 letters",
            "title.max"=>"The title must be at most 255 letters",
            "description.required"=>"Please add the article description",
            "description.min"=>"The description must be at least 3 letters",
            "body.required"=>"Please add the article body",
            "body.min"=>"The body must be at least 3 letters",
            "photo.required"=>"Please add a the article image",
            "photo.image"=>"Please add a valid image"
        ];
    }
}
