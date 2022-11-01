<?php

namespace App\Models;

use CodeIgniter\Model;

class Pembayaran extends Model
{
    protected $table      = 'pembayaran';
    protected $primaryKey = 'id_pembayaan';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['kode_pembayaran', 'id_tipe','id_perjalanan','id_jadwal'];

    public function getAllDataFromAllTable(){
        return $this->db->table('pembayaran')
        ->join('tipe_bus','tipe_bus.id_tipe=pembayaran.id_tipe')
        ->join('perjalanan','perjalanan.id_perjalanan=pembayaran.id_perjalanan')
        ->join('jadwal','jadwal.id_jadwal=perjalanan.id_jadwal')
        ->get()->getResultArray();
    }

    
}
