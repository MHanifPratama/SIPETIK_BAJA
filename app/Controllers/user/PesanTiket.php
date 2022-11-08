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


    public function pesanTiket(){
        $session = session();
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
<<<<<<< Updated upstream
=======
        
        $code = $this->request->getPost('no_hp');
        $harga = $this->request->getPost('total_harga');

        $Kodetiket = "KSB".rand(100000,999999).$code;
        $kodePembayaran = $Kodetiket;
        echo $kodePembayaran;
        $timezone=date_default_timezone_set('Asia/Jakarta');
        $TanggalPesan = date("Y-m-d");
>>>>>>> Stashed changes
        $data = [
            'nama' => $this->request->getPost('nama'),
            'id_perjalanan' => $this->request->getPost('id_perjalanan'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('no_hp'),
            'penumpang' => $this->request->getPost('penumpang'),
            'id_bus' => $this->request->getPost('id_bus'),
<<<<<<< Updated upstream
            'id_tipe' => $this->request->getPost('id_tipe'),
            'id_jadwal' => $this->request->getPost('id_jadwal'),
            'total_harga' => $this->request->getPost('total_harga')
=======
            'tanggal_pemesanan' => $TanggalPesan,
            'total_harga' => $this->request->getPost('total_harga') * $this->request->getPost('penumpang'),
            'validasi_pembayaran' => 'Belum Lunas',
            'kode_tiket'  => $kodePembayaran,
            'foto_bukti_pembayaran' => 'ini Gambar',
           
>>>>>>> Stashed changes
        ];

        //Harga
        $harga = $this->request->getPost('total_harga');
        //Generate Tiket
        $code = $this->request->getPost('no_hp');
        $Kodetiket = "KSB".$code;

        
        session()->setFlashdata('kode', $Kodetiket);
        session()->setFlashdata('harga', $harga);


        $tiket->save($data);

        return redirect()->to('/PembayaranTiket');
    }
}
