<?php

namespace App\Models;

use CodeIgniter\Model;

class BusModel extends Model
{
    protected $table      = 'bus';
    protected $primaryKey = 'id_bus';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_bus', 'id_tipe','id_perjalanan','id_jadwal','id_supir'];

    public function getAllDataFromAllTable(){
        return $this->db->table('bus')
        ->join('tipe_bus','tipe_bus.id_tipe=bus.id_tipe')
        ->join('perjalanan','perjalanan.id_perjalanan=bus.id_perjalanan')
        ->join('supir','supir.id_supir=bus.id_supir')
        ->join('jadwal','jadwal.id_jadwal=bus.id_jadwal')
        ->get()->getResultArray();
    }
    public function getAllData(){
        return $this->db->table('bus')
        ->join('tipe_bus','tipe_bus.id_tipe=bus.id_tipe')
        ->join('perjalanan','perjalanan.id_perjalanan=bus.id_perjalanan')
        ->join('supir','supir.id_supir=bus.id_supir')
        ->join('jadwal','jadwal.id_jadwal=bus.id_jadwal')
            ->groupBy('kota_akhir')
            ->groupBy('tipe')
            ->groupBy('kota_awal')
            ->get()->getResultArray();
    }


    public function search($tipeBus){
        return $this->table('bus')
        ->join('tipe_bus','tipe_bus.id_tipe=bus.id_tipe')
        ->join('perjalanan','perjalanan.id_perjalanan=bus.id_perjalanan')
        ->join('jadwal','jadwal.id_jadwal=bus.id_jadwal')
        ->like('bus.id_tipe',$tipeBus['tipeBus'])
        ->like('kota_awal',$tipeBus['asal'])
        ->like('kota_akhir',$tipeBus['tujuan'])
        ->get() ->getResultArray();
        
        // return $this->table('bus')->like('nama_bus','Surya Kencana');
    }

}