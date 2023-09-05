<?php
class Akuntansi extends Controller {
    public function index() {
        $data['judul'] = "Akuntansi";
        $this->view('templates/header', $data);
        $this->view('akuntansi/index');
        $this->view('templates/footer');
    }
}