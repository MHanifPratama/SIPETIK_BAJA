<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NomorKursi extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nomor_kursi'  => 1
                
            ],
            [
                'nomor_kursi'  => 2
                
            ],
            [
                'nomor_kursi'  => 3
                
            ],
            [
                'nomor_kursi'  => 4
                
            ],
            [
                'nomor_kursi'  => 5
                
            ],
            [
                'nomor_kursi'  => 6
                
            ],
            [
                'nomor_kursi'  => 7
                
            ],
            [
                'nomor_kursi'  => 8
                
            ],
            [
                'nomor_kursi'  => 9
                
            ],
            [
                'nomor_kursi'  => 10
                
            ],
            [
                'nomor_kursi'  => 11
                
            ],
            [
                'nomor_kursi'  => 12
                
            ],
            [
                'nomor_kursi'  => 13
                
            ],
            [
                'nomor_kursi'  => 14
                
            ],
            [
                'nomor_kursi'  => 15
                
            ],
            [
                'nomor_kursi'  => 16
                
            ],
            [
                'nomor_kursi'  => 17
                
            ],
            [
                'nomor_kursi'  => 18
                
            ],
            [
                'nomor_kursi'  => 19
                
            ],
            [
                'nomor_kursi'  => 20
                
            ],
        ];
        $this->db->table('kursi')->insertBatch($data);
    }
}
