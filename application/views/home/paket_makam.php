<div class="product-area mt-text mb-no-text">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-lg-5 col-custom m-auto text-center">
                        <div class="section-content">
                            <h2 class="title-1 text-uppercase">Paket Pelayanan</h2>
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
                        <?php foreach($paket as $row){ ?>
                            <div class="single-item">
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="<?= base_url('home/checkout'.$row->id_paket) ?>">
                                            <img src="<?= base_url('assets/uploads/paket/'.$row->foto) ?>" alt="" class="product-image-1 w-100">
                                            <img src="<?= base_url('assets/uploads/paket/'.$row->foto) ?>" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <br>
                                            <h4 class="title-2"> <a href="<?= base_url('home/cart/tambah_cart/'.$row->id_paket) ?>">Rp. <?= number_format($row->harga,0,',','.'); ?></a></h4><br>
                                            <pre class="desc-content mb-5"><?= $row->deskripsi ?></pre>
                                        </div>
                                    </div>
                                <div class="add-action d-flex position-absolute">
                            </div>
                        </div>                              
                    </div>
                 <?php } ?>
            </div>
        </div>
    </div>
</div>
</div>