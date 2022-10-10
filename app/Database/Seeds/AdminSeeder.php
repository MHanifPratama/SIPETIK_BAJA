<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username'  => 'admin',
                'password'  =>  123,
                
            ],
            [
                'username'  => 'john',
                'password'  =>  123
            ]
        ];
        $dataJadwal = [
            [
                'tanggal'  =>  '2022-10-10',
                'waktu_keberangkatan'  =>  '19:25:47',           
            ],
        ];
        $dataPerjalanan = [
            [
                'kota_awal'  => 'Bandar Lampung',
                'kota_akhir'  =>  'Pringsewu',
                'total_km'  => 42,
                
            ],
        ];
        $dataSupir = [
            [
                'nama_supir'  => 'Michael Schumacher',
                'nomor_hp_supir'  =>  '081246466969',          
            ],
            [
                'nama_supir'  => 'Ayrton Senna',
                'nomor_hp_supir'  =>  '081269694646',          
            ],
        ];
        $dataTipeBus = [
            [
                'tipe'  => 'EKONOMI',
                'harga'  =>  5000,
            ],
        ];
        $this->db->table('tipe_bus')->insertBatch($dataTipeBus);
        $this->db->table('supir')->insertBatch($dataSupir);
        $this->db->table('perjalanan')->insertBatch($dataPerjalanan);
        $this->db->table('jadwal')->insertBatch($dataJadwal);
        $this->db->table('admin')->insertBatch($data);
    }
    
}
