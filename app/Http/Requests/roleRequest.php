<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class roleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */ public function authorize(): bool
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
            "ten_phan_quyen"  => "required|unique:phan_quyen,ten_phan_quyen",
            "role_phan_quyen" => "required",
        ];
    }
    public function messages(): array
    {
        return [
            "ten_phan_quyen.required"   =>   "ten_phan_quyen không được để trống",
            "ten_phan_quyen.unique"     =>   "Tên danh mụcten_phan_quyen đã tồn tại",
            "role_phan_quyen.required"  =>   "role_phan_quyen không được để trống",
        ];
    
    }
}