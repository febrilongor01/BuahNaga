<?php include('include/header.php') ?>
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
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
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Data Penyakit</h3>

						<div class="box-tools">
							<div class="input-group input-group-sm hidden-xs" style="width: 150px;">
								<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>Kode Penyakit</th>
								<th>Nama Penyakit</th>
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
									<!-- <td>11-7-2014</td>
                                            <td><span class="label label-success">Approved</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
								</tr>
							<?php if (++$i == 5) {
									break;
								}
							} ?>


						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Gejala Penyakit</h3>

						<div class="box-tools">
							<div class="input-group input-group-sm hidden-xs" style="width: 150px;">
								<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>Kode Gejala</th>
								<th>Nama Gejala</th>
								<!-- <th>Date</th>
                                            <th>Status</th>
                                            <th>Reason</th> -->
							</tr>
							<?php $i = 0;
							foreach ($gjl as $dat) {
							?>
								<tr>
									<td><?php echo $dat['kode_gejala']; ?></td>
									<td><?php echo $dat['nama_gejala']; ?></td>
									<!-- <td>11-7-2014</td>
                                            <td><span class="label label-success">Approved</span></td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td> -->
								</tr>
							<?php if (++$i == 5) {
									break;
								}
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
	<!-- /.content -->
</div>

<!-- /.content-wrapper -->
<?php include('include/footer.php') ?>