<?php
class User extends Controller{
    public function index(){
        $data['judul'] = "User";
        $this->view('templates/header', $data);
        $this->view("user/index");
        $this->view('templates/footer');
    }
    public function profile($nama = "Wahyu Aji", $pekerjaan ="Siswa RPL"){
        $data['judul'] = "User";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('templates/header', $data);
        $this->view("user/profile", $data);
        $this->view('templates/footer');
    }
}
?>