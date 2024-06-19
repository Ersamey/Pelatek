<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{
    protected $table = 'pendaftar';
    protected $useTimeStamps = true;
    protected $allowedFields = ['nama', 'email', 'no_telp', 'afiliasi', 'pembayaran', 'created_at', 'updated_at'];

    public function getSum()
    {
        return $this->table('pendaftar')->countAll();
    }
}
