<?= $this->extend('internal/templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <?php if (session()->getFlashdata('msg')) : ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>
    <h1 class="h3 mb-4 text-gray-800">Selamat datang, <b><?= session('nama') ?></b><br>Di website Data Informasi Wisuda & Alumni Polinela</h1>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Info Wisuda</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahinfowisuda ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Alumni</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahalumni ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>