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
                'password'  =>  password_hash(123,PASSWORD_BCRYPT),
                
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
            [
                'kota_awal'  => 'Pringsewu',
                'kota_akhir'  =>  'Bandar Lampung',
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
            [
                'tipe'  => 'Bisnis',
                'harga'  =>  10000,
            ],
            [
                'tipe'  => 'Ekslusif',
                'harga'  =>  15000,
            ],
        ];
        $dataBus = [
            [
                'nama_bus'  =>  'Surya Kencana',
                'id_tipe'  => 1,
                'id_supir'  =>  1,
                'id_perjalanan'  => 1,
                'id_jadwal'  =>  1,
            ],
            [
                'nama_bus'  =>  'Harapan Jaya',
                'id_tipe'  => 2,
                'id_supir'  =>  2,
                'id_perjalanan'  => 2,
                'id_jadwal'  =>  2,
            ],
            [
                'nama_bus'  =>  'Lele Group',
                'id_tipe'  => 1,
                'id_supir'  =>  2,
                'id_perjalanan'  => 2,
                'id_jadwal'  =>  1,
            ],
            [
                'nama_bus'  =>  'Harapan Bersama',
                'id_tipe'  => 1,
                'id_supir'  =>  2,
                'id_perjalanan'  => 1,
                'id_jadwal'  =>  1,
            ],
        ];
        $this->db->table('bus')->insertBatch($dataBus);
        $this->db->table('tipe_bus')->insertBatch($dataTipeBus);
        $this->db->table('supir')->insertBatch($dataSupir);
        $this->db->table('perjalanan')->insertBatch($dataPerjalanan);
        $this->db->table('jadwal')->insertBatch($dataJadwal);
        $this->db->table('admin')->insertBatch($data);
    }
    
}
