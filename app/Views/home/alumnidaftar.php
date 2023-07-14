<?= $this->extend('home/templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="title-section mb-5 col-12">
                <h2 class="text-uppercase"><?= $title ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 item-entry mb-4 ">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($alumni as $row) : ?>
                                <tr>
                                    <td>
                                        <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                                            <div class="card-body">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-3 col-12 my-auto">
                                                        <img src="/foto/<?= $row->foto; ?>" alt="" width="100%" style="border-radius: 10px;">
                                                    </div>
                                                    <div class="col-md-9 col-12">
                                                        <table width="100%" class="table table-borderless">
                                                            <tr>
                                                                <td width="25%">Nama</td>
                                                                <td width="5px">:</td>
                                                                <td><?= $row->namaalumni; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">NPM</td>
                                                                <td width="5px">:</td>
                                                                <td><?= $row->npm; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">Email</td>
                                                                <td width="5px">:</td>
                                                                <td><?= $row->email; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">Jenis Kelamin</td>
                                                                <td width="5px">:</td>
                                                                <td><?= $row->jeniskelamin; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">IPK</td>
                                                                <td width="5px">:</td>
                                                                <td><?= $row->ipk; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">Jurusan & Prodi</td>
                                                                <td width="5px">:</td>
                                                                <td><?= $row->jurusan; ?> - <?= $row->prodi; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">Angkatan</td>
                                                                <td width="5px">:</td>
                                                                <td><?= $row->angkatan; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="25%">Tahun Lulus</td>
                                                                <td width="5px">:</td>
                                                                <td><?= $row->tahunlulus; ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>