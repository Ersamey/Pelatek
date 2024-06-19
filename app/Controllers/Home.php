<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    protected $registerModel;

    public function __construct()
    {
        $this->registerModel = new \App\Models\RegisterModel();
    }

    public function index()
    {
        return view('home_platek', [
            'title' => 'Pelatihan Teknologi',
            'sum' => $this->registerModel->getSum(),
        ]);
    }
}
