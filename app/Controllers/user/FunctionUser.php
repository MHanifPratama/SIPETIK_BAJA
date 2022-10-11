<?php
namespace App\Controllers\user;

use App\Controllers\BaseController;
use App\Models\UserModels;
use App\Models\AdminModel;

class FunctionUser extends BaseController
{
    public function index(){
        // $User_model = new UserModels();
        // $data['akun_user'] = $User_model->findAll();
        // echo $data;
        // var_dump($data[0]);
        // print_r($data);
        return view('pages/home');
    }

    public function view_login()
    {
        if(session('id_admin')){
            return redirect() -> to (site_url('halaman_utama'));
        }
        return view('user\login');
    }

    public function ViewRegister(){
<<<<<<< Updated upstream
        return view('user\register');
=======
        if(session('id_admin')){
            return redirect() -> to (site_url('halaman_utama'));
        }

        return view('user\register');

    }
    
    public function halaman_utama(){


        return view('user\halaman_utama');
>>>>>>> Stashed changes
    }


    public function login_user(){

        $session = session();
<<<<<<< Updated upstream
        $model = new AdminModel();
        $username = $this -> request -> getPost('username');
        $password = $this -> request -> getPost('password');
        $cek = $model -> cek_login_user($username);
        if ($cek) {
            $pass = $cek['password']; //password dari database (sudah dienkripsi)
            $verify = password_verify($password,$pass);
            if($verify) {
                session() -> set('username',$cek['username']);
                
                return redirect() -> to ('/index');
=======
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
>>>>>>> Stashed changes
            }
            else{
                $session ->setFlashdata('msg','Password Salah');
                return redirect() -> to('/view_login');
            }
        }
        else{
            $session ->setFlashdata('msg','User Tidak Ditemukan');
            return redirect() -> to('/view_login');
        }




        // $um = new UserModels();
        // $dataa['akun_user'] = $um->findAll();
        // $conn = db_connect();
        // if (isset($_POST["login"])){
        //     $email = $_POST["email"];
        //     $password = $_POST["password"];
        //     // $result = mysqli_query($conn,"SELECT * FROM akun_user WHERE email = '$email'");
        //     $result = $conn->query("SELECT * FROM akun_user WHERE email = '$email'");
        //     if($result===1){
        //       $row = mysqli_fetch_assoc($result);
        //       // if($password=== $row["password"]){
        //       //   header("Location: index.php");
        //       //   exit;
        //       // }
        //        if(password_verify($password,$row["password"])){
        //           $_SESSION["login"] = $row["id_akun"];
        //         //   header("Location: index.php");
        //         //   exit();
        //             echo 'Berhasil Login';
        
        //         }
        //         else{
        //             echo "<script>
        //                 alert('Password Salah');
        //                 </script>";
        //         }
                
        //     }
        
        // }
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
            'password' => $this -> request -> getPost('password'),
            'email' => $this -> request -> getPost('email'),
            'nama_pelanggan' => $this -> request -> getPost('nama_pelanggan'),
            'nomor_hp_pelanggan' => $this -> request -> getPost('nomor_hp_pelanggan')
        ];
        if($data['password'] !== $passwordconf){
            echo "<script>
                       alert('Password Tidak Sesuai');
                       </script>";
            return view('user\register');
        }

        $userModel->save($data);
        return redirect()->to('/Home');
    }

}