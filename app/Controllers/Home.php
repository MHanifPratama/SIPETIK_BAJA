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

    public function loginIndex()
    {
        $bus = new BusModel();
        $dataBus = $bus->getAllData();
        $data = [
            'title' => 'Bus',
            'bus' => $dataBus
        ];
        // echo var_dump($data);
         return view('pages/halaman_userLogin',$data);
        // return redirect()->to('/');
    }

    // public function pesanTiket()
    // {
    //     $bus = new BusModel();
    //     $perjalanan = new Perjalanan();
    //     $tipeBus = new TipeBus();

    //     $dataBus = $bus->findAll();
    //     $dataTipeBus = $tipeBus->findAll();
    //     $dataPerjalanan = $perjalanan->findAll();
    //     $data = [
    //         'title' => 'Bus',
    //         'bus' => $dataBus,
    //         'tipeBus' => $dataTipeBus,
    //         'perjalanan' => $dataPerjalanan
            
    //     ];
 
    //      return view('user/halaman_utama',$data);
    //     // return redirect()->to('/');
    // }

    


    public function list()
    {
 
         return view('user/sebelum_home');
        // return redirect()->to('/');
    }

    public function ayang()
    {
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
 
 
         return view('user/pesan_tiket',$data);
        // return redirect()->to('/');
    }



    
}
