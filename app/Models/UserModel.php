<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'login_user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = [
        'username', 'email','password'
    ];

    public function getUser($email, $password)
    {
        return $this->where('email', $email)
                    ->where('password', $password)
                    ->first();
    }

    public function tambah_user($data)
    {
        return $this->insert($data);
    }

    public function getAkses()
    {
        return $this->findAll();
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