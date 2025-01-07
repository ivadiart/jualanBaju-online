<?php

namespace App\Controllers;
use App\Models\ProdukModel;
use App\Models\CartModel;
use CodeIgniter\Controller;

class ShopController extends BaseController
{
    protected $shopController;
    protected $cartModel;

    public function index()
    {
        $this->shopController = new ProdukModel();
        $this->cartModel = new CartModel();

        $data['total_cart'] = $this->cartModel->hitungCart();
        $data['total_produk'] = $this->shopController->hitungProduk();
        $data['produk'] = $this->shopController->getProduk();

        return view('frontend/shop',$data);
    }
}
