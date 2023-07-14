<?= $this->extend('internal/templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="<?= base_url('internal/alumnitambah') ?>" class="btn btn-primary my-3">Tambah Data</a>
            <h1 class="mt-2">Daftar Alumni</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>NPM</th>
                            <th>Email</th>
                            <th>JK</th>
                            <th>IPK</th>
                            <th>Jurusan</th>
                            <th>Prodi</th>
                            <th>Angkatan</th>
                            <th>Tahun Lulus</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($alumni as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><img src="/foto/<?= $row->foto; ?>" alt="" width="150px"></td>
                                <td><?= $row->namaalumni; ?></td>
                                <td><?= $row->npm; ?></td>
                                <td><?= $row->email; ?></td>
                                <td><?= $row->jeniskelamin; ?></td>
                                <td><?= $row->ipk; ?></td>
                                <td><?= $row->jurusan; ?></td>
                                <td><?= $row->prodi; ?></td>
                                <td><?= $row->angkatan; ?></td>
                                <td><?= $row->tahunlulus; ?></td>
                                <td>
                                    <a href="<?= base_url('internal/alumniedit/' . $row->idalumni) ?>" class="btn btn-success m-1">Edit</a>
                                    <a href="<?= base_url('internal/alumnihapus/' . $row->idalumni) ?>" class="btn btn-danger m-1" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Hapus</a>
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