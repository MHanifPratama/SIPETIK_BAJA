<?php 
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\Supir;
use App\Models\SupirModel;

class FunctionSupir extends BaseController{


    public function listSupir(){

        $supir = new Supir() ;
        $datasupir = $supir->findAll();
        $data = [
            'title' => 'supir',
            'supir' => $datasupir
        ];
        return view('admin\supir\supirView',$data);
    }
    public function tambahSupir(){
        $supir = new Supir() ;
        $datasupir = $supir->findAll();
        $data = [
            'title' => 'Membuat Biodata',
            'supir' => $datasupir,
        ];
        return view('admin\supir\tambahSupir', $data);
    }

    public function simpan(){
        if(!$this->validate([
            'nama_supir'=>'required',
            'nomor_hp_supir'=>'required',
        ])){
            return redirect()->to('/viewTambahSupir');
        }
        $datasupir = new Supir();
        $data = [
            'nama_supir' => $this -> request -> getPost('nama_supir'),
            'nomor_hp_supir' => $this -> request -> getPost('nomor_hp_supir'),
        ];

        $datasupir->save($data);
        return redirect()->to('/viewSupir')-> with('sukses', 'Berhasil Menambahkan Data');
    }
    public function hapus($id)
    {
        $BiodataModel = new Supir();
        $BiodataModel->delete($id);
    
        return redirect()->to('/viewSupir');
    
    }
    public function editSupir($id){
        $supir = new Supir();
        $dataSupir= $supir->find($id);
        
        $data = [
            'title' => ' Edit Supir',
            'Supir' => $dataSupir,

        ];
        
        return view('admin/supir/viewEditSupir', $data);
    }
    public function update($id){
        if(!$this->validate([
            'nama_supir'=>'required',
            'nomor_hp_supir'=>'required',
        ])){
            return redirect()->to('/editSupir');
        }

        $mahasiswaModel = new Supir();
        $data = [
            'nama_supir' => $this -> request -> getVar('nama_supir'),
            'nomor_hp_supir' => $this -> request -> getVar('nomor_hp_supir'),
        ];

        $mahasiswaModel->update($id, $data);
        return redirect()->to('/viewSupir')-> with('update', 'Berhasil Update Data');
    }
}

?>