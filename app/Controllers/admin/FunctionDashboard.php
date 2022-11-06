<?php 
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\BusModel;
use App\Models\Jadwal;
use App\Models\Perjalanan;
use App\Models\Supir;
use App\Models\TipeBus;
use App\Models\StaffKeuangan;
use App\Models\AkunAdmin;

class FunctionDashboard extends BaseController{
    public function dashboard(){
        $id = $_SESSION['id'];
        $admin = new AkunAdmin();
        $bus = new BusModel();
        $supir = new Supir();
        $jadwal = new Jadwal();
        $staffKeuangan = new StaffKeuangan();
        $perjalanan = new Perjalanan();
        $tipeBus = new TipeBus();
        $dataBus = $bus->findAll();
        $dataSupir = $supir->countAllData();
        $dataAdmin = $admin->find($id);
        $dataJadwal = $jadwal->findAll();
        $dataStaffKeuangan = $staffKeuangan->countAllResults();
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
            'armada' => $dataArmada,
            'staffKeuangan' => $dataStaffKeuangan,
            'admin' => $dataAdmin
        ];
        // echo var_dump ($dataAdmin['username']);
        return view('admin\dashboard\dashboard', $data);
    }
}

?>