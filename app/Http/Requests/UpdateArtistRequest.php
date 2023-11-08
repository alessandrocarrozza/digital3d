<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArtistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;  // ho cambiato da false a true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // regole di validazione dei campi del form edit
            'nickname' => 'required|string',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|string',
            'photo' => 'nullable|image|max:10000',
            'biography' => 'nullable|string',
            'nationality' => 'nullable|string',
            'based' => 'nullable|string',
            'phone' => 'nullable|string',
            'business_email' => 'nullable|string',
            'instagram' => 'nullable|string',
            'facebook' => 'nullable|string',
            'linkedin' => 'nullable|string'
        ];
    }
}
