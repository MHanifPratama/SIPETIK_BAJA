<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bus extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_bus'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama_bus'       => [
				'type'           => 'VARCHAR',
                'constraint' => '1000'
			],
			'id_tipe'      => [
				'type'           => 'INT',
                'constraint' => '50'
			],
            'id_supir'      => [
				'type'           => 'INT',
                'constraint' => '50'
			],
            'id_perjalanan'      => [
				'type'           => 'INT',
                'constraint' => '50'
			],
            'id_jadwal'      => [
				'type'           => 'INT',
                'constraint' => '50'
			],
		]);
		$this->forge->addKey('id_bus', TRUE);
		$this->forge->createTable('bus', TRUE);
    }
    public function down()
    {
        $this->forge->dropTable('bus');
    }
}
