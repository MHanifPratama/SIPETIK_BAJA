<?php 
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\Jadwal;

class FunctionJadwal extends BaseController{


    public function listjadwal(){

        $jadwal = new Jadwal() ;
        $datajadwal = $jadwal->findAll();
        $data = [
            'title' => 'jadwal',
            'jadwal' => $datajadwal
        ];
        return view('admin\jadwal\viewJadwal',$data);
    }
}

?>