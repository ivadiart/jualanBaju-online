<?php

namespace App\Controllers;
use App\Models\ProdukModel;
use App\Models\CartModel;

class DetailsController extends BaseController
{
    protected $cartModel;
    
    public function index($id = null)
    {
        if ($id === null) {
            return redirect()->to(base_url('/'));
        }

        $produkModel = new ProdukModel();
        $this->cartModel = new CartModel();
        $data['produk'] = $produkModel->detailsProduk($id);
        $data['total_cart'] = $this->cartModel->hitungCart();
        $data['related'] = $produkModel->getProduk();

        return view('frontend/details',$data);
    }
}
