<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

use App\Models\kategori_M;

class kategori extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "<h1>BELAJAR CI 4</h1>";
    }

    public function select()
    {

        $model = new kategori_M();
        $kategori = $model -> findALL();


        $data = [
            'judul' => 'SELECT DATA DARI CONTROLLER',
            'kategori' => $kategori
        ];

        return view("kategori/select",$data);

    }

    public function selectWhere($id = null)
    {
        echo "<h3>Menampilkan data yang dipilih : $id</h3>";
    }

    public function formInsert()
    {
        return view("kategori/forminsert");
    }

    public function formUpdate($id=null)
    {
        echo view("template/header");
        echo view("kategori/update");
        echo view("template/footer");
    }

    public function update($id = null)
    {
        echo "<h3>Proses update data</h3>";
    }

    public function delete($id = null)
    {
        echo "<h3>Proses delete data</h3>";
    }
}
