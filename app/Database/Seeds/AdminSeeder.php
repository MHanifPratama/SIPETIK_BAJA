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
        $this->db->table('admin')->insertBatch($data);
    }
    
}
