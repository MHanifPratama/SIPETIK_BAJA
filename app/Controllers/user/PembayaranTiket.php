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
        $tiket = new TiketModel();




        return view('user\pembayaran\pembayaran_tiket');
    }



    public function pesanTiket(){

        if(!$this->validate([
            'nama'=>'required',
            'email'=>'required',
            'no_hp'=>'required',
            'penumpang' => 'required',
            'id_perjalanan'=>'required',
            'id_bus'=>'required',
            'id_tipe'=>'required',
            'id_jadwal'=>'required',
            'total_harga'=>'required'
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
            'id_tipe' => $this->request->getPost('id_tipe'),
            'id_jadwal' => $this->request->getPost('id_jadwal'),
            'total_harga' => $this->request->getPost('total_harga')
        ];
        $tiket->save($data);
        return redirect()->to('/PembayaranTiket');
    }
}
