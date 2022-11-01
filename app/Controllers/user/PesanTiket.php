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

        if(!$this->validate([
            'nama'=>'required',
            'email'=>'required',
            'no_hp'=>'required',
            'penumpang' => 'required',
            'id_perjalanan'=>'required',
            'id_bus'=>'required',
            'tipe_bus'=>'required',
        ])){
            return redirect()->to('/tit');
        }

        $tiket = new TiketModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'id_perjalanan' => $this->request->getPost('id_perjalanan'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('no_hp'),
            'penumpang' => $this->request->getPost('penumpang'),
            'id_bus' => $this->request->getPost('id_bus')
        ];
        $tiket->save($data);
<<<<<<< Updated upstream
        return redirect()->to('/');
=======
        // return redirect()->to('/PembayaranTiket');
>>>>>>> Stashed changes
    }
}
