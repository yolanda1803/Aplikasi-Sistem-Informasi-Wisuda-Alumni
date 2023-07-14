<?= $this->extend('internal/templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Alumni</h6>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('internal/alumniedit/' . $id) ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="FotoLama" value="<?= $row->foto; ?>">
                        <div class="form-group">
                            <label>Nama Alumni</label>
                            <input type="text" class="form-control" name="namaalumni" value="<?= $row->namaalumni ?>" required>
                        </div>
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="number" class="form-control" name="npm" value="<?= $row->npm ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="jeniskelamin" required>
                                <option <?php if ($row->jeniskelamin == 'Laki') echo 'selected'; ?> value="Laki-Laki">Laki-Laki</option>
                                <option <?php if ($row->jeniskelamin == 'Laki') echo 'selected'; ?> value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>IPK</label>
                            <input type="number" class="form-control" name="ipk" value="<?= $row->ipk ?>">
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select class="form-control" name="jurusan" required>
                                <option <?php if ($row->jurusan == 'Teknik Sipil') echo 'selected'; ?> value="Teknik Sipil">Teknik Sipil</option>
                                <option <?php if ($row->jurusan == 'Teknik Mesin') echo 'selected'; ?> value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option <?php if ($row->jurusan == 'Teknik Kimia') echo 'selected'; ?> value="Teknik Kimia">Teknik Kimia</option>
                                <option <?php if ($row->jurusan == 'Teknik Komputer') echo 'selected'; ?> value="Teknik Komputer">Teknik Komputer</option>
                                <option <?php if ($row->jurusan == 'Akuntansi') echo 'selected'; ?> value="Akuntansi">Akuntansi</option>
                                <option <?php if ($row->jurusan == 'Administrasi Bisnis') echo 'selected'; ?> value="Administrasi Bisnis">Administrasi Bisnis</option>
                                <option <?php if ($row->jurusan == 'Manajemen Informatika') echo 'selected'; ?> value="Manajemen Informatika">Manajemen Informatika</option>
                                <option <?php if ($row->jurusan == 'Bahasa Inggris') echo 'selected'; ?> value="Bahasa Inggris">Bahasa Inggris</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Program Studi</label>
                            <select class="form-control" name="prodi" required>
                                <option <?php if ($row->prodi == 'D-III Teknik Mesin MR') echo 'selected'; ?> value="D-III Teknik Mesin MR">D-III Teknik Mesin MR</option>
                                <option <?php if ($row->prodi == 'D-IV Teknik Mesin Produksi dan Perawatan') echo 'selected'; ?> value="D-IV Teknik Mesin Produksi dan Perawatan">D-IV Teknik Mesin Produksi dan Perawatan</option>
                                <option <?php if ($row->prodi == 'D-III Teknik Sipil') echo 'selected'; ?> value="D-III Teknik Sipil">D-III Teknik Sipil</option>
                                <option <?php if ($row->prodi == 'D-IV Perancangan Jalan dan Jembatan') echo 'selected'; ?> value="D-IV Perancangan Jalan dan Jembatan">D-IV Perancangan Jalan dan Jembatan</option>
                                <option <?php if ($row->prodi == 'D-III Teknik Kimia') echo 'selected'; ?> value="D-III Teknik Kimia">D-III Teknik Kimia</option>
                                <option <?php if ($row->prodi == 'D-IV Teknologi Kimia Industri') echo 'selected'; ?> value="D-IV Teknologi Kimia Industri">D-IV Teknologi Kimia Industri</option>
                                <option <?php if ($row->prodi == 'D-IV Teknik Energi') echo 'selected'; ?> value="D-IV Teknik Energi">D-IV Teknik Energi</option>
                                <option <?php if ($row->prodi == 'D-III Akuntansi') echo 'selected'; ?> value="D-III Akuntansi">D-III Akuntansi</option>
                                <option <?php if ($row->prodi == 'D-IV Akuntansi Sektor Publik') echo 'selected'; ?> value="D-IV Akuntansi Sektor Publik">D-IV Akuntansi Sektor Publik</option>
                                <option <?php if ($row->prodi == 'D-III Administrasi Bisnis') echo 'selected'; ?> value="D-III Administrasi Bisnis">D-III Administrasi Bisnis</option>
                                <option <?php if ($row->prodi == 'D-IV Usaha Perjalanan Wisata') echo 'selected'; ?> value="D-IV Usaha Perjalanan Wisata">D-IV Usaha Perjalanan Wisata</option>
                                <option <?php if ($row->prodi == 'D-IV Manajemen Bisnis') echo 'selected'; ?> value="D-IV Manajemen Bisnis">D-IV Manajemen Bisnis</option>
                                <option <?php if ($row->prodi == 'D-IV Usaha Perjalanan Wisata') echo 'selected'; ?> value="D-IV Usaha Perjalanan Wisata">D-IV Usaha Perjalanan Wisata</option>
                                <option <?php if ($row->prodi == 'D-III Teknik Komputer') echo 'selected'; ?> value="D-III Teknik Komputer">D-III Teknik Komputer</option>
                                <option <?php if ($row->prodi == 'D-IV Teknologi Multimedia Digital') echo 'selected'; ?> value="D-IV Teknologi Multimedia Digital">D-IV Teknologi Multimedia Digital</option>
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
                                    <option <?php if ($row->angkatan == $tahunakhir) echo 'selected'; ?> value="<?= $tahunakhir ?>"><?= $tahunakhir ?></option>
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
                                    <option <?php if ($row->tahunlulus == $tahunakhir) echo 'selected'; ?> value="<?= $tahunakhir ?>"><?= $tahunakhir ?></option>
                                <?php
                                    $tahunakhir = $tahunakhir - 1;
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="<?= $row->email ?>">
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