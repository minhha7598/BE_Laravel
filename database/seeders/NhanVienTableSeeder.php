<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NhanVien;

class NhanVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nhanvien = [
            ['ho_ten'=>'Ha Minh Hung','ngay_sinh'=>'1998-07-05', 'gioi_tinh' => 'Nam','dan_toc'=>'Kinh','so_dien_thoai'=>'0455122222','que_quan'=>'Quang Nam', 'dia_chi'=>'Da Nang','truong'=>'Duy Tan','chuyen_nganh'=>'Du Lich', 'trinh_do_hoc_van'=>'Dai Hoc','ten_chuc_vu'=>'Software Developer','he_so_luong'=>'3,0','luong_co_ban'=>'9,000,000', 'ten_anh'=>'Ha_Minh_Hung.jpg'],
            ['ho_ten'=>'Nguyen Van Nam','ngay_sinh'=>'1998-11-01', 'gioi_tinh' => 'Nam','dan_toc'=>'Kinh','so_dien_thoai'=>'0782138444','que_quan'=>'Quang Nam', 'dia_chi'=>'Da Nang','truong'=>'Kinh Te','chuyen_nganh'=>'Cong Nghe Thong Tin', 'trinh_do_hoc_van'=>'Dai Hoc','ten_chuc_vu'=>'Software Developer','he_so_luong'=>'3,0','luong_co_ban'=>'9,000,000', 'ten_anh'=>'Nguyen_Van_Nam.jpg'],
            ['ho_ten'=>'Nguyen Van Duong','ngay_sinh'=>'1998-10-05', 'gioi_tinh' => 'Nam','dan_toc'=>'Kinh','so_dien_thoai'=>'0782138666','que_quan'=>'Ha Noi', 'dia_chi'=>'Da Nang','truong'=>'Kinh Te','chuyen_nganh'=>'Cong Nghe Thong Tin', 'trinh_do_hoc_van'=>'Dai Hoc','ten_chuc_vu'=>'Software Developer','he_so_luong'=>'3,0','luong_co_ban'=>'9,000,000', 'ten_anh'=>'Nguyen_Van_Duong.jpg'],
            ['ho_ten'=>'Tran Van Dat','ngay_sinh'=>'1994-07-06', 'gioi_tinh' => 'Nam','dan_toc'=>'Kinh','so_dien_thoai'=>'0782138520','que_quan'=>'Quang Nam', 'dia_chi'=>'Da Nang','truong'=>'Duy Tan','chuyen_nganh'=>'Cong Nghe Thong Tin', 'trinh_do_hoc_van'=>'Dai Hoc','ten_chuc_vu'=>'Software Developer','he_so_luong'=>'3,6','luong_co_ban'=>'11,000,000', 'ten_anh'=>'Tran_Van_Dat.jpg'],
            ['ho_ten'=>'Tran Ngoc Son','ngay_sinh'=>'1994-06-05', 'gioi_tinh' => 'Nam','dan_toc'=>'Kinh','so_dien_thoai'=>'0782138412','que_quan'=>'Quang Binh', 'dia_chi'=>'Da Nang','truong'=>'Kinh Te','chuyen_nganh'=>'Cong Nghe Thong Tin', 'trinh_do_hoc_van'=>'Dai Hoc','ten_chuc_vu'=>'Software Developer','he_so_luong'=>'4,2','luong_co_ban'=>'15,000,000', 'ten_anh'=>'Tran_Ngoc_Son.jpg'],
            ['ho_ten'=>'Ha Van Duoc','ngay_sinh'=>'1997-01-05', 'gioi_tinh' => 'Nam','dan_toc'=>'Kinh','so_dien_thoai'=>'0782138505','que_quan'=>'Da Nang', 'dia_chi'=>'Da Nang','truong'=>'Duy Tan','chuyen_nganh'=>'Cong Nghe Thong Tin', 'trinh_do_hoc_van'=>'Dai Hoc','ten_chuc_vu'=>'Software Developer','he_so_luong'=>'5,6','luong_co_ban'=>'18,000,000', 'ten_anh'=>'Ha_Van_Duoc.jpg'],
            ['ho_ten'=>'Le Huynh Bao','ngay_sinh'=>'1998-07-01', 'gioi_tinh' => 'Nam','dan_toc'=>'Kinh','so_dien_thoai'=>'0782228501','que_quan'=>'Ha Noi', 'dia_chi'=>'Da Nang','truong'=>'Kinh Te','chuyen_nganh'=>'Ke Toan', 'trinh_do_hoc_van'=>'Dai Hoc','ten_chuc_vu'=>'Designer','he_so_luong'=>'3,2','luong_co_ban'=>'8,000,000', 'ten_anh'=>'Le_Huynh_Bao.jpg'],
            ['ho_ten'=>'Huynh Duc An','ngay_sinh'=>'1998-02-05', 'gioi_tinh' => 'Nam','dan_toc'=>'Kinh','so_dien_thoai'=>'0782138222','que_quan'=>'Quang Nam', 'dia_chi'=>'Da Nang','truong'=>'Duy Tan','chuyen_nganh'=>'Thiet Ke Do Hoa', 'trinh_do_hoc_van'=>'Dai Hoc','ten_chuc_vu'=>'Designer','he_so_luong'=>'2,5','luong_co_ban'=>'6,500,000', 'ten_anh'=>'Huynh_Duc_An.jpeg'],
            ['ho_ten'=>'Ha Xuat','ngay_sinh'=>'2003-02-10', 'gioi_tinh' => 'Nam','dan_toc'=>'Lao','so_dien_thoai'=>'0905123456','que_quan'=>'Ha Noi', 'dia_chi'=>'Can Tho','truong'=>'Duy Tan','chuyen_nganh'=>'Ke Toan', 'trinh_do_hoc_van'=>'Dai Hoc','ten_chuc_vu'=>'Accountant','he_so_luong'=>'2,7','luong_co_ban'=>'7,200,000', 'ten_anh'=>'Ha_Xuat.jpg'],
            ['ho_ten'=>'Le Van Quynh','ngay_sinh'=>'2001-02-10', 'gioi_tinh' => 'Nu','dan_toc'=>'Kinh','so_dien_thoai'=>'0935352253','que_quan'=>'Dac Lak', 'dia_chi'=>'Da Nang','truong'=>'Duy Tan','chuyen_nganh'=>'Thiet Ke Do Hoa', 'trinh_do_hoc_van'=>'Dai Hoc','ten_chuc_vu'=>'Designer','he_so_luong'=>'4,2','luong_co_ban'=>'7,500,000', 'ten_anh'=>'Le_Van_Quynh.jpg'],
            ['ho_ten'=>'Vo Thi Hien','ngay_sinh'=>'1998-02-10', 'gioi_tinh' => 'Nu','dan_toc'=>'Kinh','so_dien_thoai'=>'0758111231','que_quan'=>'Quang Nam', 'dia_chi'=>'Da Nang','truong'=>'Kinh Te','chuyen_nganh'=>'Ke Toan', 'trinh_do_hoc_van'=>'Dai Hoc','ten_chuc_vu'=>'Business Analyst','he_so_luong'=>'4,5','luong_co_ban'=>'8,500,000', 'ten_anh'=>'Vo_Thi_Hien.jpg'],
            ['ho_ten'=>'Ho Thi Ngoc Thao','ngay_sinh'=>'1996-09-10', 'gioi_tinh' => 'Nu','dan_toc'=>'Kinh','so_dien_thoai'=>'0935126652','que_quan'=>'Can Tho', 'dia_chi'=>'Da Nang','truong'=>'Duy Tan','chuyen_nganh'=>'Ngoai Thuong', 'trinh_do_hoc_van'=>'Dai Hoc','ten_chuc_vu'=>'Business Analyst','he_so_luong'=>'3,2','luong_co_ban'=>'9,000,000', 'ten_anh'=>'Ho_Thi_Ngoc_Thao.jpg'],
            ['ho_ten'=>'Ha Thi Uyen','ngay_sinh'=>'1996-02-11', 'gioi_tinh' => 'Nu','dan_toc'=>'Kinh','so_dien_thoai'=>'0956123123','que_quan'=>'Ca Mau', 'dia_chi'=>'Da Nang','truong'=>'Bach Khoa','chuyen_nganh'=>'Cong Nghe Thong Tin', 'trinh_do_hoc_van'=>'Dai Hoc','ten_chuc_vu'=>'Data Analyst','he_so_luong'=>'3,0','luong_co_ban'=>'7,500,000', 'ten_anh'=>'Ha_Thi_Uyen.jpg'],
            ['ho_ten'=>'Nguyen Ngoc Trinh','ngay_sinh'=>'1998-02-12', 'gioi_tinh' => 'Nu','dan_toc'=>'Kinh','so_dien_thoai'=>'0782546666','que_quan'=>'Quang Nam', 'dia_chi'=>'Da Nang','truong'=>'Bach Khoa','chuyen_nganh'=>'Cong Nghe Thong Tin', 'trinh_do_hoc_van'=>'Dai Hoc','ten_chuc_vu'=>'Data Analyst','he_so_luong'=>'3,0','luong_co_ban'=>'8,000,000', 'ten_anh'=>'Nguyen_Ngoc_Trinh.jpg'],
            ['ho_ten'=>'Ha Thuy Chi','ngay_sinh'=>'1997-09-10', 'gioi_tinh' => 'Nu','dan_toc'=>'Kinh','so_dien_thoai'=>'0911156632','que_quan'=>'Da Nang', 'dia_chi'=>'Da Nang','truong'=>'Duy Tan','chuyen_nganh'=>'Ngoai Thuong', 'trinh_do_hoc_van'=>'Dai Hoc','ten_chuc_vu'=>'Accountant','he_so_luong'=>'3,0','luong_co_ban'=>'7,500,000', 'ten_anh'=>'Ha_Thuy_Chi.jpg'],
            ['ho_ten'=>'Ton Thi Ha','ngay_sinh'=>'1998-11-12', 'gioi_tinh' => 'Nu','dan_toc'=>'Kinh','so_dien_thoai'=>'0563126547','que_quan'=>'Quang Binh', 'dia_chi'=>'Da Nang','truong'=>'Bach Khoa','chuyen_nganh'=>'Cong Nghe Thong Tin', 'trinh_do_hoc_van'=>'12/12','ten_chuc_vu'=>'Accountant','he_so_luong'=>'4,2','luong_co_ban'=>'9,000,000', 'ten_anh'=>'Ton_Thi_Ha.jpg'],
            ['ho_ten'=>'Nguyen Thi Kieu Trinh','ngay_sinh'=>'1997-02-10', 'gioi_tinh' => 'Nu','dan_toc'=>'Kinh','so_dien_thoai'=>'0985111456','que_quan'=>'Quang Nam', 'dia_chi'=>'Da Nang','truong'=>'Bach Khoa','chuyen_nganh'=>'Cong Nghe Thong Tin', 'trinh_do_hoc_van'=>'12/12','ten_chuc_vu'=>'Tester','he_so_luong'=>'4,5','luong_co_ban'=>'9,000,000', 'ten_anh'=>'Nguyen_Thi_Kieu_Trinh.jpg'],
            ['ho_ten'=>'Nguyen Thi Hue','ngay_sinh'=>'1995-02-11', 'gioi_tinh' => 'Nu','dan_toc'=>'Kinh','so_dien_thoai'=>'0905454485','que_quan'=>'Da Nang', 'dia_chi'=>'Da Nang','truong'=>'Duy Tan','chuyen_nganh'=>'Cong Nghe Thong Tin', 'trinh_do_hoc_van'=>'12/12','ten_chuc_vu'=>'Tester','he_so_luong'=>'3,0','luong_co_ban'=>'6,500,000', 'ten_anh'=>'Nguyen_Thi_Hue.jpg'],
        ];
        NhanVien::insert($nhanvien);
    }
}