<?php

namespace App\Controllers\front;

use App\Controllers\BaseController;

class homepage extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}
