<h3 class="text-center font-weight-bold">VERIFIKASI AKTA MATI</h3>

<form action="" method="post" enctype="multipart/form-data">
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-edit"></i> Biodata Pemohon
      </h3>
    </div>

    <div class="card-body">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" placeholder="Nama" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">NIK Pemohon</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">TTL</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
            required>
        </div>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-3">
          <select name="jk" id="jk" class="form-control">
            <option>- Pilih -</option>
            <option>Laki-Laki</option>
            <option>Perempuan</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Desa/Kelurahan</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Desa/Kelurahan" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kecamatan</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal Permohonan</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="tgl_permohonan" name="tgl_permohonan"
            placeholder="Tanggal Permohonan" required>
        </div>
      </div>

      <div>
        <label class="col-sm-2 col-form-label">Dokumen yang Diproses</label>
          <div class="form-check-inline">
            <input class="form-check-input" type="checkbox" id="dokumen_baru" name="dokumen_baru" value="Baru">
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
            Dokumen Baru
            </label>
          </div>
          <div class="form-check-inline">
            <input class="form-check-input" type="checkbox" id="penambahan_jiwa" name="penambahan_jiwa" value="Penambahan">
            <label class="form-check-label font-weight-bold" for="defaultCheck2">
            Penambahan Jiwa
            </label>
          </div>
          <div class="form-check-inline">
            <input class="form-check-input" type="checkbox" id="perubahan_data" name="perubahan_data" value="Perubahan">
            <label class="form-check-label font-weight-bold" for="defaultCheck3">
            Perubahan Data
            </label>
          </div>
      </div>
    </div>
  </div>

  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-edit"></i> Petugas Pelayanan/Register
      </h3>
    </div>

    <div class="card-body">
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="doc1" value="Y">F.2-28
        </label>
      </div>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="doc2" value="Y">F.2-29
        </label>
      </div>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="doc3" value="Y">F.2-30
        </label>
      </div>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="doc4" value="Y">F.2-31
        </label>
      </div>
      <br>

      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="doc5" value="Y">F.2-32
        </label>
      </div>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="doc6" value="Y">F.2-33
        </label>
      </div>
      <div class="form-check-inline">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="doc7" value="Y">F.2-34
        </label>
      </div>
      <br>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">
          <select name="petugas_pelayanan" id="petugas_pelayanan" class="form-control">
            <option>- Pilih -</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="tgl_verif_pelayanan" name="tgl_verif_pelayanan"
            placeholder="Tanggal" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jam</label>
        <div class="col-sm-6">
          <input type="time" class="form-control" id="jam_verif_pelayanan" name="jam_verif_pelayanan"
            class="form-control">
        </div>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan" value="Terverifikasi">
        <label class="form-check-label font-weight-bold" for="defaultCheck1">
          Terverifikasi
        </label>
      </div>
      <br>

      <div class="form-group">
        <label for="comment">Catatan:</label>
        <textarea class="form-control" rows="1" id="catatan_pelayanan" name="catatan_pelayanan"></textarea>
      </div>
    </div>
  </div>

  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-edit"></i> Operator Komputer
      </h3>
    </div>

    <div class="card-body">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">
          <select name="operator" id="operator" class="form-control">
            <option>- Pilih -</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="tgl_verif_operator" name="tgl_verif_operator" placeholder="Tanggal">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jam</label>
        <div class="col-sm-6">
          <input type="time" class="form-control" id="jam_verif_operator" name="jam_verif_operator" class="form-control">
        </div>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator" value="Terverifikasi">
        <label class="form-check-label font-weight-bold" for="defaultCheck1">
          Terverifikasi
        </label>
      </div>
      <br>

      <div class="form-group">
        <label for="comment">Catatan:</label>
        <textarea class="form-control" rows="1" id="catatan_operator" name="catatan_operator"></textarea>
      </div>
    </div>
  </div>

  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-edit"></i> Kasi
      </h3>
    </div>

    <div class="card-body">
      <h6><b>Periksa & Paraf Draft</b></h6>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">
          <select name="kasi" id="kasi" class="form-control">
            <option>- Pilih -</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="tgl_verif_kasi" name="tgl_verif_kasi" placeholder="Tanggal">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jam</label>
        <div class="col-sm-6">
          <input type="time" class="form-control" id="jam_verif_kasi" name="jam_verif_kasi" class="form-control">
        </div>
      </div>

      <br>
      <h6><b>Terima & Serahkan ke Kabid</b></h6>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">
          <select name="kasi2" id="kasi2" class="form-control">
            <option>- Pilih -</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="tgl_verif_kasi2" name="tgl_verif_kasi2" placeholder="Tanggal">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jam</label>
        <div class="col-sm-6">
          <input type="time" class="form-control" id="jam_verif_kasi2" name="jam_verif_kasi2" class="form-control">
        </div>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi" value="Terverifikasi">
        <label class="form-check-label font-weight-bold" for="defaultCheck1">
          Terverifikasi
        </label>
      </div>
      <br>

      <div class="form-group">
        <label for="comment">Catatan:</label>
        <textarea class="form-control" rows="1" id="catatan_kasi" name="catatan_kasi"></textarea>
      </div>
    </div>
  </div>

  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-edit"></i> Kabid Capil
      </h3>
    </div>

    <div class="card-body">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">
          <select name="kabid" id="kabid" class="form-control">
            <option>- Pilih -</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="tgl_verif_kabid" name="tgl_verif_kabid" placeholder="Tanggal">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jam</label>
        <div class="col-sm-6">
          <input type="time" class="form-control" id="jam_verif_kabid" name="jam_verif_kabid" class="form-control">
        </div>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="status_verif_kabid" name="status_verif_kabid" value="Terverifikasi">
        <label class="form-check-label font-weight-bold" for="defaultCheck1">
          Terverifikasi
        </label>
      </div>
      <br>

      <div class="form-group">
        <label for="comment">Catatan:</label>
        <textarea class="form-control" rows="1" id="catatan_kabid" name="catatan_kabid"></textarea>
      </div>
    </div>
  </div>

  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-edit"></i> Kepala Dinas
      </h3>
    </div>

    <div class="card-body">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">
          <select name="kepdinas" id="kepdinas" class="form-control">
            <option>- Pilih -</option>
            <option>1</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="tgl_verif_kepdinas" name="tgl_verif_kepdinas" placeholder="Tanggal">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jam</label>
        <div class="col-sm-6">
          <input type="time" class="form-control" id="jam_verif_kepdinas" name="jam_verif_kepdinas" class="form-control">
        </div>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="status_verif_kepdinas" name="status_verif_kepdinas" value="Terverifikasi">
        <label class="form-check-label font-weight-bold" for="defaultCheck1">
          Terverifikasi
        </label>
      </div>
      <br>

      <div class="form-group">
        <label for="comment">Catatan:</label>
        <textarea class="form-control" rows="1" id="catatan_kepdinas" name="catatan_kepdinas"></textarea>
      </div>
    </div>

  </div>

  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-edit"></i> Petugas Distribusi (Pelayanan)
      </h3>
    </div>

    <div class="card-body">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">
          <select name="petugas" id="petugas" class="form-control">
            <option>- Pilih -</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="tgl_verif_petugas" name="tgl_verif_petugas" placeholder="Tanggal">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jam</label>
        <div class="col-sm-6">
          <input type="time" class="form-control" id="jam_verif_petugas" name="jam_verif_petugas" class="form-control">
        </div>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas" value="Terverifikasi">
        <label class="form-check-label font-weight-bold" for="defaultCheck1">
          Terverifikasi
        </label>
      </div>
      <br>

      <div class="form-group">
        <label for="comment">Catatan:</label>
        <textarea class="form-control" rows="1" id="catatan_petugas" name="catatan_petugas"></textarea>
      </div>
    </div>
  </div>

  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-edit"></i> Pemohon
      </h3>
    </div>

    <div class="card-body">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="pemohon" name="pemohon" placeholder="Nama">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Hari/Tgl</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="tgl_verif_pemohon" name="tgl_verif_pemohon" placeholder="Tanggal">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jam</label>
        <div class="col-sm-6">
          <input type="time" class="form-control" id="jam_verif_pemohon" name="jam_verif_pemohon" class="form-control">
        </div>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon" value="Terverifikasi">
        <label class="form-check-label font-weight-bold" for="defaultCheck1">
          Terverifikasi
        </label>
      </div>
      <br>

      <div class="form-group">
        <label for="comment">Catatan:</label>
        <textarea class="form-control" rows="1" id="catatan_pemohon" name="catatan_pemohon"></textarea>
      </div>
    </div>
  </div>

  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fa fa-edit"></i> Arsip
      </h3>
    </div>

    <div class="card-body">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">
          <select name="arsip" id="arsip" class="form-control">
            <option>- Pilih -</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-3">
          <input type="date" class="form-control" id="tgl_verif_arsip" name="tgl_verif_arsip" placeholder="Tanggal">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jam</label>
        <div class="col-sm-6">
          <input type="time" class="form-control" id="jam_verif_arsip" name="jam_verif_arsip" class="form-control">
        </div>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip" value="Terverifikasi">
        <label class="form-check-label font-weight-bold" for="defaultCheck1">
          Terverifikasi
        </label>
      </div>
      <br>

      <div class="form-group">
        <label for="comment">Catatan:</label>
        <textarea class="form-control" rows="1" id="catatan_arsip" name="catatan_arsip"></textarea>
      </div>
    </div>
  </div>

  <input type="submit" name="Simpan" value="Simpan" class="btn btn-info" />
