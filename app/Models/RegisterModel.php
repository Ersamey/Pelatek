<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{
    protected $table = 'pendaftar';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nama', 'email', 'no_telp', 'afiliasi', 'pembayaran', 'alamat', 'id', 'created_at', 'updated_at', 'no_registrasi'
    ];

    public function getSum()
    {
        return $this->table('pendaftar')->countAll();
    }

    public function getRegister($id = false)
    {
        if ($id == false) {
            return $this->table('pendaftar')->get()->getResultArray();
        }
        return $this->table('pendaftar')->getWhere(['id' => $id])->getRowArray();
    }

    public function accPembayaran($id)
    {
        $this->db->table('pendaftar')->update(['status' => '1'], ['id' => $id]);
    }

    public function pendingPembayaran($id)
    {
        $this->db->table('pendaftar')->update(['status' => '0'], ['id' => $id]);
    }

    public function getEvent()
    {
        return $this->db->table('detail_event')->get()->getRow();
    }

    public function getNewRegistrationNumber()
    {
        $year = date('y'); // 2 digit tahun
        $event = $this->getEvent(); // Get event details
        $eventNumber = str_pad($event->nomor_event, 2, '0', STR_PAD_LEFT); // 2 digit nomor event

        // Hitung urutan pendaftar
        $registrantsCount = $this->countAllResults();
        $registrantNumber = str_pad($registrantsCount + 1, 3, '0', STR_PAD_LEFT); // 3 digit urutan pendaftar

        return $year . $eventNumber . $registrantNumber;
    }
}
