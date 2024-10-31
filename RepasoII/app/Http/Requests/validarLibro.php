<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarLibro extends FormRequest
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
        return [
            'txtisbn' => 'required', 
            'txttitulo'=>'required',
            'txtautor' => 'required',
            'txtpaginas'=> 'required',
            'txtan' => 'required', 
            'txteditorial' => 'required',
            'txtemail_editorial' => 'required'
               ];
    }
}
