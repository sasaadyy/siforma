<link href="<?= base_url('assets/admin/') ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/makam/makam_grid') ?>">Data Makam</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Makam</a></li>
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
                                            <img class="img-thumbnail" src="<?= base_url('assets/uploads/makam/'.$row->gambar) ?>" alt="">
                                        </div>

                                    </div>
                                </div>
                                <!--Tab slider End-->
                                <div class="col-xl-7 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                    <div class="product-detail-content">
                                       <div class="basic-form">

                                        <form action="<?= base_url('admin/makam/update_makam_aksi') ?>" method="post" enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col">
                                                    <label>Nama</label>
                                                    <input type="hidden" name="id_makam" class="form-control text-black" value="<?= $row->id_makam ?>">
                                                    <input type="text" name="nama_makam" class="form-control text-black" value="<?= $row->nama_makam ?>">
                                                    <?= form_error('nama_makam', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                                </div>            
                                            </div>
                                            <div class="form-group mt-3">
                                                <label>Jumlah Makam</label>
                                                <textarea type="text" class="form-control text-black" name="jml_makam" rows="2"><?= $row->jml_makam  ?></textarea>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label>Gambar</label>
                                                <input type="file" id="file-input" name="gambar" class="form-control-file mt-2" value="<?= set_value('gambar') ?>">

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


