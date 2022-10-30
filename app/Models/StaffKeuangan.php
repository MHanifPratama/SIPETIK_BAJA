<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffKeuangan extends Model
{
    protected $table      = 'akun_staff_keuangan';
    protected $primaryKey = 'id_akun_staff_keuangan';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_akun_staff_keuangan', 'email', 'nama_staff','password','no_hp'];
}