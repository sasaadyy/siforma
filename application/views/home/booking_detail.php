<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <div class="breadcrumb-content position-relative section-content">
                <h3 class="title-3"> Detail Booking</h3>
            </div>
        </div>
    </div>
</div>
</div>
<div class="single-product-main-area">
    <div class="container container-default custom-area">
        <?php foreach ($detail as $row) { ?>
            <div class="row">
                <div class="col-lg-5 col-custom">
                    <div class="product-details-img horizontal-tab">
                        <div class="product-slider popup-gallery product-details_slider" data-slick-options='{
                            "slidesToShow": 1,
                            "arrows": false,
                            "fade": true,
                            "draggable": false,
                            "swipe": false,
                            "asNavFor": ".pd-slider-nav"
                        }'>
                            <div class="single-image border">
                                <a href="<?= base_url('assets/uploads/paket/' . $row->foto) ?>">
                                    <img src="<?= base_url('assets/uploads/paket/' . $row->foto) ?>" alt="Product">
                                </a>
                            </div>
                            <div class="single-image border">
                                <a href="<?= base_url('assets/uploads/makam/' . $row->gambar) ?>">
                                    <img src="<?= base_url('assets/uploads/makam/' . $row->gambar) ?>" alt="Product">
                                </a>
                            </div>
                        </div>
                        <div class="pd-slider-nav product-slider" data-slick-options='{
                        "slidesToShow": 4,
                        "asNavFor": ".product-details_slider",
                        "focusOnSelect": true,
                        "arrows" : false,
                        "spaceBetween": 30,
                        "vertical" : false
                    }' data-slick-responsive='[
                    {"breakpoint":1501, "settings": {"slidesToShow": 4}},
                    {"breakpoint":1200, "settings": {"slidesToShow": 4}},
                    {"breakpoint":992, "settings": {"slidesToShow": 4}},
                    {"breakpoint":575, "settings": {"slidesToShow": 3}}
                    ]'>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-custom">
                    <div class="product-summery position-relative">
                        <div class="product-head mb-3">
                            <h2 class="product-title"><?= $row->nama ?></h2>
                        </div>
                        <div class="price-box mb-2">
                            <span class="regular-price"><?= $row->nama_paket ?></span>

                            <div class="sku mt-3">
                                <table class="table table-responsive table-borderless">
                                    <tr>
                                        <td width="150">Harga Paket</td>
                                        <td width="1">:</td>
                                        <td>Rp. <?= number_format($row->harga, 0, ',', '.'); ?> </td>
                                    </tr>
                                    <tr>
                                        <td width="150">Status</td>
                                        <td width="1">:</td>
                                        <td>
                                            <?php if ($row->status == "" or $row->status == "NULL") { ?>
                                                <span class="text-info"><strong>Validasi Data</strong></span>
                                            <?php } elseif ($row->status == "Rejected") { ?>
                                                <span class="text-danger"><strong>Bukti TF tidak valid</strong></span>
                                            <?php } elseif ($row->status == "In Procces") { ?>
                                                <span class="text-warning"><strong>Dalam Proses</strong></span>
                                            <?php } elseif ($row->status == "Closed") { ?>
                                                <span class="text-success"><strong>Selesai</strong></span>
                                            <?php } else { ?>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="150">Makam</td>
                                        <td width="1">:</td>
                                        <td><?= $row->nama_makam ?></td>
                                    </tr>
                                    <tr>
                                        <td width="150">Alamat</td>
                                        <td width="1">:</td>
                                        <td><?= $row->alamat_users ?></td>
                                    </tr>
                                    <tr>
                                        <td width="150">Tanggal Booking</td>
                                        <td width="1">:</td>
                                        <td><?= date('d F, Y', strtotime($row->tanggal)) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Jenazah</td>
                                        <td>:</td>
                                        <td><?= $row->nm_jenazah ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>:</td>
                                        <td><?= date('d F, Y', strtotime($row->tanggal_lahir)) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Wafat</td>
                                        <td>:</td>
                                        <td><?= date('d F, Y', strtotime($row->tanggal_wafat)) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Pemakaman</td>
                                        <td>:</td>
                                        <td><?= date('d F, Y', strtotime($row->tanggal_pemakaman)) ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="sku mb-3">
                                <a href="<?= base_url('home/booking') ?>" class="btn obrien-button-2 bg-secondary rounded-0 text-white">Kembali</a>
                                <?php if ($row->status == "" or $row->status == "NULL") { ?>                                   
                                <?php } else {
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>