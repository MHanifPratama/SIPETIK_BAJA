<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kursi extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_kursi' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'nomor_kursi'       => [
				'type'           => 'INT',
				'constraint'     => '255'
			],
			

		]);
		$this->forge->addKey('id_kursi', TRUE);
		$this->forge->createTable('kursi', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('kursi');
    }
}
