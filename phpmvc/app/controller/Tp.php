<?php
class Tp extends Controller {
    public function index() {
        $data['judul'] = "Tp";
        $this->view('templates/header', $data);
        $this->view('tp/index');
        $this->view('templates/footer');
    }
}