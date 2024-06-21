<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{
    protected $table = 'pendaftar';
    protected $useTimeStamps = true;
    protected $allowedFields = ['nama', 'email', 'no_telp', 'afiliasi', 'pembayaran', 'alamat', 'created_at', 'updated_at'];

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

}
