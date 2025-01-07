<?php

namespace App\Controllers;
use App\Models\CheckoutModel;
use CodeIgniter\Controller;

class TransaksiController extends BaseController
{
    protected $checkoutModel;
    protected $session;

    public function index()
    {
        $this->session = session();

        if (!$this->session->has('log')) {
            return redirect()->to(base_url('admin/login_admin'))->with('alert','belum_login');
        }

        $this->checkoutModel = new CheckoutModel();

        $data['transaksi'] = $this->checkoutModel->getCheckout();

        echo view('admin/index',$data);
        echo view('admin/data_transaksi',$data);
        return view('admin/footer',$data);
    }

    public function update()
    {
        $this->checkoutModel = new CheckoutModel();
        $id = $this->request->getPost('id');
        $status = 'Completed';

        $data = [
            'status' => $status
        ];

        $this->checkoutModel->update($id,$data);
        return redirect()->to(base_url('admin/data_transaksi'))->with('alert', 'update_transaksi');

    }

}
