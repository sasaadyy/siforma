<link href="<?= base_url('assets/admin/') ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/booking') ?>">Data Pesanan</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Pesanan</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <?php foreach ($detail as $row) { ?>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6  col-md-6 col-xxl-5 ">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade show active" id="first">
                                            <img class="img-fluid" src="<?= base_url('assets/uploads/paket/' . $row->foto) ?>" alt="">
                                        </div>

                                    </div>
                                </div>
                                <!--Tab slider End-->
                                <div class="col-xl-7 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                    <div class="product-detail-content">
                                        <div class="basic-form">

                                            <form action="<?= base_url('admin/booking/update_booking_aksi') ?>" method="post" enctype="multipart/form-data">

                                                
                                                    <div class="form-group mt-3">
                                                        <label>Nama Klien</label>
                                                        <input type="hidden" name="id_transaksi" class="form-control text-black" value="<?= $row->id_transaksi ?>">
                                                        <input type="text" name="nama" class="form-control text-black" value="<?= $row->nama ?>" readonly>

                                                    </div>
                                                                                          </div>
                                               

                                                <div class="form-group mt-3">
                                                    <label>Menu</label>
                                                    <input type="text" name="nama_paket" class="form-control text-black" value="<?= $row->nama_paket ?>" readonly>

                                                </div>
                                                <div class="form-group mt-3">
                                                    <label>Total Harga</label>
                                                    <input type="text" name="total" class="form-control text-black" value="Rp. <?= number_format($row->total, 0, ',', '.'); ?>" readonly>

                                                </div>
                                                <div class="form-group mt-3">
                                                    <label>Blok Makam</label>
                                                    <input type="text" name="nama_makam" class="form-control text-black" value="<?= $row->nama_makam ?>" readonly>

                                                </div>
                                                <div class="form-group mt-3">
                                                    <label>Status</label>
                                                    <select name="status" class="form-control text-black">
                                                        <?php if ($row->status == "" or $row->status == "NULL") { ?>
                                                            <option value="<?= $row->status ?>">Validasi Data</option>
                                                        <?php } elseif ($row->status == "Closed") { ?>
                                                            <option value="<?= $row->status ?>">Selesai</option>
                                                        <?php } elseif ($row->status == "In Procces") { ?>
                                                            <option value="<?= $row->status ?>">Dalam Proses</option>
                                                        <?php } elseif ($row->status == "Rejected") { ?>
                                                            <option value="<?= $row->status ?>">Bukti TF tidak valid</option>
                                                        <?php } else {
                                                        } ?>

                                                        <option value="Closed">Selesai</option>
                                                        <option value="In Procces">Dalam Proses</option>
                                                        <option value="Rejected">Bukti TF tidak valid</option>
                                                    </select>

                                                </div>
                                                <div class="form-group mt-4">
                                                    <a href="javascript:history.go(-1)" class="btn btn-danger light">Kembali</a>
                                                    <button type="submit" class="btn btn-primary light ml-3">Ubah</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
< <script src="<?= base_url('assets/admin/') ?>/vendor/highlightjs/highlight.pack.min.js">
    </script>
    <!-- Circle progress -->