<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\BusModel;
use App\Models\TiketModel;
use App\Models\Jadwal;
use App\Models\Perjalanan;
use App\Models\TipeBus;

class PembayaranTiket extends BaseController
{
    public function Pembayaran()
    {

        return view('user\pembayaran\pembayaran_tiket');
    }
}
