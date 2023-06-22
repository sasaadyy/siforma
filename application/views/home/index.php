<style>
    html {
        scroll-behavior: smooth;
    }
</style>


<!-- Begin Slider Area One -->
<div class="carousel" style="background-image: url('<?= base_url('assets/') ?>bege.png')">
    <div class="container">
        <h4>Persiapkan yang Terbaik <br>untuk Orang Tersayang</h4>
        <p>SIFORMA hadir sebagai solusi pemakaman yang aman dan mudah bagi <br>
            masyarakat di sekitar Bandung </p>
        <a class="obrien-button primary-btn" href="#paket">Booking Now</a>
    </div>
    <div class="col-lg-5 d-flex justify-content-end">
        <div class="img-bg">
            <img src="<?= base_url('assets/imghero.jpg'); ?>">
        </div>
    </div>
</div>
</div>
</div>
<!-- Slider Area One End Here -->
<!-- Product Area Start Here -->
<div class="product-area mt-text mb-no-text">
    <div class="container container-default custom-area" id="paket">
        <div class="row">
            <div class="col-lg-5 col-custom m-auto text-center">
                <div class="section-content">
                    <h2 class="title-1 text-uppercase">Paket Pelayanan</h2>
                    <p>Pilih Paket Pelayanan Pemakaman yang Anda Suka</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product-wrapper col-lg-12 col-custom">
                <div class="product-slider" data-slick-options='{
                    "slidesToShow": 4,
                    "slidesToScroll": 1,
                    "infinite": true,
                    "arrows": false,
                    "dots": false
                    }' data-slick-responsive='[
                    {"breakpoint": 1200, "settings": {
                    "slidesToShow": 3
                    }},
                    {"breakpoint": 992, "settings": {
                    "slidesToShow": 2
                    }},
                    {"breakpoint": 576, "settings": {
                    "slidesToShow": 1
                    }}
                    ]'>
                    <?php foreach ($paket as $row) { ?>
                        <div class="single-item">
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="<?= base_url('home/cart/tambah_cart/' . $row->id_paket) ?>">
                                        <img src="<?= base_url('assets/uploads/paket/' . $row->foto) ?>" alt="" class="product-image-1 w-100">
                                        <img src="<?= base_url('assets/uploads/paket/' . $row->foto) ?>" alt="" class="product-image-2 position-absolute w-100">
                                    </a>
                                </div>
                                <div class="product-content" style="height: 200px;">
                                    <div class="product-title">
                                        <br>
                                        <h4 class="title-2"> <a href="<?= base_url('home/cart/tambah_cart/' . $row->id_paket) ?>">Rp. <?= number_format($row->harga, 0, ',', '.'); ?></a></h4><br>
                                        <pre class="desc-content mb-5"><?= $row->deskripsi ?></pre>
                                    </div>
                                </div>
                                <div class="product-content pt-3">
                                    <hr>
                                    <span>Blok Makam &nbsp; : <strong><?= $row->nama_makam ?></strong></span>
                                </div>
                            </div>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->

<!-- Product Area Start Here -->
<div class="product-area mt-text mb-text-p">
    <div class="container container-default custom-area">
        <div class="row">
            <div class="col-lg-5 m-auto text-center col-custom">
                <div class="section-content">
                    <h2 class="title-1 text-uppercase">Blok Makam</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 product-wrapper col-custom">
                <div class="product-slider" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": false,
                        "dots": false
                        }' data-slick-responsive='[
                        {"breakpoint": 1200, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint": 992, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint": 576, "settings": {
                        "slidesToShow": 1
                        }}
                        ]'>
                    <?php foreach ($makam as $row) { ?>
                        <div class="single-item">
                            <div class="single-product position-relative mb-30">
                                <div class="product-image">
                                    <a class="d-block" href="<?= base_url('dashboard/makam_detail/' . $row->id_makam) ?>">
                                        <img src="<?= base_url('assets/uploads/makam/' . $row->gambar) ?>" alt="" class="product-image-1 w-100">
                                        <img src="<?= base_url('assets/uploads/makam/' . $row->gambar) ?>" alt="" class="product-image-2 position-absolute w-100">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <br>
                                        <h4 class="title-2"> <a href="<?= base_url('dashboard/makam_detail/' . $row->id_makam) ?>"><?= $row->nama_makam ?></a></h4>
                                        <hr>
                                        <h4 class="title-2">Tersedia : <?= $row->jml_makam ?></h4>
                                    </div>
                                </div>

                            </div>

                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->
<!-- Banner Area Start Here -->

<!-- Support Area End Here -->