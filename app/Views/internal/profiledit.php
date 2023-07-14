<?= $this->extend('internal/templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Profil</h6>
                </div>
                <div class="card-body">
                    <form action="/internal/updateprofil/<?= $pengguna['idpengguna'] ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $pengguna['nama']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="<?= $pengguna['email']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password" value="<?= $pengguna['password']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>No. HP</label>
                            <input type="number" class="form-control" name="nohp" value="<?= $pengguna['nohp']; ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary float-right" name="tambah">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>