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
                'password'  =>  password_hash(123,PASSWORD_DEFAULT),
                'email'  =>  'mhanifp27@gmail.com',
                'nama_pelanggan'  =>  'M Hanif Pratama',
                'nomor_hp_pelanggan'      =>'081272562034'
                
            ],
        ];
        $this->db->table('akun_user')->insertBatch($data);
    }
    
}