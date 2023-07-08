<div class="content-body">	
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-6 col-xxl-12">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-primary">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-users"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Total Klien</p>
										<h3 class="text-white"><?= $jumlah_klien ?></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-secondary">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-box"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Total Booking</p>
										<h3 class="text-white"><?= $jumlah_booking ?></h3>
									</div>
								</div>
							</div>
						</div>
					</div>					
					<div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-danger">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
										<i class="la la-file"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Total Makam</p>
										<span>
										<h3 class="text-white"><?= $jumlah_makam ?></h3>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-dark ">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
										<i class="flaticon-381-controls-3"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Total Paket</p>
										<h3 class="text-white"><?= $jumlah_paket ?></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-xxl-12">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-warning">
							<div class="card-body  p-4">
								<div class="media">
									<span class="mr-3">
									<i class="la la-folder"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Total Jenazah</p>
										<h3 class="text-white"><?= $jumlah_booking ?></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-info">
							<div class="card-body p-4">
								<div class="media">
									<span class="mr-3">
									<i class="la la-money"></i>
									</span>
									<div class="media-body text-white text-right">
										<p class="mb-1">Total Pendapatan</p>
										<h5 class="text-white">Rp. <?= number_format($pendapatan,0,',','.'); ?></h5>
									</div>
								</div>
							</div>
						</div>
					</div>		
			<div class="col-xl-9 col-xxl-8">
				<div class="row">
					<div class="col-xl-12">	
						<div class="card">
							<div class="card-header">
								<h4 class="card-title"><strong>Data Makam</strong></h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="display min-w850">
										<thead>
											<tr>
												<th>No.</th>
												<th>Nama</th>
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
													<td><?= $row->jml_makam ?></td>
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
			<div class="col-xl-3 col-xxl-4">
				<div class="row">
					<div class="col-xl-12">
						<div class="card featuredMenu">
							<div class="card-header border-0">
								<h4 class="text-black font-w600 fs-20 mb-0">Data Paket</h4>
							</div>
							<div class="card-body loadmore-content  dz-scroll pt-0" id="FeaturedMenusContent">
								<?php foreach($paket as $paket){ ?>
									<div class="media mb-4">
										<img src="<?= base_url('assets/uploads/paket/'.$paket->foto) ?>" width="85" alt="" class="rounded mr-3">
										<div class="media-body">
											<h5><a href="#" class="text-black fs-16"><?= $paket->nama_paket ?></a></h5>
											<span class="fs-14 text-primary font-w500">Rp. <?= number_format($paket->harga,0,',','.'); ?></span>
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
</div>