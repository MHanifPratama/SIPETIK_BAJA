<?php 
namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\StaffKeuangan;
class FunctionStaffKeuangan extends BaseController{
    public function listStaff(){


        $staff_keuangan = new StaffKeuangan() ;
        $dataStaff = $staff_keuangan->findAll();
        $data = [
            'title' => 'Staff Keuangan',
            'staff_keuangan' => $dataStaff
        ];
        return view('admin\staffKeuangan\viewStaff',$data);
    }

    public function tambahStaff(){
        $staff_keuangan = new StaffKeuangan() ;
        $dataStaff = $staff_keuangan->findAll();
        $data = [
            'title' => 'Membuat Biodata',
            'staff' => $dataStaff,
        ];
        return view('admin\staffKeuangan\tambahStaff', $data);
    }
    public function simpan(){
        if(!$this->validate([
            'email'=>'required',
            'nama_staff'=>'required',
            'password'=>'required',
            'no_hp'=>'required'
        ])){
            return redirect()->to('/viewTambahStaff');
        }
        $dataStaff = new StaffKeuangan();
        $data = [
            'email' => $this -> request -> getPost('email'),
            'nama_staff' => $this -> request -> getPost('nama_staff'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'no_hp' => $this -> request -> getPost('no_hp')
        ];

        $dataStaff->save($data);
        return redirect()->to('/viewStaffKeuangan');
    }
    public function hapus($id_akun_staff_keuangan)
    {
        $BiodataModel = new StaffKeuangan();
        $BiodataModel->delete($id_akun_staff_keuangan);
    
        return redirect()->to('/viewStaffKeuangan');
    
    }
    public function editStaff($id_akun_staff_keuangan){
        $staff_keuangan = new StaffKeuangan();
        $dataStaff= $staff_keuangan->find($id_akun_staff_keuangan);
        
        $data = [
            'title' => ' Edit Staff Keuangan',
            'StaffKeuangan' => $dataStaff,
        ];
        return view('admin/staffKeuangan/viewEditStaff', $data);
    }
    public function update($id_akun_staff_keuangan){
        if(!$this->validate([
            'email'=>'required',
            'nama_staff'=>'required',
            'password'=>'required',
            'no_hp'=>'required'
        ])){
            return redirect()->to('/editStaff');
        }

        $staffModel = new StaffKeuangan();
        $data = [
            'email' => $this -> request -> getVar('email'),
            'nama_staff' => $this -> request -> getVar('nama_staff'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'no_hp' => $this -> request -> getVar('no_hp'),
        ];

        $staffModel->update($id_akun_staff_keuangan, $data);
        return redirect()->to('/viewStaffKeuangan');
    }
}