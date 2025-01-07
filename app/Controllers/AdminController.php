<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    protected $session;

    public function index()
    {
        $this->session = session();

        if (!$this->session->has('log')) {
            return redirect()->to(base_url('admin/login_admin'))->with('alert','belum_login');
        }

        $data = []; // jika ada data yang perlu dikirim ke view, tambahkan di sini

        echo view('admin/index', $data);
        echo view('admin/dashboard', $data);
        return view('admin/footer', $data);
    }
}
