<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePeminjamanRequest extends FormRequest
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
            'buku_id' => 'required|exists:books,id',
            'petugas_id' => 'required|exists:petugas,id',
            'anggota_id' => 'required|exists:anggotas,id',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ];
    }
}
