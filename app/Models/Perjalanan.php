<?php

namespace App\Models;

use CodeIgniter\Model;

class Perjalanan extends Model
{
    protected $table      = 'perjalanan';
    protected $primaryKey = 'id_perjalanan';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_perjalanan', 'kota_awal', 'kota_akhir','total_km'];
    public function countAllData(){
        return $this->countAllResults();
    }
}