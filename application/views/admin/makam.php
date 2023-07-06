
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Makam</a></li>
            </ol>
        </div>
        <!-- row -->

 
        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('pesan'); ?>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Data Makam</strong></h4>
                        <a href="" class="pull-right btn btn-facebook" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus"></i> Tambah Data Makam</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Blok Makam</th>                                        
                                        <th>Jumlah Makam</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($makam as $row){
                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            
                                            <td><?= $row->nama_makam ?></td>                                        
                                            <td><a href="javascript:void(0);"><strong><?= $row->jml_makam ?></strong></a></td>
                                            <td><img src="<?= base_url('assets/uploads/makam/'.$row->gambar) ?>" alt="" width="60"></td>
                                            <td>                                                
                                                <a href="<?= base_url('admin/makam/edit_makam/'.$row->id_makam) ?>" class="btn btn-facebook shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="<?= base_url('admin/makam/delete_makam/'.$row->id_makam) ?>" class="btn btn-youtube shadow btn-sm sharp" onclick="return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash"></i></a>
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
                            <label class="form-control-label">Blok Makam</label>
                            <input type="text" class="form-control" name="nama_makam" placeholder="Masukan Nama Makam" required>
                        </div>
                        <div class="col">
                            <label class="form-control-label">Jumlah Makam</label>
                            <input type="text" class="form-control" name="jml_blok" placeholder="Masukan Jumlah Blok Makam" required>
                        </div>
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
