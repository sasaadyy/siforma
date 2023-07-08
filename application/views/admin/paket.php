<link href="<?= base_url('assets/admin/') ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>vendor/star-rating/star-rating-svg.css">
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Paket Pemakaman</a></li>
            </ol>
        </div>      
        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('pesan'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Data Paket</strong></h4>
                        <a href="" class="pull-right btn btn-facebook" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus"></i> Tambah Data Paket</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th>Paket</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($paket as $row){
                                        ?>                                
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><img src="<?= base_url('assets/uploads/paket/'.$row->foto) ?>" alt="" width="60"></td>
                                                <td><a href="javascript:void(0);"><strong><?= $row->nama_paket ?></strong></a></td>
                                                <td><pre><?= $row->deskripsi ?></pre></td>
                                                <td>Rp. <?= number_format($row->harga,0,',','.'); ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/paket/edit_menu/'.$row->id_paket) ?>" class="btn btn-facebook shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?= base_url('admin/paket/delete_menu/'.$row->id_paket) ?>" class="btn btn-youtube shadow btn-sm sharp" onclick=" return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>       
<div class="modal fade" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Paket</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/paket/tambah_menu') ?>"  method="post" enctype="multipart/form-data">
                 <div class="form-group mt-3">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Nama Paket</label>
                        <input type="text" class="form-control" name="nama_paket" placeholder="Masukan Nama Paket" required>
                    </div>
                    <div class="col">
                        <label>Blok Makam</label>
                        <select name="id_makam" class="form-control">
                        <option>--Pilih Blok Makam--</option>
                        <?php foreach($makam as $res){ ?>
                        <option value="<?= $res->id_makam ?>"><?= $res->nama_makam ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Harga</label>
                        <input type="number" class="form-control" name="harga" placeholder="Masukan Harga" required>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="2" class="form-control" placeholder="Deskripsi Paket"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Gambar</label>
                        <input type="file" class="form-control-file" name="foto" value="<?= set_value('foto') ?>" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary light">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="<?= base_url('assets/admin/') ?>/vendor/highlightjs/highlight.pack.min.js"></script>
<!-- Circle progress -->

<!-- Rating -->
<script src="<?= base_url('assets/admin/') ?>/vendor/star-rating/jquery.star-rating-svg.js"></script>