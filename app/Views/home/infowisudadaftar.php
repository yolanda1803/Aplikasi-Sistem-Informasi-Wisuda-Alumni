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
            <?php foreach ($infowisuda as $p) : ?>
                <div class="col-md-12 item-entry mb-4">
                    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                        <div class="card-body">
                            <a href="<?= base_url() ?>home/infowisudadetail/<?= $p['idinfowisuda'] ?>">
                                <img src="/foto/<?= $p['foto']; ?>" width="100%">
                            </a>
                            <h2 class="item-title"><a href="<?= base_url() ?>home/infowisudadetail/<?= $p['idinfowisuda'] ?>"><?= potong($p['judul'], 40); ?>...</a></h2>
                            <strong class="item-price"><?= $p['tanggal'] ?></strong>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>