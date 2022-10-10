<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jadwal extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_jadwal'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'tanggal'       => [
				'type'           => 'DATE',
			],
			'waktu_keberangkatan'      => [
				'type'           => 'TIME',
			],
		]);
		$this->forge->addKey('id_jadwal', TRUE);
		$this->forge->createTable('jadwal', TRUE);
    }
    public function down()
    {
        $this->forge->dropTable('jadwal');
    }
}
