<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\BusModel;
use App\Models\TiketModel;
use App\Models\Jadwal;
use App\Models\Perjalanan;
use App\Models\TipeBus;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\QrCode;
class PembayaranTiket extends BaseController
{
    public function Pembayaran()
    {
        $pager = \Config\Services::pager();
        $tiket = new TiketModel();
        $a = user()->email;
        $dataTiket = $tiket
        ->join('bus','bus.id_bus=tiket_bus.id_bus')->join('tipe_bus','tipe_bus.id_tipe=bus.id_tipe')
        ->join('perjalanan','perjalanan.id_perjalanan=bus.id_perjalanan')
        ->join('supir','supir.id_supir=bus.id_supir')
        ->join('jadwal','jadwal.id_jadwal=bus.id_jadwal')
        ->where('email',$a)->OrderBy('validasi_pembayaran','DESC');
        // ->get()->getResultArray();
        $dataA=[

            // 'tiket' => $dataTiket,
            'tiket' => $dataTiket->paginate(5,'grup1'),
            'pager' => $dataTiket->pager,


        ];
        // $session->setFlashdata('kode', $Kodetiket);
        // $session->setFlashdata('harga', $harga);
        // return redirect()->to('/PembayaranTiket');
        return view('user/pembayaran/listPembayaranTiket',$dataA);

    }
    public function uploadFotoPembayaran($id){
        $tiket = new TiketModel();
        $dataTiket = $tiket->where('id_tiket',$id)->first();
        $dataA=[
            'tiket' => $id,
            'dataTiket' => $dataTiket,
        ];
        return view('user/pembayaran/uploadGambarBuktiPembayaran',$dataA);
    }
    public function simpan_foto_pembayaran($id){
        if(!$this->validate([
            'foto_bukti_pembayaran' => 'uploaded[foto_bukti_pembayaran]','mime_in[foto_bukti_pembayaran,image/jpg,image/jpeg,image/gif,image/png]','max_size[foto_bukti_pembayaran,4096]',
        ])){
            return redirect()->to('/uploadFotoPembayaran/'.$id);
        }
        $tiket = new TiketModel();
        $dataBerkasId = $tiket->find($id);
        $dataBerkas = $this->request->getFile('foto_bukti_pembayaran');
        if($dataBerkas->isValid() && !$dataBerkas->hasMoved()){
            $berkasLama = $dataBerkasId['foto_bukti_pembayaran'];
            if(file_exists(ROOTPATH . 'public/assets/img/foto_bukti_pembayaran/' . $berkasLama)){
                unlink(ROOTPATH . 'public/assets/img/foto_bukti_pembayaran/' . $berkasLama);
            }
            $namaBerkas = $dataBerkas->getRandomName();
            $dataBerkas->move(ROOTPATH . 'public/assets/img/foto_bukti_pembayaran/', $namaBerkas);
        }
        else{
            $namaBerkas = $dataBerkasId['foto_bukti_pembayaran'];
        }
        $data = [
            'foto_bukti_pembayaran' => $namaBerkas,
        ];
        $tiket->update($id,$data);
        return redirect()->to('/PembayaranTiket')-> with('sukses', 'Berhasil Mengunggah Bukti Pembayaran');

    }
    public function cetakTiket($id){
        $writer = new PngWriter();
        $tiket = new TiketModel();
        $dataTiket = $tiket
        ->join('bus','bus.id_bus=tiket_bus.id_bus')->join('tipe_bus','tipe_bus.id_tipe=bus.id_tipe')
        ->join('perjalanan','perjalanan.id_perjalanan=bus.id_perjalanan')
        ->join('supir','supir.id_supir=bus.id_supir')
        ->join('jadwal','jadwal.id_jadwal=bus.id_jadwal')
        ->where('id_tiket',$id)
        ->get()->getRowArray();
        if($dataTiket['validasi_pembayaran']=="Belum Lunas"){
            return redirect()->to('/PembayaranTiket')-> with('gagal', 'Anda Belum Melakukan Pembayaran');
        }
        $qrCode = QrCode::create($dataTiket['kode_tiket'])
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));
        $result = $writer->write($qrCode);
        header('Content-Type: '.$result->getMimeType());
        $result->saveToFile(ROOTPATH.'public/assets/img/qr/qr.png');
        $dataA=[
            'tiket' => $dataTiket,
        ];
        return view('user/pembayaran/cetakTiket',$dataA);
    }
}
