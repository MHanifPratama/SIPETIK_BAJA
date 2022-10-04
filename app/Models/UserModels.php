<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModels extends Model
{
    protected $table      = 'akun_user';
    protected $primaryKey = 'id_akun';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['username', 'password','email','nama_pelanggan','nomor_hp_pelanggan'];


    // public function RegUser($data){
    //     global $conn;
    //     $email = htmlspecialchars( $data["email"]);
    //     $username = htmlspecialchars($data["username"]);
    //     $password = mysqli_real_escape_string($conn,$data["password"]);
    //     $passwordconf = mysqli_real_escape_string($conn,$data["confpassword"]);
    //     $temp = mysqli_query($conn,"SELECT username FROM akun_admin WHERE username = '$username'");
    //     $temp_email = mysqli_query($conn,"SELECT email FROM akun_admin WHERE email = '$email'");
   
    //     if(mysqli_fetch_assoc($temp_email)){
    //        echo "<script>
    //        alert('Email Sudah Ada');
    //        </script>";
    //        return false;
    //     }
    // }

}
?>