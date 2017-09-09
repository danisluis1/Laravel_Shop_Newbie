<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slide;

class PageController extends Controller
{
    public function getIndex()
    {
        if (!isset($slides)) {
            $slides = Slide::all();
            $new_product = Product::where('new',1)->paginate(4);
            $top_product = Product::where('new',0)->paginate(8);
            return view('page.trang_chu', compact('slides','new_product','top_product'));
        }
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
