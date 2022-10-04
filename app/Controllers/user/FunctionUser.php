<?php
namespace App\Controllers\user;
use App\Controllers\BaseController;
class FunctionUser extends BaseController
{
    public function index()
    {
        return view('user\login');
    }
<<<<<<< Updated upstream
    // public function view_login()
    // {
    //     return view('user\login');
    // }
=======
    public function ViewRegister(){
        return view('user\register');
    }
>>>>>>> Stashed changes

    public function login_user($data){
        $conn = mysqli_connect("localhost","root","","sipetik");
        if (isset($_POST["login"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            $result = mysqli_query($conn,"SELECT * FROM akun_user WHERE email = '$email'");
            if(mysqli_num_rows($result)===1){
              $row = mysqli_fetch_assoc($result);
              // if($password=== $row["password"]){
              //   header("Location: index.php");
              //   exit;
              // }
               if(password_verify($password,$row["password"])){
                  $_SESSION["login"] = $row["id_akun"];
                //   header("Location: index.php");
                //   exit();
                    // echo 'Berhasil Login';
        
                }
                else{
                    echo "<script>
                        alert('Password Salah');
                        </script>";
                }
                
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