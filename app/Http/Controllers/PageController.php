<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
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

    public function getLoaiSanPham($_id_type_product)
    {
        $san_pham_theo_loai = Product::where('id_type',$_id_type_product)->get();
        $san_pham_khac = Product::where('id_type','<>',$_id_type_product)->paginate(12);
        $loai_san_pham = ProductType::where('id',$_id_type_product)->get();
        $lsp = ProductType::all();
        // dd($loai_san_pham);
        return view('page.loai_san_pham', compact('san_pham_theo_loai', 'san_pham_khac', 'loai_san_pham', 'lsp'));
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
