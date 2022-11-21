<?php

namespace App\Models;

use CodeIgniter\Model;

class Kursi extends Model
{
    protected $table      = 'kursi';
    protected $primaryKey = 'id_kursi';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_kursi', 'nomor_kursi'];
}
