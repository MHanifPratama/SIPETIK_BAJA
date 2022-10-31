<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\BusModel;
use App\Models\TiketModel;
use App\Models\Jadwal;
use App\Models\Perjalanan;
use App\Models\TipeBus;

class PembayaranTiket extends BaseController
{
    public function Pembayaran()
    {


        $data = [
            'tipeBus' => $this -> request -> getPost('id_tipe'),
            'tujuan' => $this -> request -> getPost('id_perjalanan'),
            // 'asal' => $this -> request -> getPost('asal')
        ];
        $tiket = new TiketModel();
        $dataTiket = $tiket->search($data);
        $data = [

            'tiket' => $dataTiket
        ];

 
        return view('user\pembayaran\pembayaran_tiket',$data);
    }
}
