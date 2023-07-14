<?= $this->extend('internal/templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Alumni</h6>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('internal/alumnitambah') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Alumni</label>
                            <input type="text" class="form-control" name="namaalumni" value="" required>
                        </div>
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="number" class="form-control" name="npm" value="" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="jeniskelamin" required>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>IPK</label>
                            <input type="number" class="form-control" name="ipk" value="">
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select class="form-control" name="jurusan" required>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Teknik Kimia">Teknik Kimia</option>
                                <option value="Teknik Komputer">Teknik Komputer</option>
                                <option value="Akuntansi">Akuntansi</option>
                                <option value="Administrasi Bisnis">Administrasi Bisnis</option>
                                <option value="Manajemen Informatika">Manajemen Informatika</option>
                                <option value="Bahasa Inggris">Bahasa Inggris</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Program Studi</label>
                            <select class="form-control" name="prodi" required>
                                <option value="D-III Teknik Mesin MR">D-III Teknik Mesin MR</option>
                                <option value="D-IV Teknik Mesin Produksi dan Perawatan">D-IV Teknik Mesin Produksi dan Perawatan</option>
                                <option value="D-III Teknik Sipil">D-III Teknik Sipil</option>
                                <option value="D-IV Perancangan Jalan dan Jembatan">D-IV Perancangan Jalan dan Jembatan</option>
                                <option value="D-III Teknik Kimia">D-III Teknik Kimia</option>
                                <option value="D-IV Teknologi Kimia Industri">D-IV Teknologi Kimia Industri</option>
                                <option value="D-IV Teknik Energi">D-IV Teknik Energi</option>
                                <option value="D-III Akuntansi">D-III Akuntansi</option>
                                <option value="D-IV Akuntansi Sektor Publik">D-IV Akuntansi Sektor Publik</option>
                                <option value="D-III Administrasi Bisnis">D-III Administrasi Bisnis</option>
                                <option value="D-IV Usaha Perjalanan Wisata">D-IV Usaha Perjalanan Wisata</option>
                                <option value="D-IV Manajemen Bisnis">D-IV Manajemen Bisnis</option>
                                <option value="D-III Teknik Komputer">D-III Teknik Komputer</option>
                                <option value="D-IV Teknologi Multimedia Digital">D-IV Teknologi Multimedia Digital</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Angkatan</label>
                            <select class="form-control" name="angkatan" required>
                                <?php
                                $nomor = 1;
                                $tahunawal = 2010;
                                $tahunakhir = date('Y');
                                while ($tahunakhir >= $tahunawal) {
                                ?>
                                    <option value="<?= $tahunakhir ?>"><?= $tahunakhir ?></option>
                                <?php
                                    $tahunakhir = $tahunakhir - 1;
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tahun Lulus</label>
                            <select class="form-control" name="tahunlulus" required>
                                <?php
                                $nomor = 1;
                                $tahunawal = 2010;
                                $tahunakhir = date('Y');
                                while ($tahunakhir >= $tahunawal) {
                                ?>
                                    <option value="<?= $tahunakhir ?>"><?= $tahunakhir ?></option>
                                <?php
                                    $tahunakhir = $tahunakhir - 1;
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <button type="submit" class="btn btn-primary float-right" name="tambah">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>