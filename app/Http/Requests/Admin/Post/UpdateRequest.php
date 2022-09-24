<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
            'category_id' => 'required|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'exists:tags,id',
        ];
    }

    public function messages()
    {
        return  [ 'title.required' => 'This field must be completed',
                'title.string' => 'The data must be  string',
                'content.required' => 'This field must be completed',
                'content.string' => 'The data must be  string',
                'preview_image.file' => 'The file must be an image',
                'main_image.file' => 'The file must be an image',
                'category_id.required' => 'This field must be completed',
                'category_id.integer' => 'Id category must be an integer',
                'category_id.exists:categories,id' => 'Category has to be in the database',
                'tag_ids.required' => 'You need choose one or several tags from the list',

        ];
    }
}
