<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-10">
                <?php Flasher1::flash1(); ?>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
                    Tambah Data Guru
                </button>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL;?>/guru/tambah"method="POST">
        <input type="hidden" name="id" id="id">

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="kode_guru">Kode Guru</label>
            <input type="text" class="form-control" id="kode_guru" name="kode_guru">
        </div> 
        <div class="form-group">
            <label for="mapel">Mapel</label>
            <select class="form-control" id="mapel" name="mapel">
                <option value="bahasa_indonesia">Bahasa Indonesia</option>
                <option value="pemrograman_web">Pemrograman Web dan Perangkat Bergerak</option>
                <option value="matematika">Matematika</option>
                <option value="pemrograman_berorientasi">Pemrograman Berorientasi Objek</option>
                <option value="basis_data">Basis Data</option>
                <option value="pkwu">PKWU</option>
            </select>
        </div>
        <div class="form-group">
            <label for="prod_nonprod">Golongan Mapel</label>
            <select class="form-control" id="prod_nonprod" name="prod_nonprod">
                <option value="produktif">Produktif</option>
                <option value="non_produktif">Non-Produktif</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        
      </div>
    </div>
  </div>
</div>
                <h3 class="mt-4">Data Guru</h3>
                <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                  ?>
                <?php foreach ($data['guru'] as $guru) : ?>
                  <tr>
                    <th scope="row"><?= $no++?></th>
                    <td><?= $guru['nama']; ?></td>
                    <td><a href="<?= BASE_URL; ?>/guru/detail/<?= $guru['id']; ?>"class="badge badge-primary">detail</a>
                        <a href="<?= BASE_URL; ?>/guru/ubah/<?= $guru['id'];?>"class="badge badge-success tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $guru['id'];?>">ubah</a>
                        <a href="<?= BASE_URL; ?>/guru/hapus/<?= $guru['id'];?>"class="badge badge-danger" onclick="return confirm('yakin?');">hapus</a></td>
  
    <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
