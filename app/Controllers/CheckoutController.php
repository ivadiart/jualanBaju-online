<?php

namespace App\Controllers;
use App\Models\CartModel;
use App\Models\CheckoutModel;
use App\Models\ProdukModel;

class CheckoutController extends BaseController
{
    protected $cartModel;
    protected $checkoutModel;

    public function index($id = null)
    {
        if ($id === null) {
            return redirect()->to(base_url('/'));
        }

        $this->cartModel = new CartModel();
        $data['checkout'] = $this->cartModel->checkoutProduk($id);
        $data['total_cart'] = $this->cartModel->hitungCart();

        return view('frontend/checkout',$data);
    }

    public function checkout()
    {
        $this->checkoutModel = new CheckoutModel();
        $this->cartModel = new CartModel();
        
        $invoiceNumber = $this->checkoutModel->generateInvoiceNumber();
        $currentDate = date('Y-m-d H:i:s');
        $status = 'Processing';

        $data = [
            'no_pesanan' => $invoiceNumber,
            'tanggal_pesan' => $currentDate,
            'status' => $status,
            'nama' => $this->request->getPost('nama'),
            'telp' => $this->request->getPost('telp'),
            'alamat' => $this->request->getPost('alamat'),
            'alamat_jln' => $this->request->getPost('alamat_jln'),
            'alamat_blok' => $this->request->getPost('alamat_blok'),
            'pengiriman' => $this->request->getPost('pengiriman'),
            'total_bayar' => $this->request->getPost('total_bayar'),
        ];

        if( $this->checkoutModel->transaksi($data)){
            $this->cartModel->delete(['id_cart' => $this->request->getPost('id')]);
        }

        return redirect()->to(base_url('/'))->with('alert', 'transaksi_succes');
    }

    public function checkLogin()
    {
        return redirect()->to(base_url('login-register'))->with('alert', 'belum_login');
    }
}
