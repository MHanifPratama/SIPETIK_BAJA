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
        $a = user()->email;
        $dataTiket = $tiket
        ->join('bus','bus.id_bus=tiket_bus.id_bus')->join('tipe_bus','tipe_bus.id_tipe=bus.id_tipe')
        ->join('perjalanan','perjalanan.id_perjalanan=bus.id_perjalanan')
        ->join('supir','supir.id_supir=bus.id_supir')
        ->join('jadwal','jadwal.id_jadwal=bus.id_jadwal')
        ->where('email',$a)
        ->get()->getResultArray();
        $dataA=[
            'tiket' => $dataTiket,
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
}
