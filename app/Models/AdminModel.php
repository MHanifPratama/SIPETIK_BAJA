<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'admin';
    protected $primaryKey = 'id_admin';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['username', 'password','email'];

<<<<<<< Updated upstream
    public function cek_login_user($username){
        return $this -> db -> table('admin')
        ->where(array('username' => $username))
        ->get() ->getRowArray();
    }



=======
>>>>>>> Stashed changes
}
?>