<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\File;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
      $rules = [
        'title' => ['required'],
        'excerpt' => ['nullable'],
        'category_id' => ['required'],
        'tags' => ['required', 'string', 'regex:/^[a-zA-Z0-9áéíóúãõâêôçÁÉÍÓÚÃÕÂÊÔÇ\-\s,]+$/'],
        'content' => ['required']
      ];

      if(request()->isMethod('post')){
        $rules['image'] = ['required', 'image', File::types(['jpg', 'webp'])];
      }else{
        $rules['image'] = ['nullable', 'image', File::types(['jpg', 'webp'])];
      }

      return $rules;
    }
}
