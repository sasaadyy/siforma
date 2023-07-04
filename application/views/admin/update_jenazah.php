<link href="<?= base_url('assets/admin/') ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/jenazah') ?>">Data Jenazah</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Jenazah</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <?php foreach($detail as $row){ ?>
               <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Update Jenazah</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin/jenazah/update_jenazah_aksi') ?>" method="post">
                         <div class="form-group mt-3">
                            <label>Nama Jenazah</label>                
                            <input type="hidden" name="id_transaksi" value="<?= $row->id_transaksi ?>">
                            <input type="text" name="nm_jenazah" class="form-control text-black" value="<?= $row->nm_jenazah ?>">
                            <?= form_error('nama_jenazah', '<small class="text-danger" style="color: red;">','</small>'); ?>

                        </div>
                        <div class="form-group mt-3">
                            <label>Tanggal Lahir</label>                
                            <input type="hidden" name="id_transaksi" value="<?= $row->id_transaksi ?>">
                            <input type="date" name="tanggal_lahir" class="form-control text-black" value="<?= $row->tanggal_lahir ?>">
                            <?= form_error('tanggal_lahir', '<small class="text-danger" style="color: red;">','</small>'); ?>
                        </div>
                        <div class="form-group mt-3">
                            <label>Tanggal Wafat</label>                
                            <input type="hidden" name="id_transaksi" value="<?= $row->id_transaksi ?>">
                            <input type="date" name="tanggal_wafat" class="form-control text-black" value="<?= $row->tanggal_wafat ?>">
                            <?= form_error('tanggal_wafat', '<small class="text-danger" style="color: red;">','</small>'); ?>
                        </div>
                        <div class="form-group mt-3">
                            <label>Tanggal Pemakaman</label>                
                            <input type="hidden" name="id_transaksi" value="<?= $row->id_transaksi ?>">
                            <input type="date" name="tanggal_pemakaman" class="form-control text-black" value="<?= $row->tanggal_pemakaman ?>">
                            <?= form_error('tanggal_pemakaman', '<small class="text-danger" style="color: red;">','</small>'); ?>
                        </div>                        
                    </div>
                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                        <div class="card-footer-link mb-4 mb-sm-0">
                            <a href="javascript:history.go(-1)" class="btn btn-danger light">Kembali</a>
                            <button type="submit" class="btn btn-primary light ml-3">Ubah</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</div>
</div>
</div>
</div>
</div>
<
<script src="<?= base_url('assets/admin/') ?>/vendor/highlightjs/highlight.pack.min.js"></script>
<!-- Circle progress -->


