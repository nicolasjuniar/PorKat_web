<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets_main/img/logo.png" />
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets_main/img/logo.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Ubah Pelanggan</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />


	<!-- Bootstrap core CSS     -->
	<link href="<?php echo base_url();?>assets_main/css/bootstrap.min.css" rel="stylesheet" />

	<!--  Material Dashboard CSS    -->
	<link href="<?php echo base_url();?>assets_main/css/material-dashboard.css" rel="stylesheet"/>

	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="<?php echo base_url();?>assets_main/css/demo.css" rel="stylesheet" />

	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="wrapper">
		<div class="sidebar" data-color="purple" data-image="<?php echo base_url();?>assets_main/img/sidebar-1.jpg">
			<!--
			Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
			Tip 2: you can also add an image using data-image tag

		-->

		<div class="logo">
			<a href="<?php echo base_url('index.php/dashboard');?>" class="simple-text">
				<?php echo $this->session->userdata('nama_admin')?>
			</a>
		</div>

		<div class="sidebar-wrapper">
			<ul class="nav">
				<li>
					<a href="<?php echo base_url();?>katering">
						<i class="material-icons">local_dining</i>
						<p>Katering</p>
					</a>
				</li>
				<li  class="active">
					<a href="<?php echo base_url();?>pelanggan">
						<i class="material-icons">person</i>
						<p>Pelanggan</p>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>logout">
						<i class="material-icons">assignment_return</i>
						<p>Keluar</p>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="main-panel">
		<nav class="navbar navbar-transparent navbar-absolute">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Edit Pelanggan</a>
				</div>
				<div class="collapse navbar-collapse">


					<form class="navbar-form navbar-right" role="search">
						<div class="form-group  is-empty">
							<input type="text" class="form-control" placeholder="Search">
							<span class="material-input"></span>
						</div>
						<button type="submit" class="btn btn-white btn-round btn-just-icon">
							<i class="material-icons">search</i><div class="ripple-container"></div>
						</button>
					</form>
				</div>
			</div>
		</nav>

		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
						<form id="formEditPelanggan" action="<?php echo base_url();?>pelanggan/edit/profile" method="post" enctype="multipart/form-data">
							<div class="card">
								<div class="card-header" data-background-color="purple">
									<h4 class="title">Edit Pelanggan</h4>
									<p class="category">Isi data dengan lengkap</p>
								</div>
								<div class="card-content">
									<form>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Nama Pelanggan</label>
													<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required value="<?php echo $nama_lengkap; ?>" >
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Id Pengguna Pelanggan</label>
													<input type="text" class="form-control" name="id_pengguna" id="id_pengguna" required value="<?php echo $id_pengguna; ?>" >
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Alamat</label>
													<input type="text" class="form-control" name="alamat" id="alamat" required value="<?php echo $alamat; ?>" >
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Nomor Telepon</label>
													<input type="text" class="form-control" name="no_telp" id="no_telp" required value="<?php echo $no_telp; ?>" >
												</div>
											</div>
										</div>

										<input type="hidden" name="id_pelanggan" value="<?php echo $id_pelanggan; ?>" />

										<input  type="submit" class="btn btn-primary pull-right" value="Update"/>
										<a href="<?php echo base_url('pelanggan') ?>" class="btn btn-primary pull-right">Cancel</a>
										<div class="clearfix"></div>
									</form>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-4">
						<div class="card card-profile">

							<div class="content">
								<h6 class="category text-gray">Pelanggan</h6>
								<h4 class="card-title"><?php echo $nama_lengkap; ?></h4>
								<h4 class="card-title"><?php echo $id_pelanggan; ?></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer class="footer">
			<div class="container-fluid">

				<p class="copyright pull-right">
					&copy; <script>document.write(new Date().getFullYear())</script> <a href="<?php echo base_url('index.php/dashboard');?>">Porkat Admin</a>, Nicolas Juniar Kurniawan
				</p>
			</div>
		</footer>
	</div>
</div>

</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url();?>assets_main/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets_main/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets_main/js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url();?>assets_main/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url();?>assets_main/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url();?>assets_main/js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url();?>assets_main/js/demo.js"></script>

</html>
