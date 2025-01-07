<?php

namespace App\Models;
use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nm_produk', 'nm_brand', 'desc_produk', 'spesifikasi_produk', 
        'kategori', 'harga', 'picture'
    ];

    public function getProduk()
    {
        return $this->findAll();
    }

    public function hitungProduk()
    {
        return $this->countAll();
    }

    public function popularProduk()
    {
        return $this->orderBy('nm_produk','ASC')->findAll();
    }

    public function baruProduk()
    {
        return $this->orderBy('id','DESC')->findAll();
    }

    public function detailsProduk($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function tambah_barang($data)
    {
        return $this->insert($data);
    }

    public function updateProduk($id,$data)
    {
        return $this->update($id,$data);
    }

    public function updateImg($id,$data)
    {
        return $this->update($id,$data);
    }

    public function update_desc($id,$data)
    {
        return $this->update($id,$data);
    }

    public function hapusProduk($id)
    {
        return $this->delete($id);
    }
}
