<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NhanVienResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'ho_ten' => $this->ho_ten,
            'ngay_sinh' => $this->ngay_sinh,
            'gioi_tinh' => $this->gioi_tinh,
            'dan_toc' => $this->dan_toc,
            'so_dien_thoai' => $this->so_dien_thoai,
            'que_quan' => $this->que_quan,
            'dia_chi' => $this->dia_chi,
            'truong' => $this->truong,
            'chuyen_nganh' => $this->chuyen_nganh,
            'trinh_do_hoc_van' => $this->trinh_do_hoc_van,
            'ten_chuc_vu' => $this->ten_chuc_vu,
            'he_so_luong' => $this->he_so_luong,
            'luong_co_ban' => $this->luong_co_ban,
            'ten_anh' => $this->ten_anh,
        ];
    }
}