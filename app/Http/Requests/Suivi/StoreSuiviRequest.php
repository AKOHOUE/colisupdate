<?php

namespace App\Http\Requests\Suivi;

use Illuminate\Foundation\Http\FormRequest;

class StoreSuiviRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'origine'=> ['required', 'string', 'max:255'],
            'destination'=> ['required', 'string', 'max:255'],
            'numero'=> ['required', 'string', 'max:255'],
            'lieuCurrent'=> ['required', 'string', 'max:255'],
            'heure'=> ['required', 'string', 'max:255'],
            'piece'=> ['required', 'string', 'max:255'],
            'poste'=> ['required', 'string', 'max:255'],
        ];
    }
}
