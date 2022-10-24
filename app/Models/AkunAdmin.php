<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunAdmin extends Model
{
    protected $table      = 'akun_admin';
    protected $primaryKey = 'id_akun_admin';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_akun_admin','username', 'password','email','nama_admin'];

}
?>