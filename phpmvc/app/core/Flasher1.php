<?php

class Flasher1 {
    public static function  setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash1'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }
    public static function flash1()
    {
        if( isset($_SESSION['flash1']) ) {
            echo    '<div class="alert alert-' . $_SESSION['flash1']['tipe'] . 'alert alert-success d-flex align-item-center fade show" role="alert">
                            Data Guru <strong>' . $_SESSION['flash1']['pesan'] . '</strong> ' . $_SESSION['flash1']['aksi'] . '
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true".&times;</span>
                            </button>
                    </div>';
            unset($_SESSION['flash1']);
                
        }
    }
}