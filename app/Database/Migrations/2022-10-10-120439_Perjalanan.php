<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Perjalanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_perjalanan'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'kota_awal'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '1000'
			],
			'kota_akhir'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '1000',
			],
            'total_km'      => [
				'type'           => 'INT',
				'constraint'     => 50,
			]
		]);
		$this->forge->addKey('id_perjalanan', TRUE);
		$this->forge->createTable('perjalanan', TRUE);
    }
    public function down()
    {
        $this->forge->dropTable('perjalanan');
    }
}
