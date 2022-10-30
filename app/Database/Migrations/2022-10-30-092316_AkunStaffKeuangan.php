<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AkunStaffKeuangan extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_akun_staff_keuangan' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '1000'
			],
			'nama_staff'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '1000'
			],
			'password'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '1000',
				'default'        => 'Unila Jaya',
			],
            'no_hp'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '15',
            ],
		]);
		$this->forge->addKey('id_akun_staff_keuangan', TRUE);
		$this->forge->createTable('akun_staff_keuangan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('akun_staff_keuangan');
    }
}
