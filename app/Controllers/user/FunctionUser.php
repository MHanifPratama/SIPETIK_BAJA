<?php
namespace App\Controllers\user;
use App\Controllers\BaseController;
class FunctionUser extends BaseController
{
    public function index()
    {
        return view('user\login');
    }
    // public function view_login()
    // {
    //     return view('user\login');
    // }

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

}