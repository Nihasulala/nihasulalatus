<div class="container mt-5">
    <div class="card" style="width : 25rem;">
    <div class="card-header">
        Data Guru
    </div>
        <div class="card-body">
            <h5 class="card-title">
                <?= $data['guru']['nama']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['guru']['kode_guru']; ?></h6>
            <p class="card-text"><?= $data['guru']['mapel']; ?></p>
            <p class="card-text"><?= $data['guru']['prod_nonprod']; ?></p>
            <a href=" <?= BASE_URL; ?>/guru/index" class="btn btn-sm btn-secondary">Kembali</a>
        </div>
    </div>
</div>