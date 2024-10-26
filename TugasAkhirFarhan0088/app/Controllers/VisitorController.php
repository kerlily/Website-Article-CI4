<?php

namespace App\Controllers;

use App\Models\VisitorModel;
use CodeIgniter\Controller;

class VisitorController extends Controller
{
    public function index()
    {
        $visitorModel = new VisitorModel();
        $data['totalVisitors'] = $visitorModel->getTotalVisitors();

        // Load view dengan template AdminLTE
        echo view('adminlte_template/header');
        echo view('adminlte_template/sidebar');
        echo view('visitor/index', $data);
        echo view('adminlte_template/footer');
    }
}
