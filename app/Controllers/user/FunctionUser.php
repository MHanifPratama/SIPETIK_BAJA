<?php
namespace App\Controllers\user;

use App\Controllers\BaseController;
use App\Models\UserModels;
use App\Models\AdminModel;
use App\Models\BusModel;
use App\Models\SupirModel;

class FunctionUser extends BaseController
{
    
    public function index(){

        $bus = new BusModel();
        $dataBus = $bus->getAllData();
        $data = [
            'title' => 'Bus',
            'bus' => $dataBus
        ];
    }

    public function cariPerjalanan(){
        $data = [
            'tipeBus' => $this -> request -> getPost('tipeBus'),
            'tujuan' => $this -> request -> getPost('tujuan'),
            'asal' => $this -> request -> getPost('asal')
        ];
        $bus = new BusModel();
        $dataBus = $bus->search($data);
        $data = [
            'title' => 'Bus',
            'bus' => $dataBus
        ];
        return view('user\cek_schedule',$data);
    }
    public function view_login()
    {
        // if(session('id_admin')){
        //     return redirect() -> to (site_url('halaman_utama'));
        // }
        return view('user\login');
    }

    public function ViewRegister(){
       
        // if(session('id_admin')){
        //     return redirect() -> to (site_url('halaman_utama'));
        // }

        return view('user\register');


    }
    

    public function ViewRegister(){
        return view('user\register');
        if(session('id_admin')){
            return redirect() -> to (site_url('halaman_utama'));
        }
        return view('user\register');
    }

    public function halaman_utama(){
        return view('user\halaman_utama');
    }


    public function login_user(){
        // $model = new AdminModel;
        // $this -> db = $model;
        // $post = $this->request-> getPost();
        // $query = $this ->db->table('admin')->getWhere(['username' => $post['username']]);
        // $admin = $query -> getRow();
        // if($admin){
        //     if(password_verify($post['password'],$admin -> password)){
        //         $param = ['id_admin' => $admin -> id_admin];
        //         session() ->set($param);
                
        //         return redirect() -> to ('/index');

        //     }
        //     else{
        //         return redirect() -> back() -> with ('error', 'Password Salah');
        //     }
        // }
        // else{
        //     return redirect() -> back() -> with ('error', 'Username tidak ada');
        // }


    public function login_user(){
        $session = session();

        $post = $this -> request -> getPost();
        $query = $this ->db ->table('admin')->getWhere(['username' => $post['username']]);
        $user = $query->getRow();
        // $password = $this -> request -> getPost('password');
        // $pass = $user->password; //cek password di fb
        // $verify = password_verify($password,$pass);
        if ($user) {
            if(password_verify($post['password'],$user ->password)) {
                $session ->setFlashdata('msg','Login');
                $params = ['id_admin' => $user -> id_admin];
                $session -> set($params);
                return redirect() -> to ('/halaman_utama');

            }
            else{
                $session ->setFlashdata('msg','Password Salah');
                return redirect() -> to('/ViewRegister');
            }
        }
        else{
            $session ->setFlashdata('msg','User Tidak Ditemukan');
            return redirect() -> to('/view_login');
        }
    }
    }
    
    public function Register_User(){
        // protected $allowedFields = ['username', 'password', 'id_pelanggan', 'email','nama_pelanggan','nomor_hp_pelanggan'];
        if(!$this->validate([
            'username'=>'required',
            'password'=>'required',
            'confpassword'=>'required',
            'email'=>'required',
            'nama_pelanggan'=>'required',
            'nomor_hp_pelanggan'=>'required',
        ])){ echo "<script>
           alert('Isi data anda');
           </script>";
           return view('user\register');
        }

        $passwordconf = $this -> request -> getPost('confpassword');
        $userModel = new UserModels();
        $data = [
            
            'username' => $this -> request -> getPost('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'email' => $this -> request -> getPost('email'),
            'nama_pelanggan' => $this -> request -> getPost('nama_pelanggan'),
            'nomor_hp_pelanggan' => $this -> request -> getPost('nomor_hp_pelanggan')
        ];
        if($data['password'] !== $passwordconf){
            echo "<script>
                       alert('Password Tidak Sesuai');
                       </script>";
            return view('user\login');
        }
        
        $userModel->save($data);
        return redirect()->to('/view_login');
    }


}