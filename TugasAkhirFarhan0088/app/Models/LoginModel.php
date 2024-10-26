<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table            = 'tb_user';
    protected $primaryKey       = 'id_user';
    protected $allowedFields    = ['id_user','username','password'];

    public function compare($username, $password)
    {
        $user = $this->where('username', $username)
        ->first();
        if ($user && password_verify($password,$user['password'] ) ){
            return $user;
        }else{
            return null;
        }
    }
}
