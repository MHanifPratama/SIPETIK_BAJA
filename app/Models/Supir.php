<?php

namespace App\Models;

use CodeIgniter\Model;

class Supir extends Model
{
    protected $table      = 'supir';
    protected $primaryKey = 'id_supir';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_supir', 'nama_supir', 'nomor_hp_supir'];
}