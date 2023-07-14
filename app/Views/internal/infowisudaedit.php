<?= $this->extend('internal/templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Informasi Wisuda</h6>
                </div>
                <div class="card-body">
                    <form action="/internal/updateinfowisuda/<?= $row['idinfowisuda']; ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="FotoLama" value="<?= $row['foto']; ?>">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" value="<?= $row['judul'] ?>" class="form-control" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="text" value="<?= $row['tanggal'] ?>" class="form-control" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" class="form-control" name="deskripsi" rows="10" required><?= $row['deskripsi'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <div class="custom-file" style="margin-bottom: 10px;">
                                <input type="file" class="form-control" name="foto">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right" name="tambah">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>