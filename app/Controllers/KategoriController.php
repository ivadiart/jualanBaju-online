<?php

namespace App\Controllers;
use App\Models\KategoriModel;
use CodeIgniter\Controller;

class KategoriController extends Controller
{
    protected $session;
    protected $kategoriModel;
   
    public function index()
    {
        $this->session = session();

        if (!$this->session->has('log')) {
            return redirect()->to(base_url('admin/login_admin'))->with('alert','belum_login');
        }

        $this->kategoriModel = new KategoriModel();
        $data['kategori'] = $this->kategoriModel->getKategori();
        
        echo view('admin/index',$data);
        echo view('admin/data_kategori',$data);
        return view('admin/footer',$data);
    }

    public function tambah()
    {
        $this->kategoriModel = new KategoriModel();

        // Validasi file
        if (!$this->validate([
            'pic' => [
                'uploaded[pic]',
                'mime_in[pic,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[pic,4096]', // max 4MB
            ],
        ])) {
            return redirect()->back()->with('error', 'Invalid file.');
        }

        // Mengambil file dan mengubah namanya
        $file = $this->request->getFile('pic');
        $newName = $file->getRandomName();
        $file->move(ROOTPATH . 'public/assets/img_kategori', $newName);

        $data = [
            'nm_kategori' => $this->request->getPost('nm_kategori'),
            'img_kategori' => $newName
        ];

        $this->kategoriModel->tambah_kategori($data);
        return redirect()->to(base_url('admin/data_kategori'))->with('alert', 'tambah_kategori');
    }

    public function update()
    {
        $this->kategoriModel = new KategoriModel();
        $id = $this->request->getPost('id');

        // Validasi file
        if (!$this->validate([
            'pic' => [
                'uploaded[pic]',
                'mime_in[pic,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[pic,4096]', // max 4MB
            ],
        ])) {
            return redirect()->back()->with('error', 'Invalid file.');
        }

        // Mengambil file dan mengubah namanya
        $file = $this->request->getFile('pic');
        $newName = $file->getRandomName();
        $file->move(ROOTPATH . 'public/assets/img_kategori', $newName);

        $data = [
            'nm_kategori' => $this->request->getPost('nm_kategori'),
            'img_kategori' => $newName
        ];

        $this->kategoriModel->update_kategori($id,$data);
        return redirect()->to(base_url('admin/data_kategori'))->with('alert', 'update_kategori');
    }

    public function hapus($id)
    {
        $this->kategoriModel = new KategoriModel();
        $this->kategoriModel->hapus_kategori($id);
        return redirect()->to(base_url('admin/data_kategori'))->with('alert', 'hapus_kategori');
    }   



}