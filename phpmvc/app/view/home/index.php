<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="http://localhost/phpmvc/public/css/style.css">
</head>
<body>
        <div class="container">
        <div class="home">
        <div class="row bg-light">
            <div class="col order-first">
                <a href="<?= BASE_URL; ?>/home/sejarah" style="color:black"><h4> Sejarah </h4></a>
                SMK Negeri 2 Trenggalek berdiri tanggal 21 Mei 2004. Menurut SK Bupati Trenggalek no. 275 tahun 2004 tentang pendidikan SMKN 2 Trenggalek, SMKN 2 Trenggalek awalnya bernama SMK Kecil di SMPN 5 Trenggalek. Gedung yang dimiliki dulu adalah Bekas SDN...
            </div>
            <div class="col">
                <a href="<?= BASE_URL; ?>/home/visimisi " style="color:black"><h4> Visi Misi </h4></a>
                Visi Terwujudnya sekolah unggul yang peduli dan berbudaya lingkungan Misi Meningkatkan penghayatan dan pengamalan terhadap ajaran agama yang dianut. Menciptakan suasana akademik yang kondusif. Menyiapkan sumber daya pendidikan yang berkualitas dan bermanfaat bagi pengembangan potensi peserta didik. Menyelenggarakan proses pembelajaran...
            </div>
        </div>

        <div class="row">
        <div class="col-3">
        <h4 class="mt-3">News</h4>
            <div class="card">
            <div class="card-body">
            <img class="card-img-top" src="img/home1.jpeg" alt="Card image cap">
                <h5 class="card-title">Orientasi Siswa Baru TA. 2023/2024</h5>
                <p class="card-text">MPLS merupakan Masa Pengenalan Lingkungan Sekolah. MPLS merupakan program penyambutan peserta didik baru dari pihak...</p>
                <a href="#" class="card-link">Read More >></a>
            </div>
            </div>
        </div>
        <div class="col-sm-4 mt-5">
            <div class="card">
            <div class="card-body">
            <img class="card-img-top" src="img/home2.jpeg" alt="Card image cap">
                <h5 class="card-title">"Gema War On Drugs" Menyanyikan Lagu Mars BNN</h5>
                <p class="card-text">KEIKUTSERTAAN SMKN 2 TRENGGALEK DALAM ACARA GEMA WAR ON DRUGS BERSAMA BNN NAPZA merupakan zat...</p>
                <a href="#" class="card-link">Read More >></a>
            </div>
            </div>
        </div>
        <div class="col-sm-4 mt-4">
        <ul class="list-unstyled">
        <h4>Events</h4>
        <li class="media bg-light">
            <img class="mr-3" src="img/media1.jpeg" alt="Generic placeholder image" width="50" height="50" >
            <div class="media-body">
            <h5 class="mt-0 mb-1">Orientasi Siswa Baru TA. 2023/2024</h5>
            MPLS merupakan Masa Pengenalan Lingkungan Sekolah. MPLS merupakan program penyambutan...
            </div>
        </li>
        <li class="media bg-light">
            <img class="mr-3" src="img/media2.jpeg" alt="Generic placeholder image" width="50" height="50">
            <div class="media-body">
            <h5 class="mt-0 mb-1">"Gema War On Drugs" Menyanyikan Lagu Mars BNN</h5>
            KEIKUTSERTAAN SMKN 2 TRENGGALEK DALAM ACARA GEMA WAR ON DRUGS...
            </div>
        </li>
        <li class="media bg-light">
            <img class="mr-3" src="img/media3.jpeg" alt="Generic placeholder image" width="50" height="50">
            <div class="media-body">
            <h5 class="mt-0 mb-1">Keikutsertaan SMKN 2 Trenggalek pada LKS Jatim</h5>
            Lomba Kompetensi Siswa (LKS) Lomba Kompetensi Siswa (LKS) adalah kompetisi...
            </div>
        </li>
        </ul>
        </div>
        </div>

        <h5 class="mt-5 mb-5">Sambutan Kepala SMKN 2 Trenggalek</h5>
        <div class="media">
        <img class="mr-3" src="img/kepsek.jpg" alt="Generic placeholder image" width="500" height="300">
        <div class="media-body">
        <p>Bismillahirohmannirrohim</p>
        <br>
        <p>Assalamualaikum Warahmatullah Wabarakatuh</p>
        <br>
        <p>Selamat datang di website resmi SMKN 2 Trenggalek.
        Saya berharap Website ini dapat dijadikan wahana
        interaksi yang positif baik antar civitas akademika
        maupun masyarakat pada umumnya sehingga dapat
        menjalin silaturahmi yang erat disegala unsur. Mari kita
        bekerja dan berkarya dengan mengharap ridho sang
        Kuasa dan keikhlasan yang tulus, dijiwai demi anak
        bangsa.</p>
        <br>
        <p>Terima kasih semoga Allah ‘Azza Wa Jalla menyertai
        doa kita semua……amin</p>
        </div>
        </div>

</body>
</html>