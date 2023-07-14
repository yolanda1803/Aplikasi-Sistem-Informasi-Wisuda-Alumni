<?= $this->extend('internal/templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/internal/infowisudatambah" class="btn btn-primary my-3">Tambah Data</a>
            <h1 class="mt-2"><?= $title ?></h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($infowisuda as $p) : ?>
                            <tr>
                                <th><?= $i++ ?></th>
                                <td><?= $p['judul']; ?></td>
                                <td><?= $p['tanggal']; ?></td>
                                <td><?= potong($p['deskripsi'], 100); ?>...</td>
                                <td><img src="/foto/<?= $p['foto']; ?>" alt="" width="150px"></td>
                                <td>
                                    <a href="/internal/infowisudaedit/<?= $p['idinfowisuda'] ?>" class="btn btn-success m-1">Edit</a>
                                    <a href="/internal/hapusinfowisuda/<?= $p['idinfowisuda'] ?>" class="btn btn-danger m-1" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>