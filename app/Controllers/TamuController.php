<?php

namespace App\Controllers;
use App\Models\BukutamuModel;

class TamuController extends BaseController
{
    protected $bukutamuModel;

    public function index()
    {
        $this->bukutamuModel = new BukutamuModel();

        $data['bukutamu'] = $this->bukutamuModel->getBukutamu();

        
        echo view('admin/index',$data);
        echo view('admin/data_bukutamu',$data);
        return view('admin/footer',$data);
    }

    public function hapus($id)
    {
        $this->bukutamuModel = new BukutamuModel();
        $this->bukutamuModel->hapus_bukutamu($id);
        return redirect()->to(base_url('admin/data_bukutamu'))->with('alert', 'hapus_bukutamu');
    }   

}