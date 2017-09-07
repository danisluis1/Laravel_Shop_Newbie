<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function getIndex()
    {
        return view('page.trang_chu');
    }

    public function getLoaiSanPham()
    {
        return view('page.loai_san_pham');
    }

    public function getChiTietSanPham()
    {
        return view('page.chi_tiet_san_pham');
    }

    public function getLienHe()
    {
        return view('page.lien_he');
    }

    public function getDangKy()
    {
        return view('page.dang_ky');
    }
}
