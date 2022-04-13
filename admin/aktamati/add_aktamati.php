<h3><b>
    <center>AKTA MATI</center>
  </b></h3>
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fa fa-edit"></i> Input Data
    </h3>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="card-body">

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">No. Akta Mati</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="no_akta_mati" name="no_akta_mati" placeholder="Akta Mati" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NIK</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal dan Tempat Mati</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="tempat_mati" name="tempat_mati" placeholder="Tempat Mati" required>
        </div>
        <div class="col-sm-3">
          <input type="date" class="form-control" id=tanggal_mati" name="tanggal_mati" placeholder="Tanggal Mati" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NIK Saksi 1</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nik_saksi" name="nik_saksi" placeholder="NIK Saksi 1" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NIK Saksi 2</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nik_saksii" name="nik_saksii" placeholder="NIK Saksi 2" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal Input</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="tgl_input" name="tgl_input" placeholder="Tanggal Input" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal Update</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="tgl_update" name="tgl_update" placeholder="Tanggal Update" required>
        </div>
      </div>


      <div class="card-footer">
        <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
        <a href="?page=data-pend" title="Kembali" class="btn btn-secondary">Batal</a>
      </div>

  </form>
</div>

<?php

if (isset($_POST['Simpan'])) {
  //mulai proses simpan data
  $sql_simpan = "INSERT INTO tb_pdd (nik, nama, tempat_lh, tgl_lh, jekel, desa, rt, rw, agama, kawin, pekerjaan, status) VALUES (
            '" . $_POST['nik'] . "',
            '" . $_POST['nama'] . "',
			'" . $_POST['tempat_lh'] . "',
			'" . $_POST['tgl_lh'] . "',
            '" . $_POST['jekel'] . "',
            '" . $_POST['desa'] . "',
			'" . $_POST['rt'] . "',
			'" . $_POST['rw'] . "',
			'" . $_POST['agama'] . "',
			'" . $_POST['kawin'] . "',
			'" . $_POST['pekerjaan'] . "',
            'Ada')";
  $query_simpan = mysqli_query($koneksi, $sql_simpan);
  mysqli_close($koneksi);

  if ($query_simpan) {
    echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=akta-mati';
          }
      })</script>";
  } else {
    echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=akta-mati';
          }
      })</script>";
  }
}
     //selesai proses simpan data
