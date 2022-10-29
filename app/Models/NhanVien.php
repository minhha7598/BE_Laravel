<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'ho_ten', 'ngay_sinh', 'gioi_tinh', 'dan_toc', 'so_dien_thoai', 'que_quan', 'dia_chi', 'truong', 'chuyen_nganh', 'trinh_do_hoc_van', 'ten_chuc_vu', 'he_so_luong', 'luong_co_ban','ten_anh'];
    public $timestamps = false;

}