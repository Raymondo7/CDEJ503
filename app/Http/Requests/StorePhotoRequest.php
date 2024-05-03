<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePhotoRequest extends FormRequest
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
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categorie' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'photo.required' => 'Une image au moins est requise',
            'photo.image' => 'Fichier invalide !',
            'photo.mimes' => 'Format du fichier invalide !',
            'photo.max' => 'Fichier trop lourd (max = 2048) !',
            'categorie.required' => 'La catégorie est requise'
        ];
    }
}
