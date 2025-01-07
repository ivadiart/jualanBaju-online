<?php

namespace App\Controllers;
use App\Models\ProdukModel;
use App\Models\KategoriModel;
use CodeIgniter\Controller;

class ProdukController extends Controller
{
    protected $session;
    protected $produkModel;
    protected $kategoriModel;
    
    public function index()
    {
        $this->session = session();

        if (!$this->session->has('log')) {
            return redirect()->to(base_url('admin/login_admin'))->with('alert','belum_login');
        }

        helper('nominal');
        $this->produkModel = new ProdukModel();
        $this->kategoriModel = new KategoriModel();
        $data['produk'] = $this->produkModel->getProduk();
        $data['kategori'] = $this->kategoriModel->getKategori();
        
        echo view('admin/index',$data);
        echo view('admin/data_produk',$data);
        return view('admin/footer',$data);
    }

    public function tambah()
    {
        $model = new ProdukModel();

        // Validasi file
        if (!$this->validate([
            'photo' => [
                'uploaded[photo]',
                'mime_in[photo,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[photo,4096]', // max 4MB
            ],
        ])) {
            return redirect()->back()->with('error', 'Invalid file.');
        }

        // Mengambil file dan mengubah namanya
        $file = $this->request->getFile('photo');
        $newName = $file->getRandomName();
        $file->move(ROOTPATH . 'public/assets/images_produk', $newName);

        // Menyiapkan data untuk disimpan
        $data = [
            'nm_produk' => $this->request->getPost('nm_produk'),
            'nm_brand' => $this->request->getPost('nm_brand'),
            'desc_produk' => $this->request->getPost('desc_produk'),
            'spesifikasi_produk' => $this->request->getPost('spesifikasi_produk'),
            'kategori' => $this->request->getPost('kategori'),
            'harga' => $this->request->getPost('harga'),
            'picture' => $newName
        ];

        // Menyimpan data ke database
        $model->tambah_barang($data);

        session()->setFlashdata('alert', 'tambah_produk');
        // Redirect dengan pesan sukses
        return redirect()->to(base_url('admin/data_produk'));
    }

    public function update()
    {
        $this->produkModel = new ProdukModel();
        $id = $this->request->getPost('id');
        $data = [
            'nm_produk' => $this->request->getPost('nm_produk'),
            'nm_brand' => $this->request->getPost('nm_brand'),
            'kategori' => $this->request->getPost('kategori'),
            'harga' => $this->request->getPost('harga')
        ];

        $this->produkModel->updateProduk($id,$data);
        return redirect()->to(base_url('admin/data_produk'))->with('alert', 'update_produk');
    }

    public function updateImg()
    {
        $this->produkModel = new ProdukModel();
        $id = $this->request->getPost('id');

        // Validasi file
        if (!$this->validate([
            'photo' => [
                'uploaded[photo]',
                'mime_in[photo,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[photo,4096]', // max 4MB
            ],
        ])) {
            return redirect()->back()->with('error', 'Invalid file.');
        }

        // Mengambil file dan mengubah namanya
        $file = $this->request->getFile('photo');
        $newName = $file->getRandomName();
        $file->move(ROOTPATH . 'public/assets/images_produk', $newName);

        $data = [
            'picture' => $newName
        ];

        $this->produkModel->updateImg($id,$data);
        return redirect()->to(base_url('admin/data_produk'))->with('alert', 'update_img');
    }

    public function updateDesc()
    {
        $this->produkModel = new ProdukModel();
        $id = $this->request->getPost('id');
        $data = [
            'desc_produk' => $this->request->getPost('desc_produk'),
            'spesifikasi_produk' => $this->request->getPost('spesifikasi_produk')
        ];

        $this->produkModel->update_desc($id,$data);
        return redirect()->to(base_url('admin/data_produk'))->with('alert', 'update_produk');
    }

    public function hapus($id)
    {
        $this->produkModel = new ProdukModel();
        $this->produkModel->hapusProduk($id);
        return redirect()->to(base_url('admin/data_produk'))->with('alert', 'hapus_produk');
    }   
   
   

}