<?php
namespace App\Controllers\staffKeuangan;
use App\Controllers\BaseController;
use App\Models\StaffKeuangan;
use App\Models\TiketModel;
class FunctionValidasi extends BaseController{
    public function listValidasi() {
        $model = new TiketModel();
        $data = [
            
            'tiket' => $model->where('validasi_pembayaran', 'Belum Lunas')->findAll(),
        ];
        return view('staffKeuangan\validasi\listValidasi', $data);
    }
    public function validasiTiket($id){
        $model = new TiketModel();
        $data = [
            'tiket' => $model->find($id),
        ];
        return view('staffKeuangan\validasi\validasiTiket', $data);
    }
    public function validasiPembayaranFix($id){
        $model = new TiketModel();
        $dataModel = $model->find($id);
        $timezone=date_default_timezone_set('Asia/Jakarta');
        $TanggalPesan = date("Y-m-d");
        $data = [
            'validasi_pembayaran' => $this->request->getVar('status_pembayaran'),
            'tanggal_pelunasan' => $TanggalPesan
        ];
        // echo var_dump($data);
        $model->update($id,$data);
        return redirect()->to('/viewValidasi');
    }
}