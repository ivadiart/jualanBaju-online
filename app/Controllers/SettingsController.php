<?php

namespace App\Controllers;
use App\Models\CartModel;
use App\Models\BukutamuModel;
use App\Models\CheckoutModel;
use CodeIgniter\Controller;


class SettingsController extends BaseController
{
    protected $session;
    protected $cartModel;
    protected $checkoutModel;
    protected $bukutamuModel;

    public function index()
    {
        $this->session = session();

        if (!$this->session->has('user')) {
            return redirect()->to(base_url('login-register'))->with('alert','belum_login');
        }

        $this->cartModel = new CartModel();
        $this->checkoutModel = new CheckoutModel();
        
        $data['total_cart'] = $this->cartModel->hitungCart();
        $data['orders'] = $this->checkoutModel->getCheckout();

        return view('frontend/settings',$data);
    }

    public function bukutamu()
    {
        $this->bukutamuModel = new BukutamuModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'komen' => $this->request->getPost('komen')
        ];

        $this->bukutamuModel->tambah_bukutamu($data);
        return redirect()->to(base_url('settings'))->with('alert', 'tambah_bukutamu');

    }
}
