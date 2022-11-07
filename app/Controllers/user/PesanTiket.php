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
        $tipeBus = new TipeBus();
        $jadwal = new Jadwal();

        $dataBus = $bus->getAllDataFromAllTable();
        $dataTipeBus = $tipeBus->findAll();
        $dataPerjalanan = $perjalanan->findAll();
        $dataJadwal = $jadwal->findAll();
        $data = [
            'title' => 'Bus',
            'bus' => $dataBus,
            'tipeBus' => $dataTipeBus,
            'perjalanan' => $dataPerjalanan,
            'jadwal' => $dataJadwal,
            
        ];
 
         return view('user/halaman_utama',$data);
    }


    public function pesanTiket($id){
        $bus = new BusModel();
        $session = session();
        $dataBus = $bus->join('tipe_bus','tipe_bus.id_tipe=bus.id_tipe')
        ->join('perjalanan','perjalanan.id_perjalanan=bus.id_perjalanan')
        ->join('supir','supir.id_supir=bus.id_supir')
        ->join('jadwal','jadwal.id_jadwal=bus.id_jadwal')
        ->find($id);
        $data = [
            'title' => 'Bus',
            'bus' => $dataBus,
            'session' => $session,
        ];
        return view('user/homepage_User',$data);
    }
    public function tambahTiketKeDb(){
        $session = session();
        if(!$this->validate([
            'nama'=>'required',
            'email'=>'required',
            'no_hp'=>'required',
            'penumpang' => 'required',
            'id_bus'=>'required',
            'total_harga'=>'required'
        ])){
            return redirect()->to('/tit');
        }

        $tiket = new TiketModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('no_hp'),
            'penumpang' => $this->request->getPost('penumpang'),
            'id_bus' => $this->request->getPost('id_bus'),
            'total_harga' => $this->request->getPost('total_harga')
        ];
        // $code = $this->request->getPost('no_hp');
        // $Kodetiket = "KSB".$code;
        // session()->setFlashdata('kode', $Kodetiket);
        $tiket->save($data);
        // echo var_dump($data);
        return redirect()->to('/PembayaranTiket');
    }
}

