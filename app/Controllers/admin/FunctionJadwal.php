<?php 
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\Jadwal;

class FunctionJadwal extends BaseController{


    public function listjadwal(){

        $jadwal = new Jadwal() ;
        $datajadwal = $jadwal->findAll();
        $data = [
            'title' => 'jadwal',
            'jadwal' => $datajadwal
        ];
        return view('admin\jadwal\viewJadwal',$data);
    }
    public function tambahJadwal(){
        return view('admin\jadwal\tambahjadwal');
    }
    public function simpan(){
        if(!$this->validate([
            'tanggal'=>'required',
            'waktu_keberangkatan'=>'required',
        ])){
            return redirect()->to('/viewTambahJadwal');
        }
        $jadwal = new Jadwal();
        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu_keberangkatan' => $this->request->getPost('waktu_keberangkatan')
        ];
        $jadwal->insert($data);
        return redirect()->to('/viewJadwal');
    }
    public function hapus($id)
    {
        $jadwal = new Jadwal();
        $jadwal->delete($id);
        return redirect()->to('/viewJadwal');
    }
    public function editJadwal($id)
    {
        $jadwal = new Jadwal();
        $data = [
            'title' => 'Edit Jadwal',
            'jadwal' => $jadwal->find($id)
        ];
        return view('admin\jadwal\editJadwal', $data);
    }
    public function update($id)
    {
        if(!$this->validate([
            'tanggal'=>'required',
            'waktu_keberangkatan'=>'required',
        ])){
            return redirect()->to('/viewTambahJadwal');
        }
        $jadwal = new Jadwal();
        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu_keberangkatan' => $this->request->getPost('waktu_keberangkatan')
        ];
        $jadwal->update($id, $data);
        return redirect()->to('/viewJadwal');
    }
}

?>