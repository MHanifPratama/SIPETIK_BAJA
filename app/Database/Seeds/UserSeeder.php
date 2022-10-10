<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username'  => 'admin',
                'password'  =>  123,
                'email'  =>  'mhanifp27@gmail.com',
                'nama_pelanggan'  =>  'M Hanif Pratama',
                'nomor_hp_pelanggan'      =>'081272562034'
                
            ],
        ];
        $this->db->table('akun_user')->insertBatch($data);
    }
    
}