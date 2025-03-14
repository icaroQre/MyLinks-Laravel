<?php

namespace App\Http\Requests;

use App\Rules\CheckHandler;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;

/**
 * @property-read UploadedFile $photo 
 */

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     * 
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
            'photo' => ['nullable', 'image'],
            'name' => ['required', 'min:3', 'max:30'],
            'handler' => ['required', 'unique:users,handler,' . auth()->id() . ',id', new CheckHandler],
            'description' => ['nullable', 'max:140'],
        ];
    }
}
