<?php

namespace Mtolhuys\LaravelSchematics\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteRelationRequest extends FormRequest
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
            'method.name' => 'required|string',
            'method.file' => 'required|string',
            'method.line' => 'required|integer',
        ];
    }
}
