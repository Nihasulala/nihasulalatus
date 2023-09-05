<?php
class Tptu extends Controller {
    public function index() {
        $data['judul'] = "Tptu";
        $this->view('templates/header', $data);
        $this->view('tptu/index');
        $this->view('templates/footer');
    }
}