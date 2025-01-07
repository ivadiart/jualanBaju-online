<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\KategoriModel;
use App\Models\CartModel;

class KategoriHome extends BaseController
{
    protected $kategoriModel;
    protected $produkModel;
    protected $cartModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->produkModel = new ProdukModel();
        $this->cartModel = new CartModel();
    }

    public function index($id = null)
    {

        
        if ($id) {
            // Menampilkan data dari database yang mempunyai id=$id
            $dataKategori = $this->kategoriModel->kategoriProduk($id);

            // Jika data tidak ditemukan pada database maka akan dijalankan perintah ini
            if (!$dataKategori) {
                return redirect()->to('/')->with('error', 'Data tidak ditemukan pada database');
            }

            $category = $dataKategori['nm_kategori'];

            // Menampilkan data dari database yang mempunyai kategori yang sesuai
            $produkList = $this->produkModel->where('kategori', $category)->findAll();
            $totalProduk = $this->produkModel->where('kategori', $category)->countAllResults();
            $totalCart = $this->cartModel->hitungCart();


            // Mengirim data ke view
            return view('frontend/kategori', [
                'dataKategori' => $dataKategori,
                'produkList' => $produkList,
                'totalProduk' => $totalProduk,
                'total_cart' => $totalCart,
            ]);

        } else {
            // Jika tidak ada data GET id pada URL, akan di redirect ke index
            return redirect()->to('/')->with('error', 'Masukkan data id.');
        }
    }
}
