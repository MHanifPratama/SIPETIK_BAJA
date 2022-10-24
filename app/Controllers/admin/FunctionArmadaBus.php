<?php 
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\BusModel;
use App\Models\Jadwal;
use App\Models\Perjalanan;
use App\Models\Supir;
use App\Models\TipeBus;
class FunctionArmadaBus extends BaseController{
    public function listArmadaBus(){
        $bus = new BusModel();
        $dataBus = $bus->getAllDataFromAllTable();
        $data = [
            'title' => 'Bus',
            'bus' => $dataBus
        ];
        return view('admin/armada/viewArmadaBus',$data);
    }
    public function tambahArmadaBus(){
        $bus = new BusModel();
        $perjalanan = new Perjalanan();
        $supir = new Supir();
        $jadwal = new Jadwal();
        $tipeBus = new TipeBus();

        $dataBus = $bus->findAll();
        $dataSupir = $supir->findAll();
        $dataTipeBus = $tipeBus->findAll();
        $dataJadwal = $jadwal->findAll();
        $dataPerjalanan = $perjalanan->findAll();
        $data = [
            'title' => 'Bus',
            'bus' => $dataBus,
            'supir' => $dataSupir,
            'tipeBus' => $dataTipeBus,
            'jadwal'=> $dataJadwal,
            'perjalanan' => $dataPerjalanan
        ];
        return view('admin/armada/tambahArmadaBus', $data);
    }
    public function simpan(){
        if(!$this->validate([
            'nama_bus'=>'required',
            'id_supir'=>'required',
            'id_tipe'=>'required',
            'id_jadwal'=>'required',
            'id_perjalanan'=>'required',
        ])){
            return redirect()->to('/viewTambahBus');
        }
        $bus = new BusModel();
        $data = [
            'nama_bus' => $this->request->getPost('nama_bus'),
            'id_supir' => $this->request->getPost('id_supir'),
            'id_tipe' => $this->request->getPost('id_tipe'),
            'id_jadwal' => $this->request->getPost('id_jadwal'),
            'id_perjalanan' => $this->request->getPost('id_perjalanan')
        ];
        $bus->insert($data);
        return redirect()->to('/viewBus');
    }
    public function hapus($id)
    {
        $bus = new BusModel();
        $bus->delete($id);
        return redirect()->to('/viewBus');
    }
    public function editBus($id)
    {
        $bus = new BusModel();
        $perjalanan = new Perjalanan();
        $supir = new Supir();
        $jadwal = new Jadwal();
        $tipeBus = new TipeBus();

        $dataBus = $bus->find($id);
        $dataSupir = $supir->findAll();
        $dataTipeBus = $tipeBus->findAll();
        $dataJadwal = $jadwal->findAll();
        $dataPerjalanan = $perjalanan->findAll();
        $data = [
            'title' => 'Edit Bus',
            'bus' => $dataBus,
            'supir' => $dataSupir,
            'tipeBus' => $dataTipeBus,
            'jadwal'=> $dataJadwal,
            'perjalanan' => $dataPerjalanan
        ];
        return view('admin/armada/viewEditArmadaBus', $data);
    }
    public function update($id)
    {
        if(!$this->validate([
            'nama_bus'=>'required',
            'id_supir'=>'required',
            'id_tipe'=>'required',
            'id_jadwal'=>'required',
            'id_perjalanan'=>'required',
        ])){
            return redirect()->to('/viewTambahBus');
        }
        $bus = new BusModel();
        $data = [
            'nama_bus' => $this->request->getPost('nama_bus'),
            'id_supir' => $this->request->getPost('id_supir'),
            'id_tipe' => $this->request->getPost('id_tipe'),
            'id_jadwal' => $this->request->getPost('id_jadwal'),
            'id_perjalanan' => $this->request->getPost('id_perjalanan')
        ];
        $bus->update($id, $data);
        return redirect()->to('/viewBus');
    }
}

?>