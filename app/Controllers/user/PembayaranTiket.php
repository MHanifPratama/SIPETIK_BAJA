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
        $dataTiket = $tiket
        ->join('bus','bus.id_bus=tiket_bus.id_bus')->join('tipe_bus','tipe_bus.id_tipe=bus.id_tipe')
        ->join('perjalanan','perjalanan.id_perjalanan=bus.id_perjalanan')
        ->join('supir','supir.id_supir=bus.id_supir')
        ->join('jadwal','jadwal.id_jadwal=bus.id_jadwal')
        ->get()->getResultArray();
        $dataA=[
            'tiket' => $dataTiket,
        ];
        // $session->setFlashdata('kode', $Kodetiket);
        // $session->setFlashdata('harga', $harga);
        // return redirect()->to('/PembayaranTiket');
        return view('user/pembayaran/listPembayaranTiket',$dataA);

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
            'total_harga' => $this->request->getPost('total_harga') * $this->request->getPost('penumpang'),
        ];
        $tiket->save($data);
        return redirect()->to('/PembayaranTiket');
    }
}
