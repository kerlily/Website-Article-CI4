<?php

namespace App\Controllers;
use App\Models\LoginModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    public function index()
    {
        helper('form'); 
        return view('loginview/login');
    }
    public function proseslogin()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $LoginModel = new LoginModel();
        $user = $LoginModel->compare($username, $password);

        if ($user) {
            return redirect()->to('/magang/home');
        }else{
            return redirect()->to('/login');
        }

    }
}

