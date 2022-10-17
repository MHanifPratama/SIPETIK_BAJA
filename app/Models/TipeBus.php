<?php

namespace App\Models;

use CodeIgniter\Model;

class TipeBus extends Model
{
    protected $table      = 'tipe_bus';
    protected $primaryKey = 'id_tipe';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_tipe', 'tipe', 'harga'];
}