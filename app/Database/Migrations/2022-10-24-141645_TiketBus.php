<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TiketBus extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_tiket'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama'       => [
				'type'           => 'VARCHAR',
                'constraint' => '50'
			],
			'id_perjalanan'      => [
				'type'           => 'INT',
                'constraint' => '50'
			],
			'email'      => [
				'type'           => 'VARCHAR',
                'constraint' => '50'
			],
            'no_hp'      => [
				'type'           => 'INT',
                'constraint' => '50'
			],
			'penumpang'      => [
				'type'           => 'INT',
                'constraint' => '50'
			],

            'id_bus'      => [
				'type'           => 'INT',
                'constraint' => '50'
			],
			
            'id_tipe'      => [
				'type'           => 'INT',
                'constraint' => '50'
			],
		]);
		$this->forge->addKey('id_tiket', TRUE);
		$this->forge->createTable('tiket_bus', TRUE);
    }
    public function down()
    {
        $this->forge->dropTable('tiket_bus');
    }
}
