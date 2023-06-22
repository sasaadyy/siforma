<link href="<?= base_url('assets/admin/') ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/') ?>vendor/star-rating/star-rating-svg.css">
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Makam Grid</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-lg-12">
                <?= $this->session->flashdata('pesan'); ?>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Data Makam Grid</strong></h4>
                        <a href="" class="pull-right btn btn-facebook" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus"></i> Tambah Data Makam</a>
                    </div>
                </div>
            </div>
            <?php foreach($makam as $row){ ?>
                <div class="col-lg-12 col-xl-6">
                    <div class="card">

                        <div class="card-body">
                            <div class="row m-b-30">
                                <div class="col-md-5 col-xxl-12">
                                    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                        <div class="new-arrivals-img-contnent text-center">
                                            <img class="img-thumbnail" src="<?= base_url('assets/uploads/makam/'.$row->gambar) ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-xxl-12">
                                    <div class="new-arrival-content position-relative">
                                        <h4><a href="<?= base_url('admin/makam/menu_makam/'.$row->id_makam) ?>"><?= $row->nama_makam  ?></a></h4>
                                        <div class="comment-review star-rating">
                                            <p class="price"><?= $row->no_hp ?></p>
                                        </div>
                                        <h6>Email : <?= $row->email ?></h6>
                                        <h6>Kategori : <span class="badge badge-sm badge-success light"><?= $row->nama_kategori ?></span></h6>
                                        <p ><?= $row->buka_restoran ?> - <?= $row->tutup_restoran ?></p>
                                        <p ><?= $row->o_days ?></p>
                                        <p ><?= $row->url ?></p>
                                        <p class="text-content"><?= $row->alamat ?></p>
                                        <div class="mt-3">
                                        <a href="<?= base_url('admin/makam/menu_menu/'.$row->id_makam) ?>" class="btn btn-twitter shadow btn-sm sharp mr-1"><i class="fa fa-cutlery"></i></a>
                                         <a href="<?= base_url('admin/makam/edit_makam/'.$row->id_makam) ?>" class="btn btn-facebook shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i></a>
                                         <a href="<?= base_url('admin/makam/delete_makam/'.$row->id_makam) ?>" class="btn btn-youtube shadow btn-sm sharp" onclick="return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash"></i></a>


                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         <?php } ?>
     </div>
 </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Makam</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/makam/tambah_makam') ?>"  method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col">
                            <label class="form-control-label">Nama Makam</label>
                            <input type="text" class="form-control" name="nama_makam" placeholder="Masukan Nama Restoran" required>
                        </div>                        
                    </div>                    
                    <div class="form-group mt-3">
                        <label class="form-control-label">Kategori Restoran</label>
                        <select name="id_kategori" id="" class="form-control">
                            <option>--Pilih Kategori Restoran--</option>
                            <?php foreach($res_kategori as $rk){ ?>
                                <option value="<?= $rk->id_kategori ?>"><?= $rk->nama_kategori ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Jumlah Makam</label>
                        <textarea name="jml_makam" rows="2" class="form-control" placeholder="jml_makam"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Gambar</label>
                        <input type="file" class="form-control-file" name="gambar" value="<?= set_value('gambar') ?>" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
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