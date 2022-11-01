<?php
namespace App\Controllers\staffKeuangan;
use App\Controllers\BaseController;
use App\Models\StaffKeuangan;

class FunctionUmum extends BaseController{
    public function viewLogin(){
        if (session('logged_in_staff
        ') == true) {
            return redirect()->to('/dashboardStaff');
        }
        return view('staffKeuangan\loginRegister\loginStaff');
    }
    public function verifyLoginStaff(){
        $model = new StaffKeuangan();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id_akun_staff_keuangan'],
                    'nama_staff'     => $data['nama_staff'],
                    'email'    => $data['email'],
                    'logged_in_staff'     => TRUE
                ];
                session()->set($ses_data);
                return redirect()->to('/dashboardStaff');
            }
            else{
                session()->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/loginAdmin');
            }
        }
        else{
            session()->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/loginAdmin');
        }
    }
}