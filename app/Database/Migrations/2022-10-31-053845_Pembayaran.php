<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembayaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_pembayaran' => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'kode_pembayaran'       => [
				'type'           => 'INT',
				'constraint'     => '255'
			],
			'total_pembayaran'       => [
				'type'           => 'INT',
				'constraint'     => '255'
			],
            'id_perjalanan'      => [
				'type'           => 'INT',
                'constraint' => '50'
			],
			
            'id_tipe'      => [
				'type'           => 'INT',
                'constraint' => '50'
			],
            'id_jadwal'      => [
				'type'           => 'INT',
                'constraint' => '50'
			],

		]);
		$this->forge->addKey('id_pembayaran', TRUE);
		$this->forge->createTable('pembayaran', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran');
    }
}
