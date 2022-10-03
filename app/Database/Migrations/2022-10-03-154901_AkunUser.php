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
				'constraint'     => '10000'
			],
			'password'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100000,
				'default'        => 'Unila Jaya',
			],
			'id_pelanggan' => [
				'type'           => 'INT',
				'null'           => true,
			],
			'email'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '10000',
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
