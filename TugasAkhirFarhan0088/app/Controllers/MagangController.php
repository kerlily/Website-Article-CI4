<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\models\MhsModel;

class MagangController extends BaseController
{
    protected $masuk;

    public function __construct(){
        $this->masuk = new MhsModel();
    }

    public function index()
    {
        return view('magangview/home');
    }

    public function datamhs()
    {
        $tampildata = $this->masuk->findAll();
        $data = [
            'showdata' => $tampildata
        ];

        $keyword = $this->request->getVar('search');

         $tampildata = $this->masuk->searchData($keyword);

        $data = [
        'showdata' => $tampildata,
        'keyword' => $keyword,
    ];

        return view('magangview/datamhsview', $data);
    }

    public function tambahdata()
    {
        helper('form');
        return view('magangview/tambahdataview');
    }

    public function input()
    {
        return view('magangview/tambahdataview');
    }

    public function inputmasuk(){
        $id = $this->request->getVar('id');
        $npm = $this->request->getVar('npm');
        $nama = $this->request->getVar('nama');
        $jeniskelamin = $this->request->getVar('jenis_kelamin');
        $prodi = $this->request->getVar('program_studi');
        $tempatkp = $this->request->getVar('tempatkp');
        $tanggalpkl = $this->request->getVar('tanggalpkl');
        $tanggalselesai = $this->request->getVar('tanggal_selesai');
        $alamat = $this->request->getVar('alamat');  
        $telepon = $this->request->getVar('telepon'); 

        $this->masuk->insert([
            'id' => $id,
            'npm' => $npm,
            'nama' => $nama,
            'jenis_kelamin' => $jeniskelamin,
            'program_studi' => $prodi,
            'tempatkp' => $tempatkp,
            'tanggalpkl' => $tanggalpkl,
            'tanggal_selesai' => $tanggalselesai,
            'alamat' => $alamat,
             'telepon' => $telepon,

        ]);

        return redirect()->to('/magang/datamhsview');
    }
    
    public function hapusmasuk($id){
        $hapus = $this->masuk->find($id);
        if($hapus){
            $this->masuk->delete($hapus);
            return redirect()->to('/magang/datamhsview');
        }

    }

    public function edit($id)
    {
        helper('form');
        $data['mahasiswa'] = $this->masuk->find($id);
    
        return view('magangview/editdataview', $data);
    }

    public function updatemasuk()
    {
        $id = $this->request->getVar('id');
        $npm = $this->request->getVar('npm');
        $nama = $this->request->getVar('nama');
        $jeniskelamin = $this->request->getVar('jenis_kelamin');
        $prodi = $this->request->getVar('program_studi');
        $tempatkp = $this->request->getVar('tempatkp');
        $tanggalpkl = $this->request->getVar('tanggalpkl');
        $tanggalselesai = $this->request->getVar('tanggal_selesai');
        $alamat = $this->request->getVar('alamat');  
        $telepon = $this->request->getVar('telepon'); 

        $this->masuk->update($id, [
            'npm' => $npm,
            'nama' => $nama,
            'jenis_kelamin' => $jeniskelamin,
            'program_studi' => $prodi,
            'tempatkp' => $tempatkp,
            'tanggalpkl' => $tanggalpkl,
            'tanggal_selesai' => $tanggalselesai,
            'alamat' => $alamat,
            'telepon' => $telepon,
        ]);

        return redirect()->to('/magang/datamhsview');
    }

    public function detail($id)
    {
    $data['mahasiswa'] = $this->masuk->find($id);
   
    return view('magangview/detaildataview', $data);
    }   

    
}
    