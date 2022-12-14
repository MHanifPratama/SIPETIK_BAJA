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
			'total_harga'      => [
				'type'           => 'INT',
                'constraint' => '50'
			],
			'validasi_pembayaran'      => [
				'type'           => 'VARCHAR',
                'constraint' => '15'
			],

			'total_harga'      => [
				'type'           => 'INT',
                'constraint' => '50'
			],
      
			'kode_tiket'      => [
				'type'           => 'VARCHAR',
                'constraint' => '255'
			],
			'tanggal_pemesanan'      => [
				'type'           => 'DATE',
			],
			'tanggal_pelunasan'      => [
				'type'           => 'DATE',
			],

			'foto_bukti_pembayaran'      => [
				'type'           => 'VARCHAR',
                'constraint' => '1000'
			],'nomor_kursi'      => [
				'type'           => 'int',
                'constraint' => '25'
			],
			'kode_tiket'      => [
				'type'           => 'VARCHAR',
                'constraint' => '255'
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
