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
class FunctionDashboard extends BaseController{
    public function dashboard(){
        $tiket = new TiketModel();
        $totalPendapatan = $tiket->selectSum('total_harga')->where('validasi_pembayaran', 'Lunas')->first();
        // echo var_dump($totalPendapatan);
        $data = [
            'totalPendapatan' => $totalPendapatan['total_harga'],
            'totalTiket'=>$tiket->where('validasi_pembayaran', 'Lunas')->countAllResults()
        ];
        return view('staffKeuangan\dashboard\dashboard', $data);
    }
}

?>