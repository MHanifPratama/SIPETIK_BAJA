<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\BusModel;
use App\Models\TiketModel;
use App\Models\Jadwal;
use App\Models\Perjalanan;
use App\Models\Kursi;
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
        $kursi = new Kursi();
        $tiket = new TiketModel();
        $dataBus = $bus->join('tipe_bus','tipe_bus.id_tipe=bus.id_tipe')
        ->join('perjalanan','perjalanan.id_perjalanan=bus.id_perjalanan')
        ->join('supir','supir.id_supir=bus.id_supir')
        ->join('jadwal','jadwal.id_jadwal=bus.id_jadwal')
        ->find($id);
        $kursiAll = $kursi->findAll();
        $dataKursi = 'SELECT kursi.nomor_kursi FROM tiket_bus RIGHT JOIN kursi ON tiket_bus.nomor_kursi = kursi.nomor_kursi WHERE tiket_bus.tanggal_pemesanan IS NULL UNION (SELECT tiket_bus.nomor_kursi FROM tiket_bus LEFT JOIN kursi ON tiket_bus.nomor_kursi = kursi.nomor_kursi WHERE tiket_bus.id_bus != ?) ORDER BY nomor_kursi ASC';
        // $tableA = 'SELECT tiket_bus.nomor_kursi FROM tiket_bus LEFT JOIN kursi ON tiket_bus.nomor_kursi = kursi.nomor_kursi WHERE tiket_bus.id_bus != ?';
        $tableB = 'SELECT tiket_bus.nomor_kursi FROM tiket_bus WHERE id_bus = ?';
        $dataKursi = $kursi->query($dataKursi,[$id])->getResultArray();
        $sukaSukaKamuh = $kursi->query($tableB,[$id])->getResultArray();
        $ara=[];
        $arr=[];
        foreach($kursiAll as $kursi){
            array_push($arr,$kursi['nomor_kursi']);
            foreach($sukaSukaKamuh as $buat){
                if($kursi['nomor_kursi'] == $buat['nomor_kursi']){
                    array_push($ara,$kursi['nomor_kursi']);
                }else{

                }
            }
        }
        $result = array_diff($arr,$ara);
        $data = [
            'title' => 'Bus',
            'bus' => $dataBus,
            'session' => $session,
            'kursi' => $dataKursi,
            'kueriCek'=>$result,
        ];
        return view('user/home_User',$data);
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
            return redirect()->back();
        }

        $tiket = new TiketModel();
        
        $code = $this->request->getPost('no_hp');
        $harga = $this->request->getPost('total_harga');

        $Kodetiket = "KSB".rand(100000,999999).$code;
        $kodePembayaran = $Kodetiket;
        echo $kodePembayaran;

        $timezone=date_default_timezone_set('Asia/Jakarta');
        $TanggalPesan = date("Y-m-d");

        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('no_hp'),
            'penumpang' => $this->request->getPost('penumpang'),
            'id_bus' => $this->request->getPost('id_bus'),

            'tanggal_pemesanan' => $TanggalPesan,

            'total_harga' => $this->request->getPost('total_harga') * $this->request->getPost('penumpang'),
            'validasi_pembayaran' => 'Belum Lunas',
            'kode_tiket'  => $kodePembayaran,
            'foto_bukti_pembayaran' => 'ini Gambar',
            'nomor_kursi' => $this->request->getPost('nomor_kursi')
           

        ];
        
        $tiket->save($data);
        $dataA=[
            'kode_pembayaran' => $Kodetiket,
            'total_harga' => $harga,
        ];
        // $session->setFlashdata('kode', $Kodetiket);
        // $session->setFlashdata('harga', $harga);
        $session->setFlashdata('sukses', 'Berhasil Melakukan Pemesanan');
        return redirect()->to('/PembayaranTiket');
        // return view('user/pembayaran/pembayaran_tiket',$dataA);
    }
}

