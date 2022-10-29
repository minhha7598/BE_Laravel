<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNhanVienRequest extends FormRequest
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
            'ho_ten' => [ 'string'],
            'ngay_sinh' => ['string'],
            'gioi_tinh' => [ 'string'],
            'dan_toc' =>[ 'string'],
            'so_dien_thoai' =>[ 'string', 'max:12'],
            'que_quan' => [ 'string'],
            'dia_chi' => [ 'string'],
            'truong' => [ 'string'],
            'chuyen_nganh' => [ 'string'],
            'trinh_do_hoc_van' => [ 'string'],
            'ten_chuc_vu' => [ 'string'],
            'he_so_luong' =>[ 'string'],
            'luong_co_ban' => [ 'string', 'min:7'],
            'ten_anh' => [ 'image']
        ];
    }
}