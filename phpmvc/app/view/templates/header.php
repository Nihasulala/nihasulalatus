<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL; ?> /css/bootstrap.css">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="container">
        <img src="<?= BASE_URL; ?>/img/logo_smk.png" width="50" height="50" alt="">
        <a class="navbar-brand" href="<?= BASE_URL; ?>">SMKN 2 <span>Trenggalek</span></a>
        <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="<?= BASE_URL; ?>">Home<span class="sr-only">(current)</span></a>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kompetensi Keahlian
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= BASE_URL; ?>/kuliner/index">Kuliner</a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= BASE_URL; ?>/dpib/index">Design Pemodelan dan<br/> Informasi Bangunan</a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= BASE_URL; ?>/rpl/index">Rekayasa Perangkat<br/> Lunak</a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= BASE_URL; ?>/tptu/index">Teknik Pemanasan,<br/>Tata Udara dan Pendingin</a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= BASE_URL; ?>/akuntansi/index">Akuntansi</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= BASE_URL; ?>/tkp/index">Teknik Konstruksi <br/>dan Perumahan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= BASE_URL; ?>/tp/index">Teknik Pengelasan</a>
                    </li>
                <a class="nav-item nav-link" href="<?= BASE_URL; ?>/guru/index">Data Guru</a>
                <a class="nav-item nav-link" href="<?= BASE_URL; ?>/siswa/index">Data Siswa</a>
                <a class="nav-item nav-link" href="<?= BASE_URL; ?>/about/profile">About</a>
            </div>
        </div>
    </div>
</nav>