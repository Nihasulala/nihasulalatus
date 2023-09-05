<?php
class Rpl extends Controller {
    public function index() {
        $data['judul'] = "Rpl";
        $this->view('templates/header', $data);
        $this->view('rpl/index');
        $this->view('templates/footer');
    }
}