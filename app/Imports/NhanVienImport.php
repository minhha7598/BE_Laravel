<?php

namespace App\Imports;

use App\Models\NhanVien;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NhanVienImport implements ToModel,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new NhanVien([
            'ho_ten' => $row['ho_ten'],
            'ngay_sinh' => $row[ 'ngay_sinh'],
            'gioi_tinh' => $row[ 'gioi_tinh'],
            'dan_toc' => $row['dan_toc'],
            'so_dien_thoai' => $row['so_dien_thoai'],
            'que_quan' => $row['que_quan'],
            'dia_chi' => $row['dia_chi'],
            'truong' => $row['truong'],
            'chuyen_nganh' => $row['chuyen_nganh'],
            'trinh_do_hoc_van' => $row['trinh_do_hoc_van'],
            'ten_chuc_vu' => $row['ten_chuc_vu'],
            'he_so_luong' => $row['he_so_luong'],
            'luong_co_ban' => $row['luong_co_ban'],
            'ten_anh' => $row['ten_anh'],
        ]);
    }
}