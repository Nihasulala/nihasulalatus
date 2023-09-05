<?php
class About extends Controller {
    public function index() {
        $data['judul'] = "About";
        $this->view("templates/header", $data);
        $this->view("about/index");
        $this->view("templates/footer");
    }
    public function profile($nama = "Niha", $pekerjaan = "Pelajar") {
        $data['judul'] = "About";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('templates/header', $data);
        $this->view('about/profile', $data);
        $this->view('templates/footer');
    }
}