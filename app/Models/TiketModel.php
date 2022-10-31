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

    public function search($tipeBus){
        return $this->table('tiket_bus')
        ->join('tipe_bus','tipe_bus.id_tipe=tiket_bus.id_tipe')
        ->join('perjalanan','perjalanan.id_perjalanan=tiket_bus.id_perjalanan')
        // ->join('jadwal','jadwal.id_jadwal=tiket_bus.id_jadwal')
        // ->like('tiket_bus.id_tipe',$tipeBus['id_tipe'])
        // ->like('kota_awal',$tipeBus['id_perjalanan'])

        ->get() ->getResultArray();
        
        // return $this->table('bus')->like('nama_bus','Surya Kencana');
    }

}
