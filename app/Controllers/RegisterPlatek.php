<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RegisterModel;

require_once 'C:\xampp\htdocs\platek\vendor\autoload.php';

class RegisterPlatek extends Controller
{
  protected $registerModel;

  public function __construct()
  {
    $this->registerModel = new RegisterModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Form Pendaftaran'
    ];
    return view('register_platek', $data);
  }

  public function save()
  {
    $validation = \Config\Services::validation();
    $validation->setRules([
      'nama' => 'required',
      'email' => 'required|valid_email',
      'no_telp' => 'required',
      'afiliasi' => 'required',
      'bukti_pembayaran' => 'uploaded[bukti_pembayaran]|max_size[bukti_pembayaran,1024]|ext_in[bukti_pembayaran,jpg,jpeg,png,pdf]',
    ]);

    if (!$validation->withRequest($this->request)->run()) {
      return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }

    $bukti_pembayaran = $this->request->getFile('bukti_pembayaran');
    $bukti_pembayaran->move('images');

    $this->registerModel->save([
      'nama' => $this->request->getPost('nama'),
      'email' => $this->request->getPost('email'),
      'no_telp' => $this->request->getPost('no_telp'),
      'afiliasi' => $this->request->getPost('afiliasi'),
      'pembayaran' => $bukti_pembayaran->getName(),
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s')
    ]);
    $title = 'Pendaftaran Berhasil';
    return view('success', compact('title'));
  }
}
