<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RegisterModel;

class Admin extends BaseController
{
    protected $registerModel;
    public function __construct()
    {
        $this->registerModel = new RegisterModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Seluruh pendaftar',
            'pendaftar' => $this->registerModel->getRegister()
        ];
        return view('admin/index', $data);
    }

    public function acc(){
        $data = [
            'title' => 'Pendaftar yang sudah di acc',
            'pendaftar' => $this->registerModel->getRegister()
        ];
        return view('admin/acc', $data);
    }

    public function pending(){
        $data = [
            'title' => 'Pendaftar yang belum di acc',
            'pendaftar' => $this->registerModel->getRegister()
        ];
        return view('admin/pending', $data);
    }

    public function accPembayaran($id){
        $this->registerModel->accPembayaran($id);
        return redirect()->to('/admin');
    }

    public function pendingPembayaran($id){
        $this->registerModel->pendingPembayaran($id);
        return redirect()->to('/admin');
    }

    public function delete($id){
        $this->registerModel->delete($id);
        return redirect()->to('/admin');
    }

    public function view($id){
        $data = [
            'title' => 'Detail Pendaftar',
            'pendaftar' => $this->registerModel->getRegister($id)
        ];
        return view('admin/view', $data);
    }
}