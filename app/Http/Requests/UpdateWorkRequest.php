<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWorkRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // ho cambiato da false a true
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
            'image' => 'required|image|max:10000',
            'title' => 'required|string',
            'categories' => 'required',
            'note' => 'nullable|string',
        ];
    }
}
