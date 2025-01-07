<?php

namespace App\Models;
use CodeIgniter\Model;

class CheckoutModel extends Model
{
    protected $table = 'checkout';
    protected $primaryKey = 'id_checkout';
    protected $allowedFields = [
        'no_pesanan','nama','telp','alamat','alamat_jln','alamat_blok','pengiriman','total_bayar','status'
    ];

    public function transaksi($data)
    {
        return $this->insert($data);
    }

    public function generateInvoiceNumber()
    {
        $now = new \DateTime();
        $timestamp = $now->format('YmdHis');
        $random = rand(1, 9);
        return $timestamp . $random;
    }

    public function getCheckout()
    {
        return $this->findAll();
    }

    public function update_status($id,$data)
    {
        return $this->update($id,$data);
    }


}

