<?php
namespace App\Models;

use CodeIgniter\Model;

class MhsModel extends Model
{
    protected $table            = 'tbl_mhs';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id', 'npm','nama','jenis_kelamin','program_studi','tempatkp','tanggalpkl','tanggal_selesai','alamat','telepon'];

    public function searchData($keyword)
{
    if ($keyword) {
        $this->like('npm', $keyword);
        $this->orLike('nama', $keyword);
    }

    return $this->findAll();
}
}
