<?php
namespace App\Controllers\user;

use App\Controllers\BaseController;
use App\Models\UserModels;

class FunctionUser extends BaseController
{
    public function index(){
        // $User_model = new UserModels();
        // $data['akun_user'] = $User_model->findAll();
        // echo $data;
        // var_dump($data[0]);
        // print_r($data);
        return view('user\login');
    }

    public function login_user($data){
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

}