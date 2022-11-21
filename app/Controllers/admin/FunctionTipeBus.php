<?php
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\TipeBus;


class FunctionTipeBus extends BaseController{


    public function listTipeBus(){

        $tipe_bus = new TipeBus() ;
        $dataTipe = $tipe_bus->findAll();
        $data = [
            'title' => 'tipe bus',
            'tipe_bus' => $dataTipe
        ];
        return view('admin\tipe_bus\viewTipe',$data);
    }
    public function tambahTipeBus(){
        $tipeBus = new tipeBus() ;
        $datatipeBus = $tipeBus->findAll();
        $data = [
            'title' => 'Membuat Tipe Bus',
            'tipe_bus' => $datatipeBus,
        ];
        return view('admin\tipe_bus\tambahtipeBus', $data);
    }
    public function simpan(){
        if(!$this->validate([
            'tipe'=>'required',
            'harga'=>'required',
        ])){
            return redirect()->to('/viewTambahTipeBus')-> with('sukses', 'Berhasil Menambahkan Data');
        }
        $datasupir = new tipeBus();
        $data = [
            'tipe' => $this -> request -> getPost('tipe'),
            'harga' => $this -> request -> getPost('harga'),
        ];

        $datasupir->save($data);
        return redirect()->to('/viewTipeBus');
    }
    public function hapus($id)
    {
        $datasupir = new tipeBus();
        $datasupir->delete($id);
    
        return redirect()->to('/viewTipeBus');
    
    }
    public function editTipe($id){
        $tipe = new tipeBus();
        $dataTipe= $tipe->find($id);
        
        $data = [
            'title' => ' Edit tipe',
            'tipe' => $dataTipe,

        ];
        
        return view('admin/tipe_bus/viewEditTipe', $data);
    }
    public function update($id){
        if(!$this->validate([
            'tipe'=>'required',
            'harga'=>'required',
        ])){
            return redirect()->to('/editTipe');
        }

        $mahasiswaModel = new tipeBus();
        $data = [
            'tipe' => $this -> request -> getVar('tipe'),
            'harga' => $this -> request -> getVar('harga'),
        ];

        $mahasiswaModel->update($id, $data);
        return redirect()->to('/viewTipeBus')-> with('update', 'Berhasil Update Data');
    }
}

?>