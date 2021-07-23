<?php include('include/header.php') ?>
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Diagnosa
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
						<h3 class="box-title">Data Gejala</h3>

						<div class="box-tools">
							<div class="input-group input-group-sm hidden-xs" style="width: 150px;">

								<!-- <input type="text" name="table_search" class="form-control pull-right" placeholder="Search"> -->

								<div class="input-group-btn">
									<a class="btn btn-block btn-primary" href="<?= base_url('laporanal') ?>"> Cetak Laporan</a>
									<!-- <button type="button" class="btn btn-block btn-primary">Cetak Laporan</button> -->
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
								<th>Nama</th>
								<th>Gejala</th>
								<th>Penyakit</th>
								<!-- <th>Action</th> -->
								<!-- <th>Date</th>
                                        <th>Status</th>
                                        <th>Reason</th> -->
							</tr>
							<?php
							foreach ($diagnosa as $dat) {
							?>
								<tr>
									<td><?php echo $dat['nama_pasien']; ?></td>
									<td><?php
										$i = 0;
										$a = $dat['input_gejala'];
										$data['ex'] = explode(",", $a);
										foreach ($data['ex'] as $d) {
											$i++;
											// $r = $this->Admin_model->ingjl($g);
											echo $i . '. ' . $this->Admin_model->ingjl($d) . '<br>';
											// var_dump($data['ex']);
											// echo $c;
											// die;
										?>
										<?php
										} ?></td>
									<td>1. <?= $dat['penyakit_utama'] ?><br>2. <?= $dat['penyakit_lain'] ?></td>
									<td><a href="<?= base_url('Admin_con/print/' . $dat['id_pemeriksaan']) ?>" type="button" class="btn btn-warning fa fa-print"> Laporan </a></td>
								</tr>
							<?php
							} ?>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>

		<!-- /.box -->
	</section>

	<!-- /.modal -->

	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- /.content-wrapper -->
<?php include('include/footer.php') ?>