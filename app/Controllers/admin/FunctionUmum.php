<?php
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\AkunAdmin;

class FunctionUmum extends BaseController{


    public function viewLogin(){
        if (session('logged_in') == true) {
            return redirect()->to('/dashboard');
        }
        return view('admin\loginRegister\loginAdmin');
    }
    public function viewRegister(){
        if (session('logged_in') == true) {
            return redirect()->to('/dashboard');
        }
        return view('admin\loginRegister\registerAdmin');
    }
    public function saveRegister(){
        $rules = [
            'username'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[akun_admin.email]',
            'pass'      => 'required|min_length[6]|max_length[200]',
            'confpass'  => 'matches[pass]'
        ];

        if($this->validate($rules)){
            $model = new AkunAdmin();
            $data = [
                'username'     => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/loginAdmin');
        }   
        else{
            $data['validation'] = $this->validator;
            echo view('admin\loginRegister\registerAdmin', $data);
        }

    }
    public function verifyLoginAdmin(){
        $model = new AkunAdmin();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id_akun_admin'],
                    'username'     => $data['username'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                session()->set($ses_data);
                return redirect()->to('/dashboard');
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
    public function logoutAdmin(){
        $session = session();
        $session->destroy();
        return redirect()->to('/loginAdmin');
    }
}

?>