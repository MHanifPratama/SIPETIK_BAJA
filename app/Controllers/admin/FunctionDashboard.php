<?php 
namespace App\Controllers\admin;
use App\Controllers\BaseController;

class FunctionDashboard extends BaseController{
    public function dashboard(){
        return view('admin\dashboard\dashboard');
    }
}

?>