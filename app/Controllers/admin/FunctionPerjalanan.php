<?php 
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\Perjalanan;

class FunctionPerjalanan extends BaseController{


    public function listPerjalanan(){

        $perjalanan = new Perjalanan() ;
        $dataperjalanan = $perjalanan->findAll();
        $data = [
            'title' => 'perjalanan',
            'perjalanan' => $dataperjalanan
        ];
        return view('admin\perjalanan\viewPerjalanan',$data);
    }
    public function tambahPerjalanan(){
        $perjalanan = new Perjalanan() ;
        $dataperjalanan = $perjalanan->findAll();
        $data = [
            'title' => 'Membuat Perjalanan',
            'perjalanan' => $dataperjalanan,
        ];
        return view('admin\perjalanan\tambahPerjalanan', $data);
    }
    public function simpan(){
        if(!$this->validate([
            'kota_awal'=>'required',
            'kota_akhir'=>'required',
            'total_km'=>'required',
            ])){
            return redirect()->to('/viewTambahPerjalanan');
        }
        $dataperjalanan = new Perjalanan();
        $data = [
            'kota_awal' => $this -> request -> getPost('kota_awal'),
            'kota_akhir' => $this -> request -> getPost('kota_akhir'),
            'total_km' => $this -> request -> getPost('total_km')
        ];

        $dataperjalanan->save($data);
        return redirect()->to('/viewPerjalanan');
    }
    public function hapus($id){
        $PerjalananModel = new Perjalanan();
        $PerjalananModel->delete($id);
    
        return redirect()->to('/viewPerjalanan');
    }
    public function editPerjalanan($id){
        $perjalanan = new Perjalanan();
        $dataperjalanan= $perjalanan->find($id);
        
        $data = [
            'title' => ' Edit perjalanan',
            'perjalanan' => $dataperjalanan,

        ];
        
        return view('admin/perjalanan/viewEditPerjalanan', $data);
    }
    public function update($id){
        if(!$this->validate([
            'kota_awal'=>'required',
            'kota_akhir'=>'required',
            'total_km'=>'required',
        ])){
            return redirect()->to('/editPerjalanan');
        }

        $perjalananModel = new Perjalanan();
        $data = [
            'kota_awal' => $this -> request -> getVar('kota_awal'),
            'kota_akhir' => $this -> request -> getVar('kota_akhir'),
            'total_km' => $this -> request -> getVar('total_km'),
            
        ];

        $perjalananModel->update($id, $data);
        return redirect()->to('/viewPerjalanan');
    }
}

?>