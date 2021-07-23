<?php include('include/header.php') ?>
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Penyakit
			<small>DPT Buah Naga</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<!-- <li><a href="#">Examples</a></li>
			<li class="active">Blank page</li> -->
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="row">
			<p class="login-box-msg"><?php echo $this->session->flashdata('gagal'); ?></p>
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Data Penyakit</h3>

						<div class="box-tools">
							<div class="input-group input-group-sm hidden-xs" style="width: 150px;">

								<!-- <input type="text" name="table_search" class="form-control pull-right" placeholder="Search"> -->

								<div class="input-group-btn">
									<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-info">Tambah</button>
								</div>

								<!-- <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div> -->
							</div>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>Kode Penyakit</th>
								<th>Nama Penyakit</th>
								<th>Action</th>
								<!-- <th>Date</th>
                                        <th>Status</th>
                                        <th>Reason</th> -->
							</tr>
							<?php $i = 0;
							foreach ($penyakit as $dat) {
								// var_dump($dat);
								// die;
							?>
								<tr>
									<td><?php echo $dat['kode_penyakit']; ?></td>
									<td><?php echo $dat['nama_penyakit']; ?></td>
									<td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning<?= $dat['id'] ?>">
											Edit
										</button>
										<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger<?= $dat['id'] ?>">
											Hapus
										</button>
									</td>
									<!-- <td>11-7-2014</td>
                                        <td><span class="label label-success">Approved</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
								</tr>
							<?php } ?>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>

		<!-- /.box -->

	</section>
	<?php foreach ($penyakit as $dat) {
		// var_dump($dat);
		// die;
	?>
		<div class="modal modal-warning fade" id="modal-warning<?= $dat['id'] ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Penyakit</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" action="<?= base_url('e-peny') ?>" method="POST">
							<div class="box-body">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Kode Penyakit</label>

									<div class="col-sm-10">
										<input type="text" name="kode" class="form-control" id="inputEmail3" placeholder="<?= $dat['kode_penyakit'] ?>">
										<input type="hidden" name="id" value="<?= $dat['id'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-2 control-label">Nama Penyakit</label>

									<div class="col-sm-10">
										<input type="text" name="nama" class="form-control" id="inputPassword3" placeholder="<?= $dat['nama_penyakit'] ?>">
									</div>
								</div>

							</div>
							<!-- /.box-body -->
							<!-- <div class="">
                                        <button type="submit" class="btn btn-default">Cancel</button>
                                        <button type="submit" class="btn btn-info pull-right">Simpan</button>
                                    </div> -->
							<!-- /.box-footer -->
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-info">Save changes</button>
					</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.content -->
		<div class="modal modal-danger fade" id="modal-danger<?= $dat['id'] ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Hapus Penyakit</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" action="<?= base_url('h-peny') ?>" method="POST">
							<div class="box-body">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Kode Penyakit</label>

									<div class="col-sm-10">
										<input type="text" name="kode" readonly class="form-control" id="inputEmail3" placeholder="<?= $dat['kode_penyakit'] ?>">
										<input type="hidden" name="id" value="<?= $dat['id'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-2 control-label">Nama Penyakit</label>

									<div class="col-sm-10">
										<input type="text" name="nama" readonly class="form-control" id="inputPassword3" placeholder="<?= $dat['nama_penyakit'] ?>">
									</div>
								</div>

							</div>
							<!-- /.box-body -->
							<!-- <div class="">
                                        <button type="submit" class="btn btn-default">Cancel</button>
                                        <button type="submit" class="btn btn-info pull-right">Simpan</button>
                                    </div> -->
							<!-- /.box-footer -->
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-info">Hapus</button>
					</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
	<?php } ?>
	<!-- /.modal -->

	<div class="modal modal-info fade" id="modal-info">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Tambah Penyakit</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" action="<?= base_url('t-peny') ?>" method="POST">
						<div class="box-body">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Kode Penyakit</label>

								<div class="col-sm-10">
									<input type="text" name="kode" class="form-control" id="inputEmail3" placeholder="Kode Penyakit">
									<!-- <input type="hidden" name="id" value="<?= $dat['id'] ?>"> -->
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Nama Penyakit</label>

								<div class="col-sm-10">
									<input type="text" name="nama" class="form-control" id="inputPassword3" placeholder="Nama Penyakit">
								</div>
							</div>

						</div>
						<!-- /.box-body -->
						<!-- <div class="">
                                        <button type="submit" class="btn btn-default">Cancel</button>
                                        <button type="submit" class="btn btn-info pull-right">Simpan</button>
                                    </div> -->
						<!-- /.box-footer -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
					<button type="submit" class="btn  btn-primary">Tambah</button>
				</div>
				</form>
			</div>
			<!-- <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
            </div> -->
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- /.content-wrapper -->
<?php include('include/footer.php') ?>