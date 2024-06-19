<?php

namespace App\Controllers;

use CodeIgniter\Controller;
//model RegisterModel.php
use App\Models\RegisterModel;
// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//require_once 'C:\xampp\htdocs\platek\vendor\autoload.php';

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
    // dd($bukti_pembayaran->getName());
    //menyimpan data ke database
    $this->registerModel->save([
      'nama' => $this->request->getPost('nama'),
      'email' => $this->request->getPost('email'),
      'no_telp' => $this->request->getPost('no_telp'),
      'afiliasi' => $this->request->getPost('afiliasi'),
      'pembayaran' => $bukti_pembayaran->getName(),
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s')
    ]);

    // // Menyimpan data ke file Excel
    // $spreadsheet = new Spreadsheet();
    // $sheet = $spreadsheet->getActiveSheet();
    // $sheet->setCellValue('A1', 'Nama');
    // $sheet->setCellValue('B1', 'Email');
    // $sheet->setCellValue('C1', 'No. Telp');
    // $sheet->setCellValue('D1', 'Afiliasi');
    // $sheet->setCellValue('E1', 'Link WA');

    // $sheet->setCellValue('A2', $this->request->getPost('nama'));
    // $sheet->setCellValue('B2', $this->request->getPost('email'));
    // $sheet->setCellValue('C2', $this->request->getPost('no_telp'));
    // $sheet->setCellValue('D2', $this->request->getPost('afiliasi'));
    // $sheet->setCellValue('E2', $this->request->getPost('link_wa'));

    // $writer = new Xlsx($spreadsheet);
    // $filePath = WRITEPATH . 'uploads/registration_data.xlsx';
    // $writer->save($filePath);

    // // Mengunggah bukti pembayaran
    // $file = $this->request->getFile('bukti_pembayaran');
    // if ($file->isValid() && !$file->hasMoved()) {
    //   $file->move(WRITEPATH . 'uploads');
    // }

    return redirect()->to(base_url('/'))->with('success', 'Pendaftaran berhasil disimpan.');
  }
}
