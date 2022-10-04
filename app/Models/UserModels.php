<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModels extends Model
{
    protected $table      = 'akun_user';
    protected $primaryKey = 'id_akun';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['username', 'password', 'id_pelanggan', 'email','nama_pelanggan','nomor_hp_pelanggan'];
}
?>