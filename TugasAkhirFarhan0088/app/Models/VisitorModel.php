<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorModel extends Model
{
    protected $table = 'visitors';

    public function getTotalVisitors()
    {   
        return $this->countAllResults();
    }
}
