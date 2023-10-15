<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInscriptionRequest extends FormRequest
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
            'nom' => ['required', 'min:5'],
            'classe' => ['required'],
            'email' => ['required', 'email']
        ];
    }
    public function messages(){
        return [
            'nom.required' => 'Le nom et prenom est obligatoire',
            'nom.min' => 'Le nom et prenom dois depasser 5 caracteres',
            'classe.required' => 'Le niveau de la classe est obligatoire',
            'email.required' => 'L\'email est obligatoire',
            'email.email' => 'L\'email est incorrecte',
        ];
    }
}
