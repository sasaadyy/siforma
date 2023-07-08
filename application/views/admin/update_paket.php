<link href="<?= base_url('assets/admin/') ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/paket') ?>">Data Paket pemakaman</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Paket</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <?php foreach($detail as $row){ ?>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6  col-md-6 col-xxl-5 ">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade show active" id="first">
                                            <img class="img-thumbnail" src="<?= base_url('assets/uploads/paket/'.$row->foto) ?>" alt="">
                                        </div>

                                    </div>
                                </div>
                                <!--Tab slider End-->
                                <div class="col-xl-7 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                    <div class="product-detail-content">
                                       <div class="basic-form">

                                        <form action="<?= base_url('admin/paket/update_menu_aksi') ?>" method="post" enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col">
                                                    <label>Nama</label>
                                                    <input type="hidden" name="id_paket" class="form-control text-black" value="<?= $row->id_paket ?>">
                                                    <input type="text" name="nama_paket" class="form-control text-black" value="<?= $row->nama_paket ?>">
                                                    <?= form_error('nama_paket', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                                </div>
                                            </div>

                                            <div class="form-group mt-3">
                                                <label>Harga</label>
                                                <input type="number" name="harga" class="form-control mt-2" value="<?= $row->harga ?>">

                                            </div>
                                            <div class="form-group mt-3">
                                                <label>Deskripsi</label>
                                                <textarea class="form-control" name="deskripsi" rows="3"><?= $row->deskripsi  ?></textarea>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label>Gambar</label>
                                                <input type="file" id="file-input" name="foto" class="form-control-file mt-2" value="<?= set_value('foto') ?>">
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
<
<script src="<?= base_url('assets/admin/') ?>/vendor/highlightjs/highlight.pack.min.js"></script>
<!-- Circle progress -->


