<?php

namespace App\Controllers;
use App\Models\BusModel;
use App\Models\TiketModel;
use App\Models\Jadwal;
use App\Models\Perjalanan;
use App\Models\Supir;
use App\Models\TipeBus;

class Home extends BaseController
{
    public function index()
    {
        $bus = new BusModel();
        $dataBus = $bus->getAllData();
        $data = [
            'title' => 'Bus',
            'bus' => $dataBus
        ];
        // echo var_dump($data);
         return view('pages/halaman_user',$data);
        // return redirect()->to('/');
    }

    public function pesanTiket()
    {
        $bus = new BusModel();
        $perjalanan = new Perjalanan();
        $tipeBus = new TipeBus();

        $dataBus = $bus->findAll();
        $dataTipeBus = $tipeBus->findAll();
        $dataPerjalanan = $perjalanan->findAll();
        $data = [
            'title' => 'Bus',
            'bus' => $dataBus,
            'tipeBus' => $dataTipeBus,
            'perjalanan' => $dataPerjalanan
            
        ];
 
         return view('user/halaman_utama',$data);
        // return redirect()->to('/');
    }

    public function processPesanTiket() {
        if(!$this->validate([
            'nama'=>'required',
            'email'=>'required',
            'no_hp'=>'required',
            'penumpang' => 'required',
            'id_perjalanan'=>'required',
            'id_bus'=>'required',
            'id_tipe'=>'required',
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
            'id_bus' => $this->request->getPost('id_bus'),
            'id_tipe' => $this->request->getPost('id_tipe')
        ];
        $tiket->save($data);
        return redirect()->to('/');

    }


    public function list()
    {
 
         return view('user/table_user');
        // return redirect()->to('/');
    }
    
}
