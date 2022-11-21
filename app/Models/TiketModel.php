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
        'id_bus','total_harga','validasi_pembayaran','foto_bukti_pembayaran','kode_tiket',	'tanggal_pemesanan','tanggal_pelunasan','nomor_kursi'];


    
    public function getAllDataFromAllTable(){
        return $this->db->table('tiket_bus')
        ->join('tipe_bus','tipe_bus.id_tipe=tiket_bus.id_tipe')
        ->join('bus','bus.id_bus=tiket_bus.id_bus')
        ->join('perjalanan','perjalanan.id_perjalanan=tiket_bus.id_perjalanan')
        ->join('jadwal','jadwal.id_jadwal=tiket_bus.id_jadwal')
        ->get()->getResultArray();
    }
    public function search($harga){
        return $this->table('tiket_bus')
        ->join('tipe_bus','tipe_bus.id_tipe=bus.id_tipe')
        ->join('perjalanan','perjalanan.id_perjalanan=bus.id_perjalanan')
        ->join('jadwal','jadwal.id_jadwal=bus.id_jadwal')
        ->like('tiket_bus.id_tiket',$harga['harga'])

        ->get() ->getResultArray();
        
        // return $this->table('bus')->like('nama_bus','Surya Kencana');
    }

    public function getKodePembayaran() {
        return $this->db->table('tiket_bus');
    }
    
}
