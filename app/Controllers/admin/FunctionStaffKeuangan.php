<?php 
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\StaffKeuangan;
class FunctionStaffKeuangan extends BaseController{
    public function listStaff(){

        $staff_keuangan = new StaffKeuangan() ;
        $dataStaff = $staff_keuangan->findAll();
        $data = [
            'title' => 'tipe bus',
            'staff_keuangan' => $dataStaff
        ];
        return view('admin\staffKeuangan\viewStaff',$data);
    }
}