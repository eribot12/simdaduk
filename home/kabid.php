<?php
	$tgl = date("Y-m-d");
	if (isset($_POST['submit'])) {
		$tgl = $_POST['hari'];
	}
?>

	<div class="col-3 ml-auto">
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" class="form-inline">  
			<input type="date" class="form-control" id="hari" name="hari" value="<?= $tgl;?>">
			<input type="submit" name="submit" value="Ganti" class="btn btn-primary ml-1">  
		</form>
	</div>
<br>
	
<?php
	
  $sql = $koneksi->query("SELECT COUNT(id_kendali) as ktp  from tabel_verifikasi where jenis_kepengurusan='KTP' AND tgl_permohonan='$tgl'");
  while ($data= $sql->fetch_assoc()) {
    $ktp=$data['ktp'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_kendali) as kk  from tabel_verifikasi where jenis_kepengurusan='KK' AND tgl_permohonan='$tgl'");
  while ($data= $sql->fetch_assoc()) {
    $kk=$data['kk'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_kendali) as kia  from tabel_verifikasi where jenis_kepengurusan='KIA' AND tgl_permohonan='$tgl'");
  while ($data= $sql->fetch_assoc()) {
    $kia=$data['kia'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_kendali) as aktalahir  from tabel_verifikasi where jenis_kepengurusan='AKTA LAHIR' AND tgl_permohonan='$tgl'");
  while ($data= $sql->fetch_assoc()) {
    $aktalahir=$data['aktalahir'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_kendali) as aktamati  from tabel_verifikasi where jenis_kepengurusan='AKTA MATI' AND tgl_permohonan='$tgl'");
  while ($data= $sql->fetch_assoc()) {
    $aktamati=$data['aktamati'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_kendali) as skpd  from tabel_verifikasi where jenis_kepengurusan='SKPD' AND tgl_permohonan='$tgl'");
  while ($data= $sql->fetch_assoc()) {
    $skpd=$data['skpd'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_kendali) as aktakawin  from tabel_verifikasi where jenis_kepengurusan='AKTA PERKAWINAN' AND tgl_permohonan='$tgl'");
  while ($data= $sql->fetch_assoc()) {
    $aktakawin=$data['aktakawin'];
  }

  $sql = $koneksi->query("SELECT COUNT(id_kendali) as aktacerai from tabel_verifikasi where jenis_kepengurusan='AKTA PERCERAIAN' AND tgl_permohonan='$tgl'");
  while ($data= $sql->fetch_assoc()) {
    $aktacerai=$data['aktacerai'];
  }
?>

<script> 
	function calledOnClick(){
		document.getElementById('hari').select();
	}
</script>

<div class="row">
	<!-- ./col -->
  	
	<br>

	<div class="col-lg-6 col-12">
		<!-- small box -->
		<div class="info-box bg-gradient-dark">
			<span class="info-box-icon bg-info"><i class="nav-icon fas fa-solid fa-id-card"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">
					<h5>Kartu Tanda Penduduk</h5>
				</span>
				<span class="info-box-number">
					<h1><?php echo $ktp;  ?></h1>
				</span>
				<a href="index.php?page=list-data&jenis=1" class="info-box-footer">Lihat Detail
					<i class="fas fa-angle-double-right"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-6 col-12">
		<!-- small box -->
		<div class="info-box bg-gradient-dark">
			<span class="info-box-icon bg-info"><i class="nav-icon fas fa-solid fa-address-card"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">
					<h5>Kartu Keluarga</h5>
				</span>
				<span class="info-box-number">
					<h1><?php echo $kk;  ?></h1>
				</span>
				<a href="index.php?page=list-data&jenis=2" class="info-box-footer">Lihat Detail
					<i class="fas fa-angle-double-right"></i>
				</a>
			</div>
		</div>

	</div>
	<!-- ./col -->
	<div class="col-lg-6 col-12">
		<!-- small box -->
		<div class="info-box bg-gradient-dark">
			<span class="info-box-icon bg-info"><i class="nav-icon fas fa-solid fa-baby"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">
					<h5>Akta Lahir</h5>
				</span>
				<span class="info-box-number">
					<h1><?php echo $aktalahir;  ?></h1>
				</span>
				<a href="index.php?page=list-data&jenis=3" class="info-box-footer">Lihat Detail
					<i class="fas fa-angle-double-right"></i>
				</a>
			</div>
		</div>

	</div>
	<!-- ./col -->
	<div class="col-lg-6 col-12">
		<!-- small box -->
		<div class="info-box bg-gradient-dark">
			<span class="info-box-icon bg-info"><i class="nav-icon fas fa-solid fa-skull"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">
					<h5>Akta Meninggal</h5>
				</span>
				<span class="info-box-number">
					<h1><?php echo $aktamati;  ?></h1>
				</span>
				<a href="index.php?page=list-data&jenis=4" class="info-box-footer">Lihat Detail
					<i class="fas fa-angle-double-right"></i>
				</a>
			</div>
		</div>

	</div>
	<!-- ./col -->
	<div class="col-lg-6 col-12">
		<!-- small box -->
		<div class="info-box bg-gradient-dark">
			<span class="info-box-icon bg-info"><i class="nav-icon fas fa-solid fa-handshake"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">
					<h5>Akta Perkawinan</h5>
				</span>
				<span class="info-box-number">
					<h1><?php echo $aktakawin;  ?></h1>
				</span>
				<a href="index.php?page=list-data&jenis=5" class="info-box-footer">Lihat Detail
					<i class="fas fa-angle-double-right"></i>
				</a>
			</div>
		</div>
	</div>

	<!-- ./col -->
	<div class="col-lg-6 col-12">
		<!-- small box -->
		<div class="info-box bg-gradient-dark">
			<span class="info-box-icon bg-info"><i class="nav-icon fas fa-solid fa-child"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">
					<h5>Akta Cerai</h5>
				</span>
				<span class="info-box-number">
					<h1><?php echo $aktacerai;  ?></h1>
				</span>
				<a href="index.php?page=list-data&jenis=6" class="info-box-footer">Lihat Detail
					<i class="fas fa-angle-double-right"></i>
				</a>
			</div>
		</div>
	</div>

	<!-- ./col -->
	<div class="col-lg-6 col-12">
		<!-- small box -->
		<div class="info-box bg-gradient-dark">
			<span class="info-box-icon bg-info"><i class="nav-icon fas fa-solid fa-heart"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">
					<h5>KIA</h5>
				</span>
				<span class="info-box-number">
					<h1><?php echo $kia;  ?></h1>
				</span>
				<a href="index.php?page=list-data&jenis=7" class="info-box-footer">Lihat Detail
					<i class="fas fa-angle-double-right"></i>
				</a>
			</div>
		</div>

	</div>
	<!-- ./col -->
	<div class="col-lg-6 col-12">
		<!-- small box -->
		<div class="info-box bg-gradient-dark">
			<span class="info-box-icon bg-info"><i class="nav-icon fas fa-solid fa-retweet"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">
					<h5>SKPD</h5>
				</span>
				<span class="info-box-number">
					<h1><?php echo $skpd;  ?></h1>
				</span>
				<a href="index.php?page=list-data&jenis=8" class="info-box-footer">Lihat Detail
					<i class="fas fa-angle-double-right"></i>
				</a>
			</div>
		</div>
	</div>
</div>