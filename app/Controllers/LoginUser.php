<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginUser extends BaseController
{
    protected $userModel;
    protected $session;

    public function index()
    {
        return view('frontend/login-register');
    }

    public function register()
    {
        helper(['form', 'url']);
        $this->userModel = new UserModel();
        $validation = \Config\Services::validation();
    
        // Tambahkan validasi lengkap untuk semua field
        $validation->setRules([
            'confirm_password' => 'required|matches[password]',
        ]);
    
        if (!$validation->withRequest($this->request)->run()) {
            // Jika validasi gagal, redirect kembali dengan pesan kesalahan
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
    
        // Hash password menggunakan password_hash untuk keamanan yang lebih baik
        $passwordHash = md5($this->request->getPost('password'));
    
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $passwordHash,
        ];
    
        $this->userModel->tambah_user($data);
    
        // Redirect ke halaman login-register dengan pesan sukses
        return redirect()->to(base_url('login-register'))->with('alert', 'tambah_user');
    }
    
    public function login()
    {
        helper('form');
        $this->userModel = new UserModel();
        $this->session = session();
        
        if ($this->validate([
            'email' => [
                'label'  => 'Email',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'password' => [
                'label'  => 'Password',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ]
        ])) {
            // Jika valid
            $email = $this->request->getPost('email');
            $password = md5($this->request->getPost('password'));
            $cek = $this->userModel->getUser($email, $password);
            if ($cek) {
                // Jika datanya cocok
                session()->set('user', true);
                session()->set('id', $cek['id_user']);
                session()->set('email', $cek['email']);
                session()->set('password', $cek['password']);
                return redirect()->to(base_url('/'))->with('alert','login_sukses');
            } else {
                session()->setFlashdata('pesan', 'Login Gagal !!!, Username Atau Password Salah !!!');
                return redirect()->to(base_url('login-register'))->with('alert','login_gagal');
            }
        } else {
            // Jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('login-register'))->with('alert','login_gagal');
        }
    }        
    public function logout()
    {
        $this->session = session();
        $this->session->destroy();
    
        return redirect()->to(base_url('login-register'))->with('alert', 'logout_sukses');
    }
}
