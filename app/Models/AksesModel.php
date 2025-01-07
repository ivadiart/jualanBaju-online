<?php

namespace App\Models;
use CodeIgniter\Model;

class AksesModel extends Model
{
    protected $table = 'akses_admin';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 'password','level'
    ];

    public function getAkses()
    {
        return $this->findAll();
    }

    public function tambah_akses($data)
    {
        return $this->insert($data);
    }

    public function update_akses($id,$data)
    {
        return $this->update($id,$data);
    }

    public function hapus_akses($id)
    {
        return $this->delete($id);
    }

}