<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\BusModel;
use App\Models\TiketModel;
use App\Models\Jadwal;
use App\Models\Perjalanan;
use App\Models\Supir;
use App\Models\TipeBus;

class PesanTiket extends BaseController
{
    public function index()
    {

    }

    public function tambahTiket(){
        $bus = new BusModel();
        $perjalanan = new Perjalanan();
        $supir = new Supir();
        $jadwal = new Jadwal();
        $tipeBus = new TipeBus();

        $dataBus = $bus->findAll();
        $dataSupir = $supir->findAll();
        $dataTipeBus = $tipeBus->findAll();
        $dataJadwal = $jadwal->findAll();
        $dataPerjalanan = $perjalanan->findAll();
        $data = [
            'title' => 'Bus',
            'bus' => $dataBus,
            'supir' => $dataSupir,
            'tipeBus' => $dataTipeBus,
            'jadwal'=> $dataJadwal,
            'perjalanan' => $dataPerjalanan
        ];
    }


    public function pesanTiket(){

        $tiket = new TiketModel();
        $data = [
            'nama_bus' => $this->request->getPost('nama_bus'),
            'id_supir' => $this->request->getPost('id_supir'),
            'id_tipe' => $this->request->getPost('id_tipe'),
            'id_jadwal' => $this->request->getPost('id_jadwal'),
            'id_perjalanan' => $this->request->getPost('id_perjalanan')
        ];
        $tiket->insert($data);
    }
}
