<?php

namespace App\Controllers;

class menu extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function select()
    {
        echo "<h1>UNTUK MENAMPILKAN DATA</h1>";
    }

    public function update($id=null, $nama=null)
    {
        echo "<h1>Untuk update data dengan id : $id  $nama </h1>";
    }

}
