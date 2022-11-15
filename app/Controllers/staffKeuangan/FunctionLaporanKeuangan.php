<?php 
namespace App\Controllers\StaffKeuangan;
use App\Controllers\BaseController;
use App\Models\BusModel;
use App\Models\Jadwal;
use App\Models\Perjalanan;
use App\Models\Supir;
use App\Models\TipeBus;
use App\Models\StaffKeuangan;
use App\Models\TiketModel;

class FunctionLaporanKeuangan extends BaseController{
    public function listLaporanKeuangan(){
        $model = new TiketModel();
        $data = [
            'tiket' => $model->where('validasi_pembayaran', 'Lunas')->findAll(),
        ];
        return view('staffKeuangan\laporan\listLaporan', $data);
    }
    public function getLaporanKeuangan(){
        // echo $this -> request -> getPost('tanggal');
        $model = new TiketModel();
        $tanggal = $this->request->getVar('tanggal');
        $total_harga = $model->selectSum('total_harga')->where('validasi_pembayaran', 'Lunas')->like('tanggal_pelunasan', $tanggal,'after')->first();
        $total_tiket = $model->selectSum('penumpang')->where('validasi_pembayaran', 'Lunas')->like('tanggal_pelunasan', $tanggal,'after')->first();
        $data = [
            'tiket' => $model->where('validasi_pembayaran', 'Lunas')->like('tanggal_pelunasan', $tanggal,'after')->findAll(),
            'total_tiket'=> $total_harga['total_harga'],
            'total_harga'=> $total_tiket['penumpang'],
            'tanggal'=>$tanggal
        ];
        // echo var_dump($data);
        return view('staffKeuangan\laporan\laporanBulan', $data);
    }
}

?>