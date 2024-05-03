<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatepostRequest extends FormRequest
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
            'titre' => 'required',
            'photo' => 'mimes:png,jpg,jpeg|image|max:2048',
            'contenu' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'titre.required' => 'Le titre est requis',
            'photo.image' => 'Fichier invalide !',
            'photo.mimes' => 'Format du fichier invalide !',
            'photo.max' => 'Fichier trop lourd (max = 2048) !',
            'contenu.required' => 'Le contenu de l\'article est requis',
        ];
    }
}
