<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_admin'          => [
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

		]);
		$this->forge->addKey('id_admin', TRUE);
		$this->forge->createTable('admin', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }
}
