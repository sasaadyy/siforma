
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Jenazah</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('pesan'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Data Jenazah</strong></h4>                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Jenazah</th>
                                        <th>Blok Makam</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Tanggal Wafat</th>
                                        <th>Tanggal Pemakaman</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($jenazah as $row){
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $row->nm_jenazah ?></td>
                                                <td><?= $row->nama_makam ?></td>
                                                <td><?= $row->tanggal_lahir ?></td>
                                                <td><?= $row->tanggal_wafat ?></td>
                                                <td><?= $row->tanggal_pemakaman ?></td>
                                                
                                                <td>                                                   
                                                    <a href="<?= base_url('admin/jenazah/edit_jenazah/'.$row->id_transaksi) ?>" class="btn btn-facebook shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?= base_url('admin/jenazah/delete_jenazah/'.$row->id_transaksi) ?>" class="btn btn-youtube shadow btn-sm sharp" onclick="return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash"></i></a>
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
