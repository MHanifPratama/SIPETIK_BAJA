<?php
namespace App\Controllers\admin;
use App\Controllers\BaseController;


class FunctionUmum extends BaseController{


    public function viewLogin(){
        return view('admin\loginRegister\loginAdmin');
    }
    public function viewRegister(){
        return view('admin\loginRegister\registerAdmin');
    }
}

?>