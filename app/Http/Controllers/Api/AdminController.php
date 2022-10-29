<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\NhanVien;
use Illuminate\Http\Request;
use App\Http\Resources\NhanVienResource;
use App\Http\Requests\StoreNhanVienRequest;
use App\Http\Requests\UpdateNhanVienRequest;
use App\Http\Requests\ExcelNhanVienRequest;
use Excel;
use App\Exports\NhanVienExport;
use App\Imports\NhanVienImport;
use Mail;
use App\Mail\Email;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            return NhanVienResource::collection(NhanVien::all());
        }catch (Exception $e) {
            return response()->json([
                'message' => "Nothing!", $e
            ],404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNhanVienRequest $request)
    {
        try{
            $file_img = $request->ten_anh;
            $name_img = $file_img->getClientOriginalName();
            NhanVien::create([
                'ho_ten' => $request->ho_ten,
                'ngay_sinh' => $request->ngay_sinh,
                'gioi_tinh' => $request->gioi_tinh,
                'dan_toc' => $request->dan_toc,
                'so_dien_thoai' => $request->so_dien_thoai,
                'que_quan' => $request->que_quan,
                'dia_chi' => $request->dia_chi,
                'truong' => $request->truong,
                'chuyen_nganh' => $request->chuyen_nganh,
                'trinh_do_hoc_van' => $request->trinh_do_hoc_van,
                'ten_chuc_vu' => $request->ten_chuc_vu,   
                'he_so_luong' => $request->he_so_luong,
                'luong_co_ban' => $request->luong_co_ban, 
                'ten_anh' => $name_img, 
            ]);
            Storage::disk('public')->put($name_img, file_get_contents($request->ten_anh));
            return response()->json([
                'message' => "Succesfully Create!"
            ],200);
        }catch (Exception $e) {
            return response()->json([
                'message' => "Failed Create!", $e
            ],404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NhanVien  $nhanVien
     * @return \Illuminate\Http\Response
     */
    public function show(NhanVien $id)
    {
        return new NhanVienResource($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NhanVien  $nhanVien
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNhanVienRequest $request, NhanVien $id)
    {
        try{
            $new = NhanVien::all()->find($id);
            $request->ho_ten ? $new->ho_ten = $request->ho_ten :false;
            $request->ngay_sinh ? $new->ngay_sinh = $request->ngay_sinh :false;
            $request->gioi_tinh ? $new->gioi_tinh = $request->gioi_tinh :false;
            $request->dan_toc ? $new->dan_toc = $request->dan_toc :false;
            $request->so_dien_thoai ? $new->so_dien_thoai = $request->so_dien_thoai :false;
            $request->que_quan ? $new->que_quan = $request->que_quan :false;
            $request->dia_chi ? $new->dia_chi = $request->dia_chi :false;
            $request->truong ? $new->truong = $request->truong :false;
            $request->chuyen_nganh ? $new->chuyen_nganh = $request->chuyen_nganh :false;
            $request->trinh_do_hoc_van ? $new->trinh_do_hoc_van = $request->trinh_do_hoc_van :false;
            $request->ten_chuc_vu ? $new->ten_chuc_vu = $request->ten_chuc_vu :false;
            $request->he_so_luong ? $new->he_so_luong = $request->he_so_luong :false;
            $request->luong_co_ban ? $new->luong_co_ban = $request->luong_co_ban :false;

            //IMG
            $file_img = $request->ten_anh;
            $name_img  = optional($file_img)->getClientOriginalName();  
            $request->ten_anh ? $new->ten_anh = $request->ten_anh :false;
            if($file_img){
                Storage::disk('public')->put($name_img, file_get_contents($file_img));
            }
            
            //UPDATE
            $new->save();
            return response()->json([
                'message' => "Succesfully Update!"
            ],200);
        }catch (Exception $e) {
            return response()->json([
                'message' => "Failed Update!", $e
            ],404);
        }

    }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NhanVien  $nhanVien
     * @return \Illuminate\Http\Response
     */
    public function destroy(NhanVien $id)
    {
        $id->delete();
        return response([
            'message'=>'Delete Successfully!'
          ]); 
    }

    //EXCEL
    public function importExcel(ExcelNhanVienRequest $request){
    Excel::import(new NhanVienImport, $request->file('file'));
    return response([
        'message'=>'Imported Successfully!'
        ]); 
    }

    public function exportExcel(){
        return Excel::download(new NhanVienExport, 'nhanviens.xlsx');
    }

    //EMAIL
    public function email(Request $request){
        $mailData = [
            'email' => $request->email,
            'title' => $request->title,
            'content' => $request->content,
        ];
        Mail::to("hungminhha751998@gmail.com")->send(new Email($mailData));
        return response([
            'message'=>'Sent Email Successfully!'
          ]); 
    }
}