<?php
namespace App\Controllers\user;

use App\Controllers\BaseController;
use App\Models\UserModels;
use App\Models\AdminModel;
use App\Models\BusModel;

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
<<<<<<< Updated upstream
        if(session('id_admin')){
            return redirect() -> to (site_url('halaman_utama'));
        }
=======
        // if(session('id_akun')){
        //     return redirect() -> to(site_url());
        // }
>>>>>>> Stashed changes
        return view('user\login');
    }
    //    return view('user\register');

    public function ViewRegister(){
<<<<<<< Updated upstream
       
        if(session('id_admin')){
            return redirect() -> to (site_url('halaman_utama'));
        }
=======
        // if(session('id_akun')){
        //     return redirect() -> to(site_url());
        // }
        return view('user\register');

    }
>>>>>>> Stashed changes

        return view('user\register');

<<<<<<< Updated upstream

    }
    public function halaman_utama(){
        return view('user\halaman_utama');
    }


=======
>>>>>>> Stashed changes
    public function login_user(){
        $session = session();

        $post = $this -> request -> getPost();
        $query = $this ->db ->table('akun_user')->getWhere(['username' => $post['username']]);
        $user = $query->getRow();
        // $password = $this -> request -> getPost('password');
        // $pass = $user->password; //cek password di fb
        // $verify = password_verify($password,$pass);
        if ($user) {
            if(password_verify($post['password'],$user ->password)) {
               
                $params = ['id_akun' => $user -> id_akun];
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


        $userModel = new UserModels();
        $data = [
            'username' => $this -> request -> getPost('username'),
<<<<<<< Updated upstream
            'password' => $this -> request -> getPost('password'),
=======
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'confpassword' => $this -> request -> getPost('confpassword'),
>>>>>>> Stashed changes
            'email' => $this -> request -> getPost('email'),
            'nama_pelanggan' => $this -> request -> getPost('nama_pelanggan'),
            'nomor_hp_pelanggan' => $this -> request -> getPost('nomor_hp_pelanggan')
        ];
        if($data['password'] === $data['confpassword']){
            $userModel->save($data);
            // echo "<script>
            //            alert('Password Tidak Sesuai');
            //            </script>";

            return view('user\ViewRegister');
        }
<<<<<<< Updated upstream

=======
        // else if($data['password'] === $data['confpassword']){
        //     $userModel->save($data);
        //     // echo "<script>
        //     //            alert('Password Tidak Sesuai');
        //     //            </script>";

        //     return view('user\ViewRegister');
        // }
        
>>>>>>> Stashed changes
        $userModel->save($data);
        return redirect()->to('/');
    }


    public function logout() {
        session() -> remove('id_akun');

        return redirect()->to('/view_login');
    }

}