<?php
//Mulai Sesion
session_start();
if (isset($_SESSION["ses_username"]) == "") {
	header("location: login.php");
} else {
	$data_id = $_SESSION["ses_id"];
	$data_nama = $_SESSION["ses_nama"];
	$data_user = $_SESSION["ses_username"];
	$data_level = $_SESSION["ses_level"];
}

//KONEKSI DB
include "inc/koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistem Informasi Kependudukan</title>
	<link rel="icon" href="dist/img/imgnew.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>

	<script> 
		function changeFunc() {
			document.cookie = "js_var = " + This is used to chang js to php 
		}
	</script>

</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-orange navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="white">
							<b>SISTEM INFORMASI DATA KEPENDUDUKAN</b>
						</font>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index.php" class="brand-link">
				<img src="dist/img/imgnew.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<span class="brand-text"> Sistem Informasi<br>
					&emsp;&emsp;&emsp;Kependudukan
				</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-2 pb-2 mb-2 d-flex">
					<div class="nav-item">
						<a class="nav-link">
							<i class="nav-icon fas fa-solid fa-user"></i>
						</a>
					</div>
					<div class="info">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
						<span class="badge badge-success">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">

						<!-- Level  -->
						<?php
						if ($data_level == "Admin") {
						?>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-solid fa-archway"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-print"></i>
								<p>
									Verifikasi
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=verif-kk" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>KK</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-ktp" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>KTP</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-kia" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>KIA</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-aktalahir" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Akta Lahir</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-aktamati" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Akta Mati</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-skpd" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>SKPD</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-aktaperkawinan" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Akta Perkawinan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-aktacerai" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Akta Perceraian</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Kelola Data
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=data-verif" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Kepengurusan</p>
									</a>
								</li>
							</ul>
							<!--
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon far fa-file text-warning"></i>
											<p>Data Penduduk
												<i class="fas fa-angle-left right"></i>
											</p>
										</a>
										<ul class="nav nav-treeview">
											<li class="nav-item">
												<a href="?page=data-pend" class="nav-link">
													<i class="nav-icon far fa-square text-secondary"></i>
													<p>Input Penduduk</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-kartu" class="nav-link">
													<i class="nav-icon far fa-square text-secondary"></i>
													<p>Data KK</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-ktp" class="nav-link">
													<i class="nav-icon far fa-square text-secondary"></i>
													<p>Data KTP</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="nav-icon far fa-square text-secondary"></i>
													<p>Data KIA</p>
												</a>
											</li>
										</ul>
									</li>

									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon far fa-file text-warning"></i>
											<p>Pencatatan Sipil
												<i class="fas fa-angle-left right"></i>
											</p>
										</a>

										<ul class="nav nav-treeview">
											<li class="nav-item">
												<a href="?page=data-aktalahir" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>Akta lahir</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-aktamati" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>Akta Mati</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=akta-lahir" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>SKPD</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-aktakawin" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>Akta Perkawinan</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-aktacerai" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>Akta Perceraian</p>
												</a>
											</li>

										</ul>

									</li>

								</ul>-->
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-folder"></i>
								<p>
									Rekap Penduduk
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=1" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data KTP</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=2" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data KK</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="?page=rekap-data&jenis=3" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Akta Lahir</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=4" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Akta Mati</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="?page=rekap-data&jenis=5" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Akta Kawin</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=6" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Akta Cerai</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="?page=rekap-data&jenis=7" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data KIA</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=8" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data SKPD</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-file"></i>
								<p>
									Kelola Surat
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=balasan_keabsahan" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Balasan Keabsahan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=keabsahan_aktakawin" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Keabsahan Akta Kawin</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=keabsahan_dr_pemohon" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Keabsahan dari Pemohon</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekom_perkawinan" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Rekom Perkawinan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=pengantar_keabsahan" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Pengantar Keabsahan</p>
									</a>
								</li>
							</ul>
						</li>


						<li class="nav-header">Setting</li>

						<li class="nav-item">
							<a href="?page=data-pengguna" class="nav-link">
								<i class="nav-icon fas fa-cogs"></i>
								<p>
									Pengguna Sistem
								</p>
							</a>
						</li>

						<?php
						} elseif ($data_level == "Kasi") {
						?>

						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-solid fa-archway"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-print"></i>
								<p>
									Verifikasi
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=verif-kk" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>KK</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-ktp" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>KTP</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-kia" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>KIA</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-aktalahir" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Akta Lahir</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-aktamati" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Akta Mati</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-skpd" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>SKPD</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-aktaperkawinan" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Akta Perkawinan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-aktacerai" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Akta Perceraian</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Kelola Data
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=data-verif" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Kepengurusan</p>
									</a>
								</li>
							</ul>
							<!--
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon far fa-file text-warning"></i>
											<p>Data Penduduk
												<i class="fas fa-angle-left right"></i>
											</p>
										</a>
										<ul class="nav nav-treeview">
											<li class="nav-item">
												<a href="?page=data-pend" class="nav-link">
													<i class="nav-icon far fa-square text-secondary"></i>
													<p>Input Penduduk</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-kartu" class="nav-link">
													<i class="nav-icon far fa-square text-secondary"></i>
													<p>Data KK</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-ktp" class="nav-link">
													<i class="nav-icon far fa-square text-secondary"></i>
													<p>Data KTP</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="nav-icon far fa-square text-secondary"></i>
													<p>Data KIA</p>
												</a>
											</li>
										</ul>
									</li>

									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon far fa-file text-warning"></i>
											<p>Pencatatan Sipil
												<i class="fas fa-angle-left right"></i>
											</p>
										</a>

										<ul class="nav nav-treeview">
											<li class="nav-item">
												<a href="?page=data-aktalahir" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>Akta lahir</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-aktamati" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>Akta Mati</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=akta-lahir" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>SKPD</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-aktakawin" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>Akta Perkawinan</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-aktacerai" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>Akta Perceraian</p>
												</a>
											</li>

										</ul>

									</li>

								</ul>-->
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-folder"></i>
								<p>
									Rekap Penduduk
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=1" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data KTP</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=2" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data KK</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="?page=rekap-data&jenis=3" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Akta Lahir</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=4" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Akta Mati</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="?page=rekap-data&jenis=5" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Akta Kawin</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=6" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Akta Cerai</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="?page=rekap-data&jenis=7" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data KIA</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=8" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data SKPD</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-file"></i>
								<p>
									Kelola Surat
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=balasan_keabsahan" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Balasan Keabsahan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=keabsahan_aktakawin" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Keabsahan Akta Kawin</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=keabsahan_dr_pemohon" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Keabsahan dari Pemohon</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekom_perkawinan" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Rekom Perkawinan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=pengantar_keabsahan" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Pengantar Keabsahan</p>
									</a>
								</li>
							</ul>
						</li>


						<li class="nav-header">Setting</li>

						<?php
						} elseif ($data_level == "Operator") {
						?>

						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-solid fa-archway"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-print"></i>
								<p>
									Verifikasi
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=verif-kk" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>KK</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-ktp" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>KTP</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-kia" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>KIA</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-aktalahir" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Akta Lahir</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-aktamati" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Akta Mati</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-skpd" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>SKPD</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-aktaperkawinan" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Akta Perkawinan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-aktacerai" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Akta Perceraian</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Kelola Data
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=data-verif" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Kepengurusan</p>
									</a>
								</li>
							</ul>
							<!--
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon far fa-file text-warning"></i>
											<p>Data Penduduk
												<i class="fas fa-angle-left right"></i>
											</p>
										</a>
										<ul class="nav nav-treeview">
											<li class="nav-item">
												<a href="?page=data-pend" class="nav-link">
													<i class="nav-icon far fa-square text-secondary"></i>
													<p>Input Penduduk</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-kartu" class="nav-link">
													<i class="nav-icon far fa-square text-secondary"></i>
													<p>Data KK</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-ktp" class="nav-link">
													<i class="nav-icon far fa-square text-secondary"></i>
													<p>Data KTP</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="nav-icon far fa-square text-secondary"></i>
													<p>Data KIA</p>
												</a>
											</li>
										</ul>
									</li>

									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon far fa-file text-warning"></i>
											<p>Pencatatan Sipil
												<i class="fas fa-angle-left right"></i>
											</p>
										</a>

										<ul class="nav nav-treeview">
											<li class="nav-item">
												<a href="?page=data-aktalahir" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>Akta lahir</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-aktamati" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>Akta Mati</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=akta-lahir" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>SKPD</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-aktakawin" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>Akta Perkawinan</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-aktacerai" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>Akta Perceraian</p>
												</a>
											</li>

										</ul>

									</li>

								</ul>-->
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-folder"></i>
								<p>
									Rekap Penduduk
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=1" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data KTP</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=2" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data KK</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="?page=rekap-data&jenis=3" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Akta Lahir</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=4" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Akta Mati</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="?page=rekap-data&jenis=5" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Akta Kawin</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=6" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Akta Cerai</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="?page=rekap-data&jenis=7" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data KIA</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=8" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data SKPD</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-file"></i>
								<p>
									Kelola Surat
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=balasan_keabsahan" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Balasan Keabsahan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=keabsahan_aktakawin" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Keabsahan Akta Kawin</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=keabsahan_dr_pemohon" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Keabsahan dari Pemohon</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekom_perkawinan" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Rekom Perkawinan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=pengantar_keabsahan" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Pengantar Keabsahan</p>
									</a>
								</li>
							</ul>
						</li>


						<li class="nav-header">Setting</li>

						<?php
						} elseif ($data_level == "Kabid") {
						?>

						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-solid fa-archway"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-print"></i>
								<p>
									Verifikasi
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=verif-kk" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>KK</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-ktp" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>KTP</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-kia" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>KIA</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-aktalahir" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Akta Lahir</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-aktamati" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Akta Mati</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-skpd" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>SKPD</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-aktaperkawinan" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Akta Perkawinan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=verif-aktacerai" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Akta Perceraian</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Kelola Data
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=data-verif" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Kepengurusan</p>
									</a>
								</li>
							</ul>
							<!--
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon far fa-file text-warning"></i>
											<p>Data Penduduk
												<i class="fas fa-angle-left right"></i>
											</p>
										</a>
										<ul class="nav nav-treeview">
											<li class="nav-item">
												<a href="?page=data-pend" class="nav-link">
													<i class="nav-icon far fa-square text-secondary"></i>
													<p>Input Penduduk</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-kartu" class="nav-link">
													<i class="nav-icon far fa-square text-secondary"></i>
													<p>Data KK</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-ktp" class="nav-link">
													<i class="nav-icon far fa-square text-secondary"></i>
													<p>Data KTP</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													<i class="nav-icon far fa-square text-secondary"></i>
													<p>Data KIA</p>
												</a>
											</li>
										</ul>
									</li>

									<li class="nav-item">
										<a href="#" class="nav-link">
											<i class="nav-icon far fa-file text-warning"></i>
											<p>Pencatatan Sipil
												<i class="fas fa-angle-left right"></i>
											</p>
										</a>

										<ul class="nav nav-treeview">
											<li class="nav-item">
												<a href="?page=data-aktalahir" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>Akta lahir</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-aktamati" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>Akta Mati</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=akta-lahir" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>SKPD</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-aktakawin" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>Akta Perkawinan</p>
												</a>
											</li>
											<li class="nav-item">
												<a href="?page=data-aktacerai" class="nav-link">
													<i class="nav-icon far fa-circle text-secondary"></i>
													<p>Akta Perceraian</p>
												</a>
											</li>

										</ul>

									</li>

								</ul>-->
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-folder"></i>
								<p>
									Rekap Penduduk
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=1" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data KTP</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=2" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data KK</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="?page=rekap-data&jenis=3" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Akta Lahir</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=4" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Akta Mati</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="?page=rekap-data&jenis=5" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Akta Kawin</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=6" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data Akta Cerai</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="?page=rekap-data&jenis=7" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data KIA</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekap-data&jenis=8" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Data SKPD</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-file"></i>
								<p>
									Kelola Surat
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="?page=balasan_keabsahan" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Balasan Keabsahan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=keabsahan_aktakawin" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Keabsahan Akta Kawin</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=keabsahan_dr_pemohon" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Keabsahan dari Pemohon</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=rekom_perkawinan" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Rekom Perkawinan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=pengantar_keabsahan" class="nav-link">
										<i class="nav-icon far fa-file text-warning"></i>
										<p>Pengantar Keabsahan</p>
									</a>
								</li>
							</ul>
						</li>


						<li class="nav-header">Setting</li>

						<?php
						}
						?>

						
						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php"
								class="nav-link">
								<i class="nav-icon fas fa-arrow-circle-right"></i>
								<p>
									Logout
								</p>
							</a>
						</li>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">

					<?php
					if (isset($_GET['page'])) {
						$hal = $_GET['page'];

						switch ($hal) {

								//Pengguna
							case 'data-pengguna':
								include "admin/pengguna/data_pengguna.php";
								break;
							case 'add-pengguna':
								include "admin/pengguna/add_pengguna.php";
								break;
							case 'edit-pengguna':
								include "admin/pengguna/edit_pengguna.php";
								break;
							case 'del-pengguna':
								include "admin/pengguna/del_pengguna.php";
								break;

								//Pengguna
							case 'data-ktp':
								include "admin/ktp/data_ktp.php";
								break;
							case 'add-ktp':
								include "admin/ktp/add_ktp.php";
								break;

								//Verifikasi
							case 'verif-kk':
								include "admin/verifikasi/verif_kk.php";
								break;

							case 'verif-ktp':
								include "admin/verifikasi/verif_ktp.php";
								break;

							case 'verif-kia':
								include "admin/verifikasi/verif_kia.php";
								break;

							case 'verif-aktalahir':
								include "admin/verifikasi/verif_aktalahir.php";
								break;

							case 'verif-aktamati':
								include "admin/verifikasi/verif_aktamati.php";
								break;

							case 'verif-skpd':
								include "admin/verifikasi/verif_skpd.php";
								break;

							case 'verif-aktaperkawinan':
								include "admin/verifikasi/verif_aktaperkawinan.php";
								break;

							case 'verif-aktacerai':
								include "admin/verifikasi/verif_aktacerai.php";
								break;

								//data verif
							case 'data-verif':
								include "admin/verifikasi/data_verif.php";
								break;

							case 'del-data':
								include "admin/verifikasi/del_data.php";
								break;
							
							case 'edit-data':
								include "admin/verifikasi/edit_data.php";
								break;
							
							case 'list-data':
								include "admin/verifikasi/list_data.php";
								break;

							case 'view-data':
								include "admin/verifikasi/view_data.php";
								break;
							
							case 'rekap-data':
								include "admin/verifikasi/rekap_data.php";
								break;

								//kartu KK (lama)
							case 'data-kartu':
								include "admin/kartu/data_kartu.php";
								break;
							case 'add-kartu':
								include "admin/kartu/add_kartu.php";
								break;
							case 'edit-kartu':
								include "admin/kartu/edit_kartu.php";
								break;
							case 'anggota':
								include "admin/kartu/anggota.php";
								break;
							case 'del-anggota':
								include "admin/kartu/del_anggota.php";
								break;
							case 'del-kartu':
								include "admin/kartu/del_kartu.php";
								break;

								//penduduk (lama)
							case 'data-pend':
								include "admin/pend/data_pend.php";
								break;
							case 'add-pend':
								include "admin/pend/add_pend.php";
								break;
							case 'edit-pend':
								include "admin/pend/edit_pend.php";
								break;
							case 'del-pend':
								include "admin/pend/del_pend.php";
								break;
							case 'view-pend':
								include "admin/pend/view_pend.php";
								break;

								//akta lahir
							case 'data-aktalahir':
								include "admin/aktalahir/data_aktalahir.php";
								break;
							case 'add-aktalahir':
								include "admin/aktalahir/add_aktalahir.php";
								break;

								//lahir (lama)
							case 'data-lahir':
								include "admin/lahir/data_lahir.php";
								break;
							case 'add-lahir':
								include "admin/lahir/add_lahir.php";
								break;
							case 'edit-lahir':
								include "admin/lahir/edit_lahir.php";
								break;
							case 'del-lahir':
								include "admin/lahir/del_lahir.php";
								break;

								//akta Mati
							case 'data-aktamati':
								include "admin/aktamati/data_aktamati.php";
								break;
							case 'add-aktamati':
								include "admin/aktamati/add_aktamati.php";
								break;

								//akta Kawin
							case 'data-aktakawin':
								include "admin/aktakawin/data_aktakawin.php";
								break;
							case 'add-aktakawin':
								include "admin/aktakawin/add_aktakawin.php";
								break;

								//akta Cerai
							case 'data-aktacerai':
								include "admin/aktacerai/data_aktacerai.php";
								break;
							case 'add-aktacerai':
								include "admin/aktacerai/add_aktacerai.php";
								break;

								//Rekap Penduduk
							case 'akta-mati':
								include "admin/pencatatansipil/akta_mati.php";
								break;

							case 'akta-perkawinan':
								include "admin/pencatatansipil/akta_perkawinan.php";
								break;

							case 'akta-perceraian':
								include "admin/pencatatansipil/akta_perceraian.php";
								break;

								//mendu
							case 'data-mendu':
								include "admin/mendu/data_mendu.php";
								break;
							case 'add-mendu':
								include "admin/mendu/add_mendu.php";
								break;
							case 'edit-mendu':
								include "admin/mendu/edit_mendu.php";
								break;
							case 'del-mendu':
								include "admin/mendu/del_mendu.php";
								break;

								//pindah
							case 'data-pindah':
								include "admin/pindah/data_pindah.php";
								break;
							case 'add-pindah':
								include "admin/pindah/add_pindah.php";
								break;
							case 'edit-pindah':
								include "admin/pindah/edit_pindah.php";
								break;
							case 'del-pindah':
								include "admin/pindah/del_pindah.php";
								break;

								//datang
							case 'data-datang':
								include "admin/datang/data_datang.php";
								break;
							case 'add-datang':
								include "admin/datang/add_datang.php";
								break;
							case 'edit-datang':
								include "admin/datang/edit_datang.php";
								break;
							case 'del-datang':
								include "admin/datang/del_datang.php";
								break;

								//suket
							case 'balasan_keabsahan':
								include "surat/balasan_keabsahan.php";
								break;
							case 'keabsahan_aktakawin':
								include "surat/keabsahan_aktakawin.php";
								break;
							case 'keabsahan_dr_pemohon':
								include "surat/keabsahan_dr_pemohon.php";
								break;
							case 'rekom_perkawinan':
								include "surat/rekom_perkawinan.php";
								break;
							case 'pengantar_keabsahan':
								include "surat/pengantar_keabsahan.php";
								break;

								//laporan
							case 'balasan_keabsahan':
								include "surat/balasan_keabsahan.php";
								break;
							case 'keabsahan_aktakawin':
								include "surat/keabsahan_aktakawin.php";
								break;
							case 'keabsahan_dr_pemohon':
								include "surat/keabsahan_dr_pemohon.php";
								break;
							case 'rekom_perkawinan':
								include "surat/rekom_perkawinan.php";
								break;
							case 'pengantar_keabsahan':
								include "surat/pengantar_keabsahan.php";
								break;


								//default
							default:
								echo "<center><h1> ERROR !</h1></center>";
								break;
						}
					} else {
						// Auto Halaman Home Pengguna
						if ($data_level == "Admin") {
							include "home/admin.php";
						} elseif ($data_level == "Kasi") {
							include "home/kasi.php";
						} elseif ($data_level == "Operator") {
							include "home/operator.php";
						} elseif ($data_level == "Kabid") {
							include "home/kabid.php";
						}
					}
					?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<b>SISTEM INFORMASI DATA KEPENDUDUKAN</b>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<script>
		$(function () {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function () {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

</body>

</html>