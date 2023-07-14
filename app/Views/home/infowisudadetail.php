<?= $this->extend('home/templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="title-section mb-5 col-12">
                <h2 class="text-uppercase">Detail Info Wisuda</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="#">
                    <img src="<?= base_url() ?>/foto/<?= $datainfowisuda['foto']; ?>" width="100%">
                </a>
            </div>
            <div class="col-md-12">
                <h2 class="text-black mt-3"><?= $datainfowisuda['judul'] ?></h2>
                <p><strong class="text-primary h4"><?= $datainfowisuda['tanggal'] ?></strong></p>
                <p><?= $datainfowisuda['deskripsi'] ?></p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>