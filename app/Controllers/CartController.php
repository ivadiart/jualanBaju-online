<?php

namespace App\Controllers;
use App\Models\CartModel;
use CodeIgniter\Controller;

class CartController extends BaseController
{
    protected $cartModel;

    public function index()
    {
        $this->cartModel = new CartModel();
        $data['cart'] = $this->cartModel->getCart();
        $data['total_cart'] = $this->cartModel->hitungCart();

        return view('frontend/cart',$data);
    }

    public function tambah()
    {
        $this->cartModel = new CartModel();

        $id_cart = $this->request->getPost('id_cart');
        $img_cart = $this->request->getPost('img_cart');
        $nm_produk = $this->request->getPost('nm_produk');
        $harga = $this->request->getPost('harga');
        $qty = $this->request->getPost('qty');

        $produkAdded = $this->cartModel->where(['id_cart' => $id_cart])->first();

            // Jika data tidak ditemukan pada database maka akan dijalankan perintah ini
            if ($produkAdded) {
                return redirect()->to('/')->with('alert', 'produk_added');
            }else{
                $data = [
                    'id_cart' => $id_cart,
                    'img_cart' => $img_cart,
                    'nm_produk' => $nm_produk,
                    'harga' => $harga,
                    'qty' => $qty
        
                ];        
            }
        $this->cartModel->tambah_cart($data);
        return redirect()->to(base_url('/'))->with('alert', 'cart_success');

    }

    public function update()
    {
        $this->cartModel = new CartModel();
        $id = $this->request->getPost('id');

        $data = [
            'qty' => $this->request->getPost('qty')
        ];

        $this->cartModel->update_cart($id,$data);
        return redirect()->to(base_url('cart'))->with('alert', 'update_cart');
    }

    public function hapus($id)
    {
        $this->cartModel = new CartModel();
        $this->cartModel->hapus_cart($id);
        return redirect()->to(base_url('cart'))->with('alert', 'hapus_cart');
    }   


}
