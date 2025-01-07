<?php

namespace App\Models;
use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'akses_admin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'level'];

    public function getLogin($username, $password)
    {
        return $this->where('username', $username)
                    ->where('password', $password)
                    ->first();
    }
}
