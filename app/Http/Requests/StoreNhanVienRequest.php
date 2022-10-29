<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNhanVienRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'ho_ten' => ['required', 'string'],
            'ngay_sinh' => ['required', 'string'],
            'gioi_tinh' => ['required', 'string'],
            'dan_toc' =>['required', 'string'],
            'so_dien_thoai' =>['required', 'string', 'max:12'],
            'que_quan' => ['required', 'string'],
            'dia_chi' => ['required', 'string'],
            'truong' => ['required', 'string'],
            'chuyen_nganh' => ['required', 'string'],
            'trinh_do_hoc_van' => ['required', 'string'],
            'ten_chuc_vu' => ['required', 'string'],
            'he_so_luong' =>['required', 'string'],
            'luong_co_ban' => ['required', 'string', 'min:7'],
            'ten_anh' => ['required', 'image']
        ];
    }
}