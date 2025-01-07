<?php

namespace App\Models;
use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'id_cart';
    protected $allowedFields = [
        'id_cart','img_cart','nm_produk','harga','qty'
    ];

    public function getCart()
    {
        return $this->findAll();
    }

    public function hitungCart()
    {
        return $this->countAll();
    }

    public function detailsProduk($id)
    {
        return $this->where(['id_cart' => $id])->first();
    }

    public function tambah_cart($data)
    {
        return $this->insert($data);
    }

    public function hapus_cart($id)
    {
        return $this->delete($id);
    }

    public function deleteItemsByCartId($cartId)
    {
        return $this->where('id_cart', $cartId)->delete();
    }

    public function update_cart($id,$data)
    {
        return $this->update($id,$data);
    }

    public function checkoutProduk($id)
    {
        return $this->where(['id_cart' => $id])->first();
    }


}