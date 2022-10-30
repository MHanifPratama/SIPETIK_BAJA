<?php

namespace App\Models;

use CodeIgniter\Model;

class TiketModel extends Model
{
    protected $table            = 'tiket_bus';
    protected $primaryKey       = 'id_tiket';
    protected $useAutoIncrement = true;

    protected $allowedFields    = [
        'nama',
        'email',
        'no_hp',
        'penumpang',
        'id_perjalanan',
        'id_bus',
        'id_tipe' ];

    
    public function getAllDataFromAllTable(){
        return $this->db->table('tiket_bus')
        ->join('bus','bus.id_bus=tiket_bus.id_bus')
        ->join('perjalanan','perjalanan.id_perjalanan=tiket_bus.id_perjalanan')
        ->get()->getResultArray();
    }


}
