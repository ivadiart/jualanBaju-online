<?php

namespace App\Controllers;
use App\Models\ProdukModel;
use App\Models\KategoriModel;
use App\Models\CartModel;

class Home extends BaseController
{
    protected $produkModel;
    protected $kategoriModel;
    protected $cartModel;

    public function index()
    {
        $this->produkModel = new ProdukModel();
        $this->kategoriModel = new KategoriModel();
        $this->cartModel = new CartModel();

        $data['unggulan'] = $this->produkModel->getProduk();
        $data['popular'] = $this->produkModel->popularProduk();
        $data['baru'] = $this->produkModel->baruProduk();
        $data['kategori'] = $this->kategoriModel->homeKategori();
        $data['total_cart'] = $this->cartModel->hitungCart();

        return view('frontend/index',$data);
    }
}
