<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TipeBus extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_tipe'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'tipe'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '1000'
			],
			'harga'      => [
				'type'           => 'INT',
				'constraint'     => 50,
			],
		]);
		$this->forge->addKey('id_tipe', TRUE);
		$this->forge->createTable('tipe_bus', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tipe_bus');
    }
}
