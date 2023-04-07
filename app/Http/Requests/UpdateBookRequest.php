<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'rak_id' => 'required|exists:raks,id',
            'judul_buku' => 'required',
            'kode_buku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'thn_terbit' => 'required',
        ];
    }
}
