<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AkunUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_akun'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '1000'
			],
			'password'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '1000',
				'default'        => 'Unila Jaya',
			],
			'email'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '1000',
			],
			'nama_pelanggan'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '1000',
			],
			'nomor_hp_pelanggan'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '15',
			],
		]);
		$this->forge->addKey('id_akun', TRUE);
		$this->forge->createTable('akun_user', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('akun_user');
    }
}
