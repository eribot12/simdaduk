<h3><b>
    <center>AKTA PERKAWINAN</center>
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
        <label class="col-sm-2 col-form-label">No. Akta Kawin</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="no_akta_kawin" name="no_akta_kawin" placeholder="Akta Kawin " required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NIK Suami</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nik_suami" name="nik_suami" placeholder="NIK Suami" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Suami</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama_suami" name="nama_suami" placeholder="Nama Suami" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NIK Istri</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nik_istri" name="nik_istri" placeholder="NIK Istri" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Istri</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama_istri" name="nama_istri" placeholder="Nama Istri" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal Nikah</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="tgl_nikah" name="tgl_nikah" placeholder="Tanggal Nikah" required>
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
          window.location = 'index.php?page=akta-perkawinan';
          }
      })</script>";
  } else {
    echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=akta-perkawinan';
          }
      })</script>";
  }
}
     //selesai proses simpan data
