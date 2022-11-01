<?php 
namespace App\Controllers\StaffKeuangan;
use App\Controllers\BaseController;
use App\Models\BusModel;
use App\Models\Jadwal;
use App\Models\Perjalanan;
use App\Models\Supir;
use App\Models\TipeBus;
use App\Models\StaffKeuangan;

class FunctionDashboard extends BaseController{
    public function dashboard(){
        return view('staffKeuangan\dashboard\dashboard');
    }
}

?>