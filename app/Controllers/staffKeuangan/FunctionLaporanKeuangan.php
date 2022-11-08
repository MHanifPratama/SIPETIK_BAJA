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
}

?>