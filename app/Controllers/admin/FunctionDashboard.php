<?php 
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\BusModel;
use App\Models\Jadwal;
use App\Models\Perjalanan;
use App\Models\Supir;
use App\Models\TipeBus;

class FunctionDashboard extends BaseController{
    public function dashboard(){
        $bus = new BusModel();
        $supir = new Supir();
        $jadwal = new Jadwal();
        $perjalanan = new Perjalanan();
        $tipeBus = new TipeBus();
        $dataBus = $bus->findAll();
        $dataSupir = $supir->countAllData();
        $dataJadwal = $jadwal->findAll();
        $dataPerjalanan = $perjalanan->countAllData();
        $dataArmada = $bus->countAllResults();
        $dataTipeBus = $tipeBus->findAll();
        $data = [
            'title' => 'Dashboard',
            'bus' => $dataBus,
            'supir' => $dataSupir,
            'jadwal' => $dataJadwal,
            'perjalanan' => $dataPerjalanan,
            'tipeBus' => $dataTipeBus,
            'armada' => $dataArmada
        ];
        return view('admin\dashboard\dashboard', $data);
    }
}

?>