
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Users</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('pesan'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Data Users</strong></h4>                       
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>No.</th>                                        
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No. HP</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach($users as $row){
                                        ?>
                                        <?php if($row->role_id == 2){ ?>
                                            <tr>
                                                <td><?= $no++ ?></td>                                                
                                                <td><?= $row->nama ?></td>
                                                <td><a href="javascript:void(0);"><strong><?= $row->email ?></strong></a></td>
                                                <td><a href="javascript:void(0);"><strong><?= $row->no_hp ?></strong></a></td>
                                                <td><?= date('d F, y',strtotime($row->date)) ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/users/detail_users/'.$row->id_users) ?>" class="btn btn-twitter shadow btn-sm sharp mr-1"><i class="fa fa-eye"></i></a>
                                                    <a href="<?= base_url('admin/users/edit_users/'.$row->id_users) ?>" class="btn btn-facebook shadow btn-sm sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?= base_url('admin/users/delete_users/'.$row->id_users) ?>" class="btn btn-youtube shadow btn-sm sharp" onclick=" return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
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


