<?php
class Tkp extends Controller {
    public function index() {
        $data['judul'] = "Tkp";
        $this->view('templates/header', $data);
        $this->view('tkp/index');
        $this->view('templates/footer');
    }
}