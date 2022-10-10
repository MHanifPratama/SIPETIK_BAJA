<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Supir extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_supir'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama_supir'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '1000'
			],
			'nomor_hp_supir'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '15',
			],
		]);
		$this->forge->addKey('id_supir', TRUE);
		$this->forge->createTable('supir', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('supir');
    }
}
