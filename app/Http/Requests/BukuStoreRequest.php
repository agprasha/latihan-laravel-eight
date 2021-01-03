<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BukuStoreRequest extends FormRequest
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
            'nama_buku' => 'required',
            'deskripsi_buku' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_buku.required' => 'Nama Buku Wajib Diisi',
            'deskripsi_buku.required' => 'Deskripsi Buku Wajib Diisi',
        ];
    }
}