</form>

<?php

if (isset($_POST['Simpan'])) {
  //mulai proses simpan data
  $nama_pemohon = $_POST['nama_pemohon'];
  $nik = $_POST['nik'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $jk = $_POST['jk'];
  $kelurahan = $_POST['kelurahan'];
  $kecamatan = $_POST['kecamatan'];
  $tgl_permohonan = $_POST['tgl_permohonan'];
  if(isset($_POST['dokumen_baru'])){
    $dokumen_baru = $_POST['dokumen_baru'];
  }
  if(isset($_POST['penambahan_jiwa'])){
    $penambahan_jiwa = $_POST['penambahan_jiwa'];
  }
  if(isset($_POST['perubahan_data'])){
    $perubahan_data = $_POST['perubahan_data'];
  }

  $petugas_pelayanan = $_POST['petugas_pelayanan'];
  $tgl_verif_pelayanan = $_POST['tgl_verif_pelayanan'];
  $jam_verif_pelayanan = $_POST['jam_verif_pelayanan'];
  $status_verif_pelayanan = '';
  if(isset($_POST['status_verif_pelayanan'])){
    $status_verif_pelayanan = $_POST['status_verif_pelayanan'];
  }
  $catatan_pelayanan = $_POST['catatan_pelayanan'];

  $kasi =  $_POST['kasi'];
  $tgl_verif_kasi = $_POST['tgl_verif_kasi'];
  $jam_verif_kasi = $_POST['jam_verif_kasi'];
  $kasi2 =  $_POST['kasi2'];
  $tgl_verif_kasi2 = $_POST['tgl_verif_kasi2'];
  $jam_verif_kasi2 = $_POST['jam_verif_kasi2'];
  $status_verif_kasi = '';
  if(isset($_POST['status_verif_kasi'])){
    $status_verif_kasi =  $_POST['status_verif_kasi'];
  }
  $catatan_kasi = $_POST['catatan_kasi'];

  $operator =  $_POST['operator'];
  $tgl_verif_operator = $_POST['tgl_verif_operator'];
  $jam_verif_operator = $_POST['jam_verif_operator'];
  $status_verif_operator = '';
  if(isset($_POST['status_verif_operator'])){
    $status_verif_operator =  $_POST['status_verif_operator'];
  }
  $catatan_operator = $_POST['catatan_operator'];

  $kabid = $_POST['kabid'];
  $tgl_verif_kabid = $_POST['tgl_verif_kabid'];
  $jam_verif_kabid = $_POST['jam_verif_kabid'];
  $status_verif_kabid = '';
  if(isset($_POST['status_verif_kabid'])){
    $status_verif_kabid =  $_POST['status_verif_kabid'];
  }
  $catatan_kabid = $_POST['catatan_kabid'];

  $petugas = $_POST['petugas'];
  $tgl_verif_petugas = $_POST['tgl_verif_petugas'];
  $jam_verif_petugas = $_POST['jam_verif_petugas'];
  $status_verif_petugas = '';
  if(isset($_POST['status_verif_petugas'])){
    $status_verif_petugas =  $_POST['status_verif_petugas'];
  }
  $catatan_petugas = $_POST['catatan_petugas'];

  $kepdinas = $_POST['kepdinas'];
  $tgl_verif_kepdinas = $_POST['tgl_verif_kepdinas'];
  $jam_verif_kepdinas = $_POST['jam_verif_kepdinas'];
  $status_verif_kepdinas = '';
  if(isset($_POST['status_verif_kepdinas'])){
    $status_verif_kepdinas =  $_POST['status_verif_kepdinas'];
  }
  $catatan_kepdinas =  $_POST['catatan_kepdinas'];

  $pemohon =  $_POST['pemohon'];
  $tgl_verif_pemohon = $_POST['tgl_verif_pemohon'];
  $jam_verif_pemohon = $_POST['jam_verif_pemohon'];
  $status_verif_pemohon = '';
  if(isset($_POST['status_verif_pemohon'])){
    $status_verif_pemohon =  $_POST['status_verif_pemohon'];
  }
  $catatan_pemohon = $_POST['catatan_pemohon'];

  $arsip = $_POST['arsip'];
  $tgl_verif_arsip = $_POST['tgl_verif_arsip'];
  $jam_verif_arsip = $_POST['jam_verif_arsip'];
  $status_verif_arsip = '';
  if(isset($_POST['status_verif_arsip'])){
    $status_verif_arsip =  $_POST['status_verif_arsip'];
  }
  $catatan_arsip = $_POST['catatan_arsip'];

  $sql_simpan = "INSERT INTO tabel_verifikasi (nama_pemohon, nik, tempat_lahir, tgl_lahir, jk, kelurahan, kecamatan, tgl_permohonan, dokumen_baru, penambahan_jiwa, perubahan_data, petugas_pelayanan, tgl_verif_pelayanan, jam_verif_pelayanan, status_verif_pelayanan, catatan_pelayanan, kasi, tgl_verif_kasi, jam_verif_kasi, kasi2, tgl_verif_kasi2, jam_verif_kasi2, status_verif_kasi, catatan_kasi, operator, tgl_verif_operator, jam_verif_operator, status_verif_operator, catatan_operator, kabid, tgl_verif_kabid, jam_verif_kabid, status_verif_kabid, catatan_kabid, petugas, tgl_verif_petugas, jam_verif_petugas, status_verif_petugas, catatan_petugas, kepdinas, tgl_verif_kepdinas, jam_verif_kepdinas, status_verif_kepdinas, catatan_kepdinas, pemohon, tgl_verif_pemohon, jam_verif_pemohon, status_verif_pemohon, catatan_pemohon, arsip, tgl_verif_arsip, jam_verif_arsip, status_verif_arsip, catatan_arsip, jenis_kepengurusan) VALUES('$nama_pemohon','$nik','$tempat_lahir','$tgl_lahir','$jk','$kelurahan','$kecamatan','$tgl_permohonan', '$dokumen_baru', '$penambahan_jiwa', '$perubahan_data', '$petugas_pelayanan','$tgl_verif_pelayanan','$jam_verif_pelayanan','$status_verif_pelayanan','$catatan_pelayanan','$kasi','$tgl_verif_kasi','$jam_verif_kasi','$kasi2','$tgl_verif_kasi2','$jam_verif_kasi2','$status_verif_kasi','$catatan_kasi','$operator','$tgl_verif_operator','$jam_verif_operator','$status_verif_operator','$catatan_operator','$kabid','$tgl_verif_kabid','$jam_verif_kabid','$status_verif_kabid','$catatan_kabid','$petugas','$tgl_verif_petugas','$jam_verif_petugas','$status_verif_petugas','$catatan_petugas','$kepdinas','$tgl_verif_kepdinas','$jam_verif_kepdinas','$status_verif_kepdinas','$catatan_kepdinas','$pemohon','$tgl_verif_pemohon','$jam_verif_pemohon','$status_verif_pemohon','$catatan_pemohon','$arsip','$tgl_verif_arsip','$jam_verif_arsip','$status_verif_arsip','$catatan_arsip','AKTA MATI')";

  $query_simpan = mysqli_query($koneksi, $sql_simpan);

  $sql_cek = "SELECT * FROM tabel_verifikasi ORDER BY id_kendali DESC LIMIT 1";
  $query_cek = mysqli_query($koneksi, $sql_cek);
  $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
  
  $id = $data_cek['id_kendali'];
  $doc1 = '';
  if(isset($_POST['doc1'])){
    $doc1 =  $_POST['doc1'];
  }
  $doc2 = '';
  if(isset($_POST['doc2'])){
    $doc2 =  $_POST['doc2'];
  }
  $doc3 = '';
  if(isset($_POST['doc3'])){
    $doc3 =  $_POST['doc3'];
  }
  $doc4 = '';
  if(isset($_POST['doc4'])){
    $doc4 =  $_POST['doc4'];
  }
  $doc5 = '';
  if(isset($_POST['doc5'])){
    $doc5 =  $_POST['doc5'];
  }
  $doc6 = '';
  if(isset($_POST['doc6'])){
    $doc6 =  $_POST['doc6'];
  }
  $doc7 = '';
  if(isset($_POST['doc7'])){
    $doc7 =  $_POST['doc7'];
  }

  $sql_simpan = "INSERT INTO verif_dokumen (id_kendali,	doc1,	doc2,	doc3,	doc4,	doc5,	doc6,	doc7) VALUES('$id','$doc1','$doc2','$doc3','$doc4','$doc5','$doc6','$doc7')";
  $query_simpan = mysqli_query($koneksi, $sql_simpan);

  if ($query_simpan) {
    echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=verif-aktamati';
          }
      })</script>";
  } else {
    echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=verif-aktamati';
          }
      })</script>";
  }
}
     //selesai proses simpan data