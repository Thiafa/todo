<?php

namespace App\Http\Requests;

use App\Enums\StatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTaskRequest extends FormRequest
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
            'tarefa' => ['required', 'string', 'max:60'],
            'data_termino' => ['required', 'date'],
            'status' => ['in_array', Rule::in(array_column(StatusEnum::cases(), 'value'))],
            'user_id' => ['required', 'exists:users,id']
        ];
    }
}
