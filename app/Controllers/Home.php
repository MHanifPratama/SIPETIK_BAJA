<?php

namespace App\Controllers;
use App\Models\BusModel;
class Home extends BaseController
{
    public function index()
    {
<<<<<<< Updated upstream
        return view('pages/home');
    }
    public function about()
    {

        return view('user/template');

=======
        $bus = new BusModel();
        $dataBus = $bus->getAllData();
        $data = [
            'title' => 'Bus',
            'bus' => $dataBus
        ];
        // echo var_dump($data);
        return view('pages/halaman_user',$data);
>>>>>>> Stashed changes
    }
}
