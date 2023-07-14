<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Informasi Wisuda & Alumni Polinela</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url() ?>assets/home/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/aos.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/style.css">
    <link rel="icon" type="image/x-icon" href="<?= base_url('foto/logo.png') ?>">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    <?php if (session()->getFlashdata('alert') !== NULL) : ?>
        <script>
            alert("<?= session()->getFlashdata('alert') ?>");
        </script>
    <?php endif; ?>

    <div class="site-wrap">

        <div class="site-navbar bg-primary py-2">

            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <div class="site-logo">
                            <img src="<?= base_url('foto/logo.png') ?>" width="80px">
                        </div>
                    </div>
                    <div class="main-nav d-none d-lg-block">
                        <nav class="site-navigation text-right text-md-center" role="navigation">
                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li><a href="<?= base_url() ?>home">Home</a></li>
                                <li><a href="<?= base_url() ?>home/infowisudadaftar">Info Wisuda</a></li>
                                <li><a href="<?= base_url() ?>home/alumnidaftar">Daftar Alumni</a></li>
                                <li><a href="<?= base_url() ?>home/login">Login Administrator</a></li>
                            </ul>
                        </nav>
                    </div>
                    <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
                </div>
            </div>
        </div>
        <?= $this->renderSection('page-content'); ?>
    </div>
    <script src="<?= base_url() ?>assets/home/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/home/js/jquery-ui.js"></script>
    <script src="<?= base_url() ?>ssets/home/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/home/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/home/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/home/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>assets/home/js/aos.js"></script>
    <script src="<?= base_url() ?>assets/home/js/main.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabel').DataTable();
        });
    </script>
</body>

</html>