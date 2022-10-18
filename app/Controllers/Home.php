<?php

namespace App\Controllers;
use App\Models\BusModel;
class Home extends BaseController
{
    public function index()
    {
        $bus = new BusModel();
        $dataBus = $bus->getAllData();
        $data = [
            'title' => 'Bus',
            'bus' => $dataBus
        ];
        // echo var_dump($data);
         return view('pages/halaman_user',$data);
        // return redirect()->to('/');
    }
    public function test()
    {
 
         return view('user/halaman_utama');
        // return redirect()->to('/');
    }
    public function list()
    {
 
         return view('user/table_user');
        // return redirect()->to('/');
    }
}
