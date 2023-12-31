<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Booking</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('pesan'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Data Pesanan</strong></h4>                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Users</th>
                                        <th>Paket</th>
                                        <th>Total</th>                                       
                                        <th>Tanggal Booking</th>                                        
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($booking as $row){
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?>.</td>
                                                <td><?= $row->nama ?></td>
                                                <td><?= $row->nama_paket ?></td>  
                                                <td><?= $row->total?></td>                                              
                                                <td><?= date('d F, Y', strtotime($row->tanggal)) ?></td>
                                                <td>
                                                    <?php if($row->status == "" or $row->status == "NULL" ){ ?>
                                                        <span class="badge badge-secondary light shadow-sm"><i class="fa fa-exclamation-circle fa-lg"></i> &nbsp; Validasi Data</span>
                                                    <?php }elseif($row->status == "In Procces"){ ?>
                                                        <span class="badge badge-warning light shadow-sm"><i class="fa fa-refresh fa-lg fa-spin"></i> &nbsp; Dalam Proses</span>
                                                    <?php }elseif($row->status == "Closed"){ ?>
                                                        <span class="badge badge-success light shadow-sm"><i class="fa fa-check-square fa-lg"></i> &nbsp; Selesai</span>                                                   
                                                    <?php } elseif ($row->status == "Rejected") { ?>
                                                        <span class="text-danger"><i class="fa fa-times fa-lg"></i> &nbsp; Bukti TF tidak valid</span>
                                                    <?php }else{ ?>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                   <a href="<?= base_url('admin/booking/detail_booking/'.$row->id_transaksi) ?>" class="btn btn-twitter shadow btn-sm sharp mr-1"><i class="fa fa-eye"></i></a>
                                                    <a href="<?= base_url('admin/booking/edit_booking/'.$row->id_transaksi) ?>" class="btn btn-facebook shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?= base_url('admin/booking/delete_booking/'.$row->id_transaksi) ?>" class="btn btn-youtube shadow btn-sm sharp" onclick="return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash"></i></a>
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