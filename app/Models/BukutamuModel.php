<?php

namespace App\Models;
use CodeIgniter\Model;

class BukutamuModel extends Model
{
    protected $table = 'bukutamu';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama', 'email','komen'
    ];

    public function getBukutamu()
    {
        return $this->findAll();
    }

    public function tambah_bukutamu($data)
    {
        return $this->insert($data);
    }

    public function hapus_bukutamu($id)
    {
        return $this->delete($id);
    }

}