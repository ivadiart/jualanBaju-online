<?php

namespace App\Controllers;
use App\Models\AksesModel;
use CodeIgniter\Controller;

class AksesController extends BaseController
{
    protected $session;
    protected $aksesModel;
    
    public function index()
    {
        $this->session = session();

        if (!$this->session->has('log')) {
            return redirect()->to(base_url('admin/login_admin'))->with('alert','belum_login');
        }

        $this->aksesModel = new AksesModel();
        $data['akses'] = $this->aksesModel->getAkses();

        echo view('admin/index',$data);
        echo view('admin/data_akses',$data);
        return view('admin/footer',$data);
    }

    public function tambah()
    {
        $this->aksesModel = new AksesModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'password' => md5($this->request->getPost('password')),
            'level' => $this->request->getPost('level')
        ];

        $this->aksesModel->tambah_akses($data);
        return redirect()->to(base_url('admin/data_akses'))->with('alert', 'tambah_akses');

    }

    public function update()
    {
        $this->aksesModel = new AksesModel();
        $id = $this->request->getPost('id');

        $data = [
            'username' => $this->request->getPost('username'),
            'password' => md5($this->request->getPost('password')),
            'level' => $this->request->getPost('level')
        ];

        $this->aksesModel->update_akses($id,$data);
        return redirect()->to(base_url('admin/data_akses'))->with('alert', 'update_akses');

    }

    public function hapus($id)
    {
        $this->aksesModel = new AksesModel();
        $this->aksesModel->hapus_akses($id);
        return redirect()->to(base_url('admin/data_akses'))->with('alert', 'hapus_akses');
    }   

}
