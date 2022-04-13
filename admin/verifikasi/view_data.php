<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tabel_verifikasi WHERE id_kendali='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);

        $sql_dok = "SELECT * FROM verif_dokumen WHERE id_kendali='".$_GET['kode']."'";
        $query_dok = mysqli_query($koneksi, $sql_dok);
        $data_dok = mysqli_fetch_array($query_dok,MYSQLI_BOTH);
    }

    if($data_cek['jenis_kepengurusan'] == 'KK'){
?>

<h3 class="text-center font-weight-bold"> LIHAT DATA PENGURUSAN <?= $data_cek['jenis_kepengurusan']; ?></h3>
<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title"><i class="fa fa-edit"></i> Biodata Pemohon
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" placeholder="Nama"
                    value="<?= $data_cek['nama_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIK Pemohon</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK"
                    value="<?= $data_cek['nik']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">TTL</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
                    value="<?= $data_cek['tempat_lahir']; ?>" readonly>
            </div>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                    value="<?= $data_cek['tgl_lahir']; ?>" placeholder="Tanggal Lahir" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" value="<?= $data_cek['jk']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Desa/Kelurahan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="<?= $data_cek['kelurahan']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                    value="<?= $data_cek['kecamatan']; ?>" placeholder="Kecamatan" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Permohonan</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_permohonan" name="tgl_permohonan"
                    value="<?= $data_cek['tgl_permohonan']; ?>" placeholder="Tanggal Permohonan" readonly>
            </div>
        </div>

        <label class="col-sm-2 col-form-label">Dokumen yang Diproses</label>
            <div class="form-check-inline">
                <?php if ($data_cek['dokumen_baru'] == 'Baru'): ?>
                <input class="form-check-input" type="checkbox" id="dokumen_baru"
                    name="dokumen_baru" value="Baru" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="dokumen_baru"
                    name="dokumen_baru" value="Baru">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Dokumen Baru
                </label>
            </div>
            <div class="form-check-inline">
                <?php if ($data_cek['penambahan_jiwa'] == 'Penambahan'): ?>
                <input class="form-check-input" type="checkbox" id="penambahan_jiwa"
                    name="penambahan_jiwa" value="Penambahan" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="penambahan_jiwa"
                    name="penambahan_jiwa" value="Penambahan">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck2">
                    Penambahan Jiwa
                </label>
            </div>
            <div class="form-check-inline">
                <?php if ($data_cek['perubahan_data'] == 'Perubahan'): ?>
                <input class="form-check-input" type="checkbox" id="perubahan_data"
                    name="perubahan_data" value="Perubahan" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="perubahan_data"
                    name="perubahan_data" value="Perubahan">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck3">
                    Perubahan Data
                </label>
            </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Petugas Pelayanan
        </h3>
    </div>

    <div class="card-body">
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc1'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc1" value="Y" checked>F.1-01

                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc1" value="Y">F.1-01
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc2'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc2" value="Y" checked>F.1-03

                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc2" value="Y">F.1-03
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc3'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc3" value="Y" checked>Surat Keterangan Kelahiran
                dari Kelurahan

                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc3" value="Y">Surat Keterangan Kelahiran dari
                Kelurahan
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc4'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc4" value="Y" checked>F.1-05

                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc4" value="Y">F.1-05
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc5'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc5" value="Y" checked>KK Lama

                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc5" value="Y">KK Lama
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc6'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc6" value="Y" checked>Surat Pindah Datang

                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc6" value="Y">Surat Pindah Datang
                <?php endif ?>
            </label>
        </div>
        <br>

        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc7'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc7" value="Y" checked>Copy Ijazah
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc7" value="Y">Copy Ijazah
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc8'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc8" value="Y" checked>Surat Kematian
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc8" value="Y">Surat Kematian
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc9'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc9" value="Y" checked>Copy Surat Nikah/Cerai
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc9" value="Y">Copy Surat Nikah/Cerai
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc10'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc10" value="Y" checked>Copy KTP
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc10" value="Y">Copy KTP
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc11'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc11" value="Y" checked>Copy Akta Kelahiran
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc11" value="Y">Copy Akta Kelahiran
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc12'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc12" value="Y" checked>Lainnya
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc12" value="Y">Lainnya
                <?php endif ?>
            </label>
        </div>
        <br><br>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas_pelayanan" id="petugas_pelayanan" value="<?= $data_cek['petugas_pelayanan']; ?>"
                    class="form-control">
                    <option><?= $data_cek['petugas_pelayanan']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_pelayanan" name="tgl_verif_pelayanan"
                    value="<?= $data_cek['tgl_verif_pelayanan']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_pelayanan" name="jam_verif_pelayanan"
                    value="<?= $data_cek['jam_verif_pelayanan']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_pelayanan'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_pelayanan" name="catatan_pelayanan"
                readonly><?= $data_cek['catatan_pelayanan']; ?></textarea>
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
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="kasi" id="kasi" class="form-control">
                    <option><?= $data_cek['kasi']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kasi" name="tgl_verif_kasi"
                    value="<?= $data_cek['tgl_verif_kasi']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kasi" name="jam_verif_kasi"
                    value="<?= $data_cek['jam_verif_kasi']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kasi'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kasi" name="catatan_kasi"
                readonly><?= $data_cek['catatan_kasi']; ?></textarea>
        </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Operator
        </h3>
    </div>

    <div class="card-body">
        <h6><b>Verifikasi dan Cetak Draft</b></h6>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="operator" id="operator" class="form-control">
                    <option><?= $data_cek['operator']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_operator" name="tgl_verif_operator"
                    value="<?= $data_cek['tgl_verif_operator']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_operator" name="jam_verif_operator"
                    value="<?= $data_cek['jam_verif_operator']; ?>" readonly>
            </div>
        </div>

        <br>
        <h6><b>Verifikasi dan Cetak Blanko</b></h6>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="operator2" id="operator2" class="form-control">
                    <option><?= $data_cek['operator2']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_operator2" name="tgl_verif_operator2"
                    value="<?= $data_cek['tgl_verif_operator2']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_operator2" name="jam_verif_operator2"
                    value="<?= $data_cek['jam_verif_operator2']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_operator'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_operator" name="catatan_operator"
                readonly><?= $data_cek['catatan_operator']; ?></textarea>
        </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Kabid
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="kabid" id="kabid" class="form-control">
                    <option><?= $data_cek['kabid']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kabid" name="tgl_verif_kabid"
                    value="<?= $data_cek['tgl_verif_kabid']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kabid" name="jam_verif_kabid"
                    value="<?= $data_cek['jam_verif_kabid']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kabid'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kabid" name="status_verif_kabid"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kabid" name="status_verif_kabid"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kabid" name="catatan_kabid"
                readonly><?= $data_cek['catatan_kabid']; ?></textarea>
        </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Petugas Distribusi
        </h3>
    </div>

    <div class="card-body">
        <h6><b>Memasukkan No. Kendali</b></h6>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas" id="petugas" class="form-control">
                    <option><?= $data_cek['petugas']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_petugas" name="tgl_verif_petugas"
                    value="<?= $data_cek['tgl_verif_petugas']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_petugas" name="jam_verif_petugas"
                    value="<?= $data_cek['jam_verif_petugas']; ?>" readonly>
            </div>
        </div>

        <br>
        <h6><b>Serahkan ke Pemohon</b></h6>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas2" id="petugas2" class="form-control">
                    <option><?= $data_cek['petugas2']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_petugas2" name="tgl_verif_petugas2"
                    value="<?= $data_cek['tgl_verif_petugas2']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_petugas2" name="jam_verif_petugas2"
                    value="<?= $data_cek['jam_verif_petugas2']; ?>" readonly>
            </div>
        </div>
        <div class="form-check">
            <?php if ($data_cek['status_verif_petugas'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_petugas" name="catatan_petugas"
                readonly><?= $data_cek['catatan_petugas']; ?></textarea>
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
                    <option><?= $data_cek['kepdinas']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kepdinas" name="tgl_verif_kepdinas"
                    value="<?= $data_cek['tgl_verif_kepdinas']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kepdinas" name="jam_verif_kepdinas"
                    value="<?= $data_cek['jam_verif_kepdinas']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kepdinas'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kepdinas" name="status_verif_kepdinas"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kepdinas" name="status_verif_kepdinas"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kepdinas" name="catatan_kepdinas"
                readonly><?= $data_cek['catatan_kepdinas']; ?></textarea>
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
                <input type="text" class="form-control" id="pemohon" name="pemohon" value="<?= $data_cek['pemohon']; ?>"
                    readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Hari/Tgl</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_pemohon" name="tgl_verif_pemohon"
                    value="<?= $data_cek['tgl_verif_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_pemohon" name="jam_verif_pemohon"
                    value="<?= $data_cek['jam_verif_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_pemohon'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_pemohon" name="catatan_pemohon"
                readonly><?= $data_cek['catatan_pemohon']; ?></textarea>
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
                    <option><?= $data_cek['arsip']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_arsip" name="tgl_verif_arsip"
                    value="<?= $data_cek['tgl_verif_arsip']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_arsip" name="jam_verif_arsip"
                    value="<?= $data_cek['jam_verif_arsip']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_arsip'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_arsip" name="catatan_arsip"
                readonly><?= $data_cek['catatan_arsip']; ?></textarea>
        </div>

        <div>
            <a href="?page=data-verif" title="Kembali" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

<?php 
    }elseif($data_cek['jenis_kepengurusan'] == 'KTP'){
?>

<h3 class="text-center font-weight-bold"> LIHAT DATA PENGURUSAN <?= $data_cek['jenis_kepengurusan']; ?></h3>
<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title"><i class="fa fa-edit"></i> Biodata Pemohon
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" placeholder="Nama"
                    value="<?= $data_cek['nama_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIK Pemohon</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK"
                    value="<?= $data_cek['nik']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">TTL</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
                    value="<?= $data_cek['tempat_lahir']; ?>" readonly>
            </div>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                    value="<?= $data_cek['tgl_lahir']; ?>" placeholder="Tanggal Lahir" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" value="<?= $data_cek['jk']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Desa/Kelurahan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="<?= $data_cek['kelurahan']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                    value="<?= $data_cek['kecamatan']; ?>" placeholder="Kecamatan" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Permohonan</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_permohonan" name="tgl_permohonan"
                    value="<?= $data_cek['tgl_permohonan']; ?>" placeholder="Tanggal Permohonan" readonly>
            </div>
        </div>

        <label class="col-sm-2 col-form-label">Dokumen yang Diproses</label>
            <div class="form-check-inline">
                <?php if ($data_cek['dokumen_baru'] == 'Baru'): ?>
                <input class="form-check-input" type="checkbox" id="dokumen_baru"
                    name="dokumen_baru" value="Baru" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="dokumen_baru"
                    name="dokumen_baru" value="Baru">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Dokumen Baru
                </label>
            </div>
            <div class="form-check-inline">
                <?php if ($data_cek['penambahan_jiwa'] == 'Penambahan'): ?>
                <input class="form-check-input" type="checkbox" id="penambahan_jiwa"
                    name="penambahan_jiwa" value="Penambahan" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="penambahan_jiwa"
                    name="penambahan_jiwa" value="Penambahan">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck2">
                    Penambahan Jiwa
                </label>
            </div>
            <div class="form-check-inline">
                <?php if ($data_cek['perubahan_data'] == 'Perubahan'): ?>
                <input class="form-check-input" type="checkbox" id="perubahan_data"
                    name="perubahan_data" value="Perubahan" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="perubahan_data"
                    name="perubahan_data" value="Perubahan">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck3">
                    Perubahan Data
                </label>
            </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Petugas Pelayanan
        </h3>
    </div>

    <div class="card-body">
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc1'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc1" value="Y" checked>F1.21
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc1" value="Y">F1.21
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc2'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc2" value="Y" checked>Copy KK

                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc2" value="Y">Copy KK
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc3'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc3" value="Y" checked>Copy Akta Lahir
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc3" value="Y">Copy Akta Lahir
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc4'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc4" value="Y" checked>Surat Keterangan Hilang
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc4" value="Y">Surat Keterangan Hilang
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc5'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc5" value="Y" checked>KTP Rusak/Lama
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc5" value="Y">KTP Rusak/Lama
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc6'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc6" value="Y" checked>KIA Untuk Pemula
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc6" value="Y">KIA Untuk Pemula
                <?php endif ?>
            </label>
        </div>

        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc7'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc7" value="Y" checked>Lainnya
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc7" value="Y">Lainnya
                <?php endif ?>
            </label>
        </div>
        <br><br>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas_pelayanan" id="petugas_pelayanan" value="<?= $data_cek['petugas_pelayanan']; ?>"
                    class="form-control">
                    <option><?= $data_cek['petugas_pelayanan']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_pelayanan" name="tgl_verif_pelayanan"
                    value="<?= $data_cek['tgl_verif_pelayanan']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_pelayanan" name="jam_verif_pelayanan"
                    value="<?= $data_cek['jam_verif_pelayanan']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_pelayanan'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_pelayanan" name="catatan_pelayanan"
                readonly><?= $data_cek['catatan_pelayanan']; ?></textarea>
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
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="kasi" id="kasi" class="form-control">
                    <option><?= $data_cek['kasi']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kasi" name="tgl_verif_kasi"
                    value="<?= $data_cek['tgl_verif_kasi']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kasi" name="jam_verif_kasi"
                    value="<?= $data_cek['jam_verif_kasi']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kasi'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kasi" name="catatan_kasi"
                readonly><?= $data_cek['catatan_kasi']; ?></textarea>
        </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Operator
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="operator" id="operator" class="form-control">
                    <option><?= $data_cek['operator']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_operator" name="tgl_verif_operator"
                    value="<?= $data_cek['tgl_verif_operator']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_operator" name="jam_verif_operator"
                    value="<?= $data_cek['jam_verif_operator']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_operator'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_operator" name="catatan_operator"
                readonly><?= $data_cek['catatan_operator']; ?></textarea>
        </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Petugas Distribusi
        </h3>
    </div>

    <div class="card-body">
        <h6><b>Memasukkan No. Kendali</b></h6>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas" id="petugas" class="form-control">
                    <option><?= $data_cek['petugas']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_petugas" name="tgl_verif_petugas"
                    value="<?= $data_cek['tgl_verif_petugas']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_petugas" name="jam_verif_petugas"
                    value="<?= $data_cek['jam_verif_petugas']; ?>" readonly>
            </div>
        </div>

        <br>
        <h6><b>Serahkan ke Pemohon</b></h6>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas2" id="petugas2" class="form-control">
                    <option><?= $data_cek['petugas2']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_petugas2" name="tgl_verif_petugas2"
                    value="<?= $data_cek['tgl_verif_petugas2']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_petugas2" name="jam_verif_petugas2"
                    value="<?= $data_cek['jam_verif_petugas2']; ?>" readonly>
            </div>
        </div>
        <div class="form-check">
            <?php if ($data_cek['status_verif_petugas'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_petugas" name="catatan_petugas"
                readonly><?= $data_cek['catatan_petugas']; ?></textarea>
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
                <input type="text" class="form-control" id="pemohon" name="pemohon" value="<?= $data_cek['pemohon']; ?>"
                    readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Hari/Tgl</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_pemohon" name="tgl_verif_pemohon"
                    value="<?= $data_cek['tgl_verif_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_pemohon" name="jam_verif_pemohon"
                    value="<?= $data_cek['jam_verif_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_pemohon'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_pemohon" name="catatan_pemohon"
                readonly><?= $data_cek['catatan_pemohon']; ?></textarea>
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
                    <option><?= $data_cek['arsip']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_arsip" name="tgl_verif_arsip"
                    value="<?= $data_cek['tgl_verif_arsip']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_arsip" name="jam_verif_arsip"
                    value="<?= $data_cek['jam_verif_arsip']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_arsip'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_arsip" name="catatan_arsip"
                readonly><?= $data_cek['catatan_arsip']; ?></textarea>
        </div>

        <div>
            <a href="?page=data-verif" title="Kembali" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

<?php 
    }elseif($data_cek['jenis_kepengurusan'] == 'KIA'){
?>

<h3 class="text-center font-weight-bold"> LIHAT DATA PENGURUSAN <?= $data_cek['jenis_kepengurusan']; ?></h3>
<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title"><i class="fa fa-edit"></i> Biodata Pemohon
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" placeholder="Nama"
                    value="<?= $data_cek['nama_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIK Pemohon</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK"
                    value="<?= $data_cek['nik']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">TTL</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
                    value="<?= $data_cek['tempat_lahir']; ?>" readonly>
            </div>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                    value="<?= $data_cek['tgl_lahir']; ?>" placeholder="Tanggal Lahir" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" value="<?= $data_cek['jk']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Desa/Kelurahan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="<?= $data_cek['kelurahan']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                    value="<?= $data_cek['kecamatan']; ?>" placeholder="Kecamatan" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Permohonan</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_permohonan" name="tgl_permohonan"
                    value="<?= $data_cek['tgl_permohonan']; ?>" placeholder="Tanggal Permohonan" readonly>
            </div>
        </div>

        <label class="col-sm-2 col-form-label">Dokumen yang Diproses</label>
            <div class="form-check-inline">
                <?php if ($data_cek['dokumen_baru'] == 'Baru'): ?>
                <input class="form-check-input" type="checkbox" id="dokumen_baru"
                    name="dokumen_baru" value="Baru" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="dokumen_baru"
                    name="dokumen_baru" value="Baru">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Dokumen Baru
                </label>
            </div>
            <div class="form-check-inline">
                <?php if ($data_cek['penambahan_jiwa'] == 'Penambahan'): ?>
                <input class="form-check-input" type="checkbox" id="penambahan_jiwa"
                    name="penambahan_jiwa" value="Penambahan" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="penambahan_jiwa"
                    name="penambahan_jiwa" value="Penambahan">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck2">
                    Penambahan Jiwa
                </label>
            </div>
            <div class="form-check-inline">
                <?php if ($data_cek['perubahan_data'] == 'Perubahan'): ?>
                <input class="form-check-input" type="checkbox" id="perubahan_data"
                    name="perubahan_data" value="Perubahan" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="perubahan_data"
                    name="perubahan_data" value="Perubahan">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck3">
                    Perubahan Data
                </label>
            </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Petugas Pelayanan
        </h3>
    </div>

    <div class="card-body">
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc1'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc1" value="Y" checked>KTP Ortu
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc1" value="Y">KTP Ortu
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc2'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc2" value="Y" checked>Copy KK

                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc2" value="Y">Copy KK
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc3'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc3" value="Y" checked>Copy Akta Lahir
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc3" value="Y">Copy Akta Lahir
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc4'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc4" value="Y" checked>Lainnya
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc4" value="Y">Lainnya
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc5'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc5" value="Y" checked>Pas Foto
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc5" value="Y">Pas Foto
                <?php endif ?>
            </label>
        </div>
        <br><br>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas_pelayanan" id="petugas_pelayanan" value="<?= $data_cek['petugas_pelayanan']; ?>"
                    class="form-control">
                    <option><?= $data_cek['petugas_pelayanan']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_pelayanan" name="tgl_verif_pelayanan"
                    value="<?= $data_cek['tgl_verif_pelayanan']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_pelayanan" name="jam_verif_pelayanan"
                    value="<?= $data_cek['jam_verif_pelayanan']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_pelayanan'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_pelayanan" name="catatan_pelayanan"
                readonly><?= $data_cek['catatan_pelayanan']; ?></textarea>
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
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="kasi" id="kasi" class="form-control">
                    <option><?= $data_cek['kasi']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kasi" name="tgl_verif_kasi"
                    value="<?= $data_cek['tgl_verif_kasi']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kasi" name="jam_verif_kasi"
                    value="<?= $data_cek['jam_verif_kasi']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kasi'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kasi" name="catatan_kasi"
                readonly><?= $data_cek['catatan_kasi']; ?></textarea>
        </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Operator
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="operator" id="operator" class="form-control">
                    <option><?= $data_cek['operator']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_operator" name="tgl_verif_operator"
                    value="<?= $data_cek['tgl_verif_operator']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_operator" name="jam_verif_operator"
                    value="<?= $data_cek['jam_verif_operator']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_operator'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_operator" name="catatan_operator"
                readonly><?= $data_cek['catatan_operator']; ?></textarea>
        </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Petugas Distribusi
        </h3>
    </div>

    <div class="card-body">
        <h6><b>Memasukkan No. Kendali</b></h6>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas" id="petugas" class="form-control">
                    <option><?= $data_cek['petugas']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_petugas" name="tgl_verif_petugas"
                    value="<?= $data_cek['tgl_verif_petugas']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_petugas" name="jam_verif_petugas"
                    value="<?= $data_cek['jam_verif_petugas']; ?>" readonly>
            </div>
        </div>

        <br>
        <h6><b>Serahkan ke Pemohon</b></h6>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas2" id="petugas2" class="form-control">
                    <option><?= $data_cek['petugas2']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_petugas2" name="tgl_verif_petugas2"
                    value="<?= $data_cek['tgl_verif_petugas2']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_petugas2" name="jam_verif_petugas2"
                    value="<?= $data_cek['jam_verif_petugas2']; ?>" readonly>
            </div>
        </div>
        <div class="form-check">
            <?php if ($data_cek['status_verif_petugas'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_petugas" name="catatan_petugas"
                readonly><?= $data_cek['catatan_petugas']; ?></textarea>
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
                <input type="text" class="form-control" id="pemohon" name="pemohon" value="<?= $data_cek['pemohon']; ?>"
                    readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Hari/Tgl</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_pemohon" name="tgl_verif_pemohon"
                    value="<?= $data_cek['tgl_verif_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_pemohon" name="jam_verif_pemohon"
                    value="<?= $data_cek['jam_verif_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_pemohon'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_pemohon" name="catatan_pemohon"
                readonly><?= $data_cek['catatan_pemohon']; ?></textarea>
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
                    <option><?= $data_cek['arsip']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_arsip" name="tgl_verif_arsip"
                    value="<?= $data_cek['tgl_verif_arsip']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_arsip" name="jam_verif_arsip"
                    value="<?= $data_cek['jam_verif_arsip']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_arsip'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_arsip" name="catatan_arsip"
                readonly><?= $data_cek['catatan_arsip']; ?></textarea>
        </div>

        <div>
            <a href="?page=data-verif" title="Kembali" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

<?php 
    }elseif($data_cek['jenis_kepengurusan'] == 'AKTA LAHIR'){
?>

<h3 class="text-center font-weight-bold"> LIHAT DATA PENGURUSAN <?= $data_cek['jenis_kepengurusan']; ?></h3>
<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title"><i class="fa fa-edit"></i> Biodata Pemohon
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" placeholder="Nama"
                    value="<?= $data_cek['nama_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIK Pemohon</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK"
                    value="<?= $data_cek['nik']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">TTL</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
                    value="<?= $data_cek['tempat_lahir']; ?>" readonly>
            </div>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                    value="<?= $data_cek['tgl_lahir']; ?>" placeholder="Tanggal Lahir" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" value="<?= $data_cek['jk']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Desa/Kelurahan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="<?= $data_cek['kelurahan']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                    value="<?= $data_cek['kecamatan']; ?>" placeholder="Kecamatan" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Permohonan</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_permohonan" name="tgl_permohonan"
                    value="<?= $data_cek['tgl_permohonan']; ?>" placeholder="Tanggal Permohonan" readonly>
            </div>
        </div>

        <label class="col-sm-2 col-form-label">Dokumen yang Diproses</label>
            <div class="form-check-inline">
                <?php if ($data_cek['dokumen_baru'] == 'Baru'): ?>
                <input class="form-check-input" type="checkbox" id="dokumen_baru"
                    name="dokumen_baru" value="Baru" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="dokumen_baru"
                    name="dokumen_baru" value="Baru">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Dokumen Baru
                </label>
            </div>
            <div class="form-check-inline">
                <?php if ($data_cek['penambahan_jiwa'] == 'Penambahan'): ?>
                <input class="form-check-input" type="checkbox" id="penambahan_jiwa"
                    name="penambahan_jiwa" value="Penambahan" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="penambahan_jiwa"
                    name="penambahan_jiwa" value="Penambahan">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck2">
                    Penambahan Jiwa
                </label>
            </div>
            <div class="form-check-inline">
                <?php if ($data_cek['perubahan_data'] == 'Perubahan'): ?>
                <input class="form-check-input" type="checkbox" id="perubahan_data"
                    name="perubahan_data" value="Perubahan" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="perubahan_data"
                    name="perubahan_data" value="Perubahan">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck3">
                    Perubahan Data
                </label>
            </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Petugas Pelayanan
        </h3>
    </div>

    <div class="card-body">
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc1'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc1" value="Y" checked>F.2-01
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc1" value="Y">F.2-01
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc2'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc2" value="Y" checked>F.2-02
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc2" value="Y">F.2-02
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc3'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc3" value="Y" checked>F.2-03
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc3" value="Y">F.2-03
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc4'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc4" value="Y" checked>F.2-04
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc4" value="Y">F.2-04
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc5'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc5" value="Y" checked>F.2-08
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc5" value="Y">F.2-08
                <?php endif ?>
            </label>
        </div>
        <br>

        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc6'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc6" value="Y" checked>F.2-09
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc6" value="Y">F.2-09
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc7'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc7" value="Y" checked>F.2-10
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc7" value="Y">F.2-10
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc8'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc8" value="Y" checked>F.2-11
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc8" value="Y">F.2-11
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc9'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc9" value="Y" checked>FC KTP Ortu
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc9" value="Y">FC KTP Ortu
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc10'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc10" value="Y" checked>FC KTP Saksi
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc10" value="Y">FC KTP Saksi
                <?php endif ?>
            </label>
        </div>
        <br>

        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc11'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc11" value="Y" checked>FC Akta Nikah
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc11" value="Y">FC Akta Nikah
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc12'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc12" value="Y" checked>Surat Bidan
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc12" value="Y">Surat Bidan
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc13'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc13" value="Y" checked>FC KK
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc13" value="Y">FC KK
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc14'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc14" value="Y" checked>Surat Kelahiran dari
                Kelurahan
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc14" value="Y">Surat Kelahiran dari Kelurahan
                <?php endif ?>
            </label>
        </div>
        <br><br>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas_pelayanan" id="petugas_pelayanan" value="<?= $data_cek['petugas_pelayanan']; ?>"
                    class="form-control">
                    <option><?= $data_cek['petugas_pelayanan']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_pelayanan" name="tgl_verif_pelayanan"
                    value="<?= $data_cek['tgl_verif_pelayanan']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_pelayanan" name="jam_verif_pelayanan"
                    value="<?= $data_cek['jam_verif_pelayanan']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_pelayanan'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_pelayanan" name="catatan_pelayanan"
                readonly><?= $data_cek['catatan_pelayanan']; ?></textarea>
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
                    <option><?= $data_cek['kasi']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kasi" name="tgl_verif_kasi"
                    value="<?= $data_cek['tgl_verif_kasi']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kasi" name="jam_verif_kasi"
                    value="<?= $data_cek['jam_verif_kasi']; ?>" readonly>
            </div>
        </div>

        <br>
        <h6><b>Terima & Serahkan ke Kabid</b></h6>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="kasi" id="kasi" class="form-control">
                    <option><?= $data_cek['kasi2']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kasi" name="tgl_verif_kasi"
                    value="<?= $data_cek['tgl_verif_kasi2']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kasi" name="jam_verif_kasi"
                    value="<?= $data_cek['jam_verif_kasi2']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kasi'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kasi" name="catatan_kasi"
                readonly><?= $data_cek['catatan_kasi']; ?></textarea>
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
                    <option><?= $data_cek['operator']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_operator" name="tgl_verif_operator"
                    value="<?= $data_cek['tgl_verif_operator']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_operator" name="jam_verif_operator"
                    value="<?= $data_cek['jam_verif_operator']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_operator'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_operator" name="catatan_operator"
                readonly><?= $data_cek['catatan_operator']; ?></textarea>
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
                    <option><?= $data_cek['kabid']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kabid" name="tgl_verif_kabid"
                    value="<?= $data_cek['tgl_verif_kabid']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kabid" name="jam_verif_kabid"
                    value="<?= $data_cek['jam_verif_kabid']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kabid'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kabid" name="status_verif_kabid"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kabid" name="status_verif_kabid"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kabid" name="catatan_kabid"
                readonly><?= $data_cek['catatan_kabid']; ?></textarea>
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
                    <option><?= $data_cek['petugas']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_petugas" name="tgl_verif_petugas"
                    value="<?= $data_cek['tgl_verif_petugas']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_petugas" name="jam_verif_petugas"
                    value="<?= $data_cek['jam_verif_petugas']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_petugas'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_petugas" name="catatan_petugas"
                readonly><?= $data_cek['catatan_petugas']; ?></textarea>
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
                    <option><?= $data_cek['kepdinas']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kepdinas" name="tgl_verif_kepdinas"
                    value="<?= $data_cek['tgl_verif_kepdinas']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kepdinas" name="jam_verif_kepdinas"
                    value="<?= $data_cek['jam_verif_kepdinas']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kepdinas'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kepdinas" name="status_verif_kepdinas"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kepdinas" name="status_verif_kepdinas"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kepdinas" name="catatan_kepdinas"
                readonly><?= $data_cek['catatan_kepdinas']; ?></textarea>
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
                <input type="text" class="form-control" id="pemohon" name="pemohon" value="<?= $data_cek['pemohon']; ?>"
                    readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Hari/Tgl</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_pemohon" name="tgl_verif_pemohon"
                    value="<?= $data_cek['tgl_verif_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_pemohon" name="jam_verif_pemohon"
                    value="<?= $data_cek['jam_verif_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_pemohon'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_pemohon" name="catatan_pemohon"
                readonly><?= $data_cek['catatan_pemohon']; ?></textarea>
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
                    <option><?= $data_cek['arsip']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_arsip" name="tgl_verif_arsip"
                    value="<?= $data_cek['tgl_verif_arsip']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_arsip" name="jam_verif_arsip"
                    value="<?= $data_cek['jam_verif_arsip']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_arsip'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_arsip" name="catatan_arsip"
                readonly><?= $data_cek['catatan_arsip']; ?></textarea>
        </div>

        <div>
            <a href="?page=data-verif" title="Kembali" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

<?php 
    }elseif($data_cek['jenis_kepengurusan'] == 'AKTA MATI'){
?>

<h3 class="text-center font-weight-bold"> LIHAT DATA PENGURUSAN <?= $data_cek['jenis_kepengurusan']; ?></h3>
<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title"><i class="fa fa-edit"></i> Biodata Pemohon
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" placeholder="Nama"
                    value="<?= $data_cek['nama_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIK Pemohon</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK"
                    value="<?= $data_cek['nik']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">TTL</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
                    value="<?= $data_cek['tempat_lahir']; ?>" readonly>
            </div>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                    value="<?= $data_cek['tgl_lahir']; ?>" placeholder="Tanggal Lahir" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" value="<?= $data_cek['jk']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Desa/Kelurahan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="<?= $data_cek['kelurahan']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                    value="<?= $data_cek['kecamatan']; ?>" placeholder="Kecamatan" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Permohonan</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_permohonan" name="tgl_permohonan"
                    value="<?= $data_cek['tgl_permohonan']; ?>" placeholder="Tanggal Permohonan" readonly>
            </div>
        </div>

        <label class="col-sm-2 col-form-label">Dokumen yang Diproses</label>
            <div class="form-check-inline">
                <?php if ($data_cek['dokumen_baru'] == 'Baru'): ?>
                <input class="form-check-input" type="checkbox" id="dokumen_baru"
                    name="dokumen_baru" value="Baru" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="dokumen_baru"
                    name="dokumen_baru" value="Baru">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Dokumen Baru
                </label>
            </div>
            <div class="form-check-inline">
                <?php if ($data_cek['penambahan_jiwa'] == 'Penambahan'): ?>
                <input class="form-check-input" type="checkbox" id="penambahan_jiwa"
                    name="penambahan_jiwa" value="Penambahan" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="penambahan_jiwa"
                    name="penambahan_jiwa" value="Penambahan">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck2">
                    Penambahan Jiwa
                </label>
            </div>
            <div class="form-check-inline">
                <?php if ($data_cek['perubahan_data'] == 'Perubahan'): ?>
                <input class="form-check-input" type="checkbox" id="perubahan_data"
                    name="perubahan_data" value="Perubahan" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="perubahan_data"
                    name="perubahan_data" value="Perubahan">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck3">
                    Perubahan Data
                </label>
            </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Petugas Pelayanan
        </h3>
    </div>

    <div class="card-body">
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc1'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc1" value="Y" checked>F.2-28
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc1" value="Y">F.2-28
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc2'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc2" value="Y" checked>F.2-29
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc2" value="Y">F.2-29
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc3'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc3" value="Y" checked>F.2-30
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc3" value="Y">F.2-30
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc4'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc4" value="Y" checked>F.2-31
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc4" value="Y">F.2-31
                <?php endif ?>
            </label>
        </div>
        <br>

        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc5'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc5" value="Y" checked>F.2-32
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc5" value="Y">F.2-32
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc6'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc6" value="Y" checked>F.2-33
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc6" value="Y">F.2-33
                <?php endif ?>
            </label>
        </div>

        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc7'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc7" value="Y" checked>F.2-34
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc7" value="Y">F.2-34
                <?php endif ?>
            </label>
        </div>
        <br><br>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas_pelayanan" id="petugas_pelayanan" value="<?= $data_cek['petugas_pelayanan']; ?>"
                    class="form-control">
                    <option><?= $data_cek['petugas_pelayanan']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_pelayanan" name="tgl_verif_pelayanan"
                    value="<?= $data_cek['tgl_verif_pelayanan']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_pelayanan" name="jam_verif_pelayanan"
                    value="<?= $data_cek['jam_verif_pelayanan']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_pelayanan'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_pelayanan" name="catatan_pelayanan"
                readonly><?= $data_cek['catatan_pelayanan']; ?></textarea>
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
                    <option><?= $data_cek['kasi']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kasi" name="tgl_verif_kasi"
                    value="<?= $data_cek['tgl_verif_kasi']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kasi" name="jam_verif_kasi"
                    value="<?= $data_cek['jam_verif_kasi']; ?>" readonly>
            </div>
        </div>

        <br>
        <h6><b>Terima & Serahkan ke Kabid</b></h6>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="kasi" id="kasi" class="form-control">
                    <option><?= $data_cek['kasi2']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kasi" name="tgl_verif_kasi"
                    value="<?= $data_cek['tgl_verif_kasi2']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kasi" name="jam_verif_kasi"
                    value="<?= $data_cek['jam_verif_kasi2']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kasi'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kasi" name="catatan_kasi"
                readonly><?= $data_cek['catatan_kasi']; ?></textarea>
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
                    <option><?= $data_cek['operator']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_operator" name="tgl_verif_operator"
                    value="<?= $data_cek['tgl_verif_operator']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_operator" name="jam_verif_operator"
                    value="<?= $data_cek['jam_verif_operator']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_operator'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_operator" name="catatan_operator"
                readonly><?= $data_cek['catatan_operator']; ?></textarea>
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
                    <option><?= $data_cek['kabid']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kabid" name="tgl_verif_kabid"
                    value="<?= $data_cek['tgl_verif_kabid']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kabid" name="jam_verif_kabid"
                    value="<?= $data_cek['jam_verif_kabid']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kabid'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kabid" name="status_verif_kabid"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kabid" name="status_verif_kabid"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kabid" name="catatan_kabid"
                readonly><?= $data_cek['catatan_kabid']; ?></textarea>
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
                    <option><?= $data_cek['petugas']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_petugas" name="tgl_verif_petugas"
                    value="<?= $data_cek['tgl_verif_petugas']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_petugas" name="jam_verif_petugas"
                    value="<?= $data_cek['jam_verif_petugas']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_petugas'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_petugas" name="catatan_petugas"
                readonly><?= $data_cek['catatan_petugas']; ?></textarea>
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
                    <option><?= $data_cek['kepdinas']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kepdinas" name="tgl_verif_kepdinas"
                    value="<?= $data_cek['tgl_verif_kepdinas']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kepdinas" name="jam_verif_kepdinas"
                    value="<?= $data_cek['jam_verif_kepdinas']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kepdinas'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kepdinas" name="status_verif_kepdinas"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kepdinas" name="status_verif_kepdinas"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kepdinas" name="catatan_kepdinas"
                readonly><?= $data_cek['catatan_kepdinas']; ?></textarea>
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
                <input type="text" class="form-control" id="pemohon" name="pemohon" value="<?= $data_cek['pemohon']; ?>"
                    readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Hari/Tgl</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_pemohon" name="tgl_verif_pemohon"
                    value="<?= $data_cek['tgl_verif_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_pemohon" name="jam_verif_pemohon"
                    value="<?= $data_cek['jam_verif_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_pemohon'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_pemohon" name="catatan_pemohon"
                readonly><?= $data_cek['catatan_pemohon']; ?></textarea>
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
                    <option><?= $data_cek['arsip']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_arsip" name="tgl_verif_arsip"
                    value="<?= $data_cek['tgl_verif_arsip']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_arsip" name="jam_verif_arsip"
                    value="<?= $data_cek['jam_verif_arsip']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_arsip'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_arsip" name="catatan_arsip"
                readonly><?= $data_cek['catatan_arsip']; ?></textarea>
        </div>

        <div>
            <a href="?page=data-verif" title="Kembali" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

<?php 
    }elseif($data_cek['jenis_kepengurusan'] == 'AKTA PERKAWINAN'){
?>

<h3 class="text-center font-weight-bold"> LIHAT DATA PENGURUSAN <?= $data_cek['jenis_kepengurusan']; ?></h3>
<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title"><i class="fa fa-edit"></i> Biodata Pemohon
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" placeholder="Nama"
                    value="<?= $data_cek['nama_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIK Pemohon</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK"
                    value="<?= $data_cek['nik']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">TTL</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
                    value="<?= $data_cek['tempat_lahir']; ?>" readonly>
            </div>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                    value="<?= $data_cek['tgl_lahir']; ?>" placeholder="Tanggal Lahir" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" value="<?= $data_cek['jk']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Desa/Kelurahan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="<?= $data_cek['kelurahan']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                    value="<?= $data_cek['kecamatan']; ?>" placeholder="Kecamatan" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Permohonan</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_permohonan" name="tgl_permohonan"
                    value="<?= $data_cek['tgl_permohonan']; ?>" placeholder="Tanggal Permohonan" readonly>
            </div>
        </div>

        <label class="col-sm-2 col-form-label">Dokumen yang Diproses</label>
            <div class="form-check-inline">
                <?php if ($data_cek['dokumen_baru'] == 'Baru'): ?>
                <input class="form-check-input" type="checkbox" id="dokumen_baru"
                    name="dokumen_baru" value="Baru" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="dokumen_baru"
                    name="dokumen_baru" value="Baru">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Dokumen Baru
                </label>
            </div>
            <div class="form-check-inline">
                <?php if ($data_cek['penambahan_jiwa'] == 'Penambahan'): ?>
                <input class="form-check-input" type="checkbox" id="penambahan_jiwa"
                    name="penambahan_jiwa" value="Penambahan" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="penambahan_jiwa"
                    name="penambahan_jiwa" value="Penambahan">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck2">
                    Penambahan Jiwa
                </label>
            </div>
            <div class="form-check-inline">
                <?php if ($data_cek['perubahan_data'] == 'Perubahan'): ?>
                <input class="form-check-input" type="checkbox" id="perubahan_data"
                    name="perubahan_data" value="Perubahan" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="perubahan_data"
                    name="perubahan_data" value="Perubahan">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck3">
                    Perubahan Data
                </label>
            </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Petugas Pelayanan
        </h3>
    </div>

    <div class="card-body">
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc1'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc1" value="Y" checked>F.2-01
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc1" value="Y">F.2-01
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc2'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc2" value="Y" checked>F.2-02
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc2" value="Y">F.2-02
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc3'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc3" value="Y" checked>F.2-03
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc3" value="Y">F.2-03
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc4'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc4" value="Y" checked>F.2-04
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc4" value="Y">F.2-04
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc5'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc5" value="Y" checked>F.2-08
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc5" value="Y">F.2-08
                <?php endif ?>
            </label>
        </div>
        <br>

        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc6'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc6" value="Y" checked>F.2-09
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc6" value="Y">F.2-09
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc7'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc7" value="Y" checked>F.2-10
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc7" value="Y">F.2-10
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc8'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc8" value="Y" checked>F.2-11
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc8" value="Y">F.2-11
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc9'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc9" value="Y" checked>FC KTP Ortu
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc9" value="Y">FC KTP Ortu
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc10'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc10" value="Y" checked>FC KTP Saksi
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc10" value="Y">FC KTP Saksi
                <?php endif ?>
            </label>
        </div>
        <br>

        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc11'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc11" value="Y" checked>FC Akta Nikah
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc11" value="Y">FC Akta Nikah
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc12'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc12" value="Y" checked>Surat Bidan
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc12" value="Y">Surat Bidan
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc13'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc13" value="Y" checked>FC KK
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc13" value="Y">FC KK
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc14'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc14" value="Y" checked>Surat Kelahiran dari
                Kelurahan
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc14" value="Y">Surat Kelahiran dari Kelurahan
                <?php endif ?>
            </label>
        </div>
        <br><br>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas_pelayanan" id="petugas_pelayanan" value="<?= $data_cek['petugas_pelayanan']; ?>"
                    class="form-control">
                    <option><?= $data_cek['petugas_pelayanan']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_pelayanan" name="tgl_verif_pelayanan"
                    value="<?= $data_cek['tgl_verif_pelayanan']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_pelayanan" name="jam_verif_pelayanan"
                    value="<?= $data_cek['jam_verif_pelayanan']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_pelayanan'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_pelayanan" name="catatan_pelayanan"
                readonly><?= $data_cek['catatan_pelayanan']; ?></textarea>
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
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="kasi" id="kasi" class="form-control">
                    <option><?= $data_cek['kasi']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kasi" name="tgl_verif_kasi"
                    value="<?= $data_cek['tgl_verif_kasi']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kasi" name="jam_verif_kasi"
                    value="<?= $data_cek['jam_verif_kasi']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kasi'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kasi" name="catatan_kasi"
                readonly><?= $data_cek['catatan_kasi']; ?></textarea>
        </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Operator
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="operator" id="operator" class="form-control">
                    <option><?= $data_cek['operator']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_operator" name="tgl_verif_operator"
                    value="<?= $data_cek['tgl_verif_operator']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_operator" name="jam_verif_operator"
                    value="<?= $data_cek['jam_verif_operator']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_operator'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_operator" name="catatan_operator"
                readonly><?= $data_cek['catatan_operator']; ?></textarea>
        </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Kabid
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="kabid" id="kabid" class="form-control">
                    <option><?= $data_cek['kabid']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kabid" name="tgl_verif_kabid"
                    value="<?= $data_cek['tgl_verif_kabid']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kabid" name="jam_verif_kabid"
                    value="<?= $data_cek['jam_verif_kabid']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kabid'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kabid" name="status_verif_kabid"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kabid" name="status_verif_kabid"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kabid" name="catatan_kabid"
                readonly><?= $data_cek['catatan_kabid']; ?></textarea>
        </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Petugas Distribusi
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas" id="petugas" class="form-control">
                    <option><?= $data_cek['petugas']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_petugas" name="tgl_verif_petugas"
                    value="<?= $data_cek['tgl_verif_petugas']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_petugas" name="jam_verif_petugas"
                    value="<?= $data_cek['jam_verif_petugas']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_petugas'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_petugas" name="catatan_petugas"
                readonly><?= $data_cek['catatan_petugas']; ?></textarea>
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
                    <option><?= $data_cek['kepdinas']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kepdinas" name="tgl_verif_kepdinas"
                    value="<?= $data_cek['tgl_verif_kepdinas']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kepdinas" name="jam_verif_kepdinas"
                    value="<?= $data_cek['jam_verif_kepdinas']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kepdinas'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kepdinas" name="status_verif_kepdinas"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kepdinas" name="status_verif_kepdinas"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kepdinas" name="catatan_kepdinas"
                readonly><?= $data_cek['catatan_kepdinas']; ?></textarea>
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
                <input type="text" class="form-control" id="pemohon" name="pemohon" value="<?= $data_cek['pemohon']; ?>"
                    readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Hari/Tgl</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_pemohon" name="tgl_verif_pemohon"
                    value="<?= $data_cek['tgl_verif_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_pemohon" name="jam_verif_pemohon"
                    value="<?= $data_cek['jam_verif_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_pemohon'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_pemohon" name="catatan_pemohon"
                readonly><?= $data_cek['catatan_pemohon']; ?></textarea>
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
                    <option><?= $data_cek['arsip']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_arsip" name="tgl_verif_arsip"
                    value="<?= $data_cek['tgl_verif_arsip']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_arsip" name="jam_verif_arsip"
                    value="<?= $data_cek['jam_verif_arsip']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_arsip'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_arsip" name="catatan_arsip"
                readonly><?= $data_cek['catatan_arsip']; ?></textarea>
        </div>
        <div>
            <a href="?page=data-verif" title="Kembali" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
<?php 
    }elseif($data_cek['jenis_kepengurusan'] == 'AKTA PERCERAIAN'){
?>

<h3 class="text-center font-weight-bold"> LIHAT DATA PENGURUSAN <?= $data_cek['jenis_kepengurusan']; ?></h3>
<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title"><i class="fa fa-edit"></i> Biodata Pemohon
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" placeholder="Nama"
                    value="<?= $data_cek['nama_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIK Pemohon</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK"
                    value="<?= $data_cek['nik']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">TTL</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
                    value="<?= $data_cek['tempat_lahir']; ?>" readonly>
            </div>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                    value="<?= $data_cek['tgl_lahir']; ?>" placeholder="Tanggal Lahir" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" value="<?= $data_cek['jk']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Desa/Kelurahan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="<?= $data_cek['kelurahan']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                    value="<?= $data_cek['kecamatan']; ?>" placeholder="Kecamatan" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Permohonan</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_permohonan" name="tgl_permohonan"
                    value="<?= $data_cek['tgl_permohonan']; ?>" placeholder="Tanggal Permohonan" readonly>
            </div>
        </div>

        <label class="col-sm-2 col-form-label">Dokumen yang Diproses</label>
            <div class="form-check-inline">
                <?php if ($data_cek['dokumen_baru'] == 'Baru'): ?>
                <input class="form-check-input" type="checkbox" id="dokumen_baru"
                    name="dokumen_baru" value="Baru" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="dokumen_baru"
                    name="dokumen_baru" value="Baru">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Dokumen Baru
                </label>
            </div>
            <div class="form-check-inline">
                <?php if ($data_cek['penambahan_jiwa'] == 'Penambahan'): ?>
                <input class="form-check-input" type="checkbox" id="penambahan_jiwa"
                    name="penambahan_jiwa" value="Penambahan" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="penambahan_jiwa"
                    name="penambahan_jiwa" value="Penambahan">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck2">
                    Penambahan Jiwa
                </label>
            </div>
            <div class="form-check-inline">
                <?php if ($data_cek['perubahan_data'] == 'Perubahan'): ?>
                <input class="form-check-input" type="checkbox" id="perubahan_data"
                    name="perubahan_data" value="Perubahan" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="perubahan_data"
                    name="perubahan_data" value="Perubahan">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck3">
                    Perubahan Data
                </label>
            </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Petugas Pelayanan
        </h3>
    </div>

    <div class="card-body">
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc1'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc1" value="Y" checked>Putusan Pengadilan
                (Legalisir)
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc1" value="Y">Putusan Pengadilan (Legalisir)
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc2'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc2" value="Y" checked>FC KK

                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc2" value="Y">FC KK
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc3'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc3" value="Y" checked>FC KTP
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc3" value="Y">FC KTP
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc4'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc4" value="Y" checked>Akta Perkawinan
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc4" value="Y">Akta Perkawinan
                <?php endif ?>
            </label>
        </div>
        <br><br>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas_pelayanan" id="petugas_pelayanan" value="<?= $data_cek['petugas_pelayanan']; ?>"
                    class="form-control">
                    <option><?= $data_cek['petugas_pelayanan']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_pelayanan" name="tgl_verif_pelayanan"
                    value="<?= $data_cek['tgl_verif_pelayanan']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_pelayanan" name="jam_verif_pelayanan"
                    value="<?= $data_cek['jam_verif_pelayanan']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_pelayanan'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_pelayanan" name="catatan_pelayanan"
                readonly><?= $data_cek['catatan_pelayanan']; ?></textarea>
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
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="kasi" id="kasi" class="form-control">
                    <option><?= $data_cek['kasi']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kasi" name="tgl_verif_kasi"
                    value="<?= $data_cek['tgl_verif_kasi']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kasi" name="jam_verif_kasi"
                    value="<?= $data_cek['jam_verif_kasi']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kasi'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kasi" name="catatan_kasi"
                readonly><?= $data_cek['catatan_kasi']; ?></textarea>
        </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Operator
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="operator" id="operator" class="form-control">
                    <option><?= $data_cek['operator']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_operator" name="tgl_verif_operator"
                    value="<?= $data_cek['tgl_verif_operator']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_operator" name="jam_verif_operator"
                    value="<?= $data_cek['jam_verif_operator']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_operator'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_operator" name="catatan_operator"
                readonly><?= $data_cek['catatan_operator']; ?></textarea>
        </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Kabid
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="kabid" id="kabid" class="form-control">
                    <option><?= $data_cek['kabid']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kabid" name="tgl_verif_kabid"
                    value="<?= $data_cek['tgl_verif_kabid']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kabid" name="jam_verif_kabid"
                    value="<?= $data_cek['jam_verif_kabid']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kabid'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kabid" name="status_verif_kabid"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kabid" name="status_verif_kabid"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kabid" name="catatan_kabid"
                readonly><?= $data_cek['catatan_kabid']; ?></textarea>
        </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Petugas Distribusi
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas" id="petugas" class="form-control">
                    <option><?= $data_cek['petugas']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_petugas" name="tgl_verif_petugas"
                    value="<?= $data_cek['tgl_verif_petugas']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_petugas" name="jam_verif_petugas"
                    value="<?= $data_cek['jam_verif_petugas']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_petugas'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_petugas" name="catatan_petugas"
                readonly><?= $data_cek['catatan_petugas']; ?></textarea>
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
                    <option><?= $data_cek['kepdinas']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kepdinas" name="tgl_verif_kepdinas"
                    value="<?= $data_cek['tgl_verif_kepdinas']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kepdinas" name="jam_verif_kepdinas"
                    value="<?= $data_cek['jam_verif_kepdinas']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kepdinas'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kepdinas" name="status_verif_kepdinas"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kepdinas" name="status_verif_kepdinas"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kepdinas" name="catatan_kepdinas"
                readonly><?= $data_cek['catatan_kepdinas']; ?></textarea>
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
                <input type="text" class="form-control" id="pemohon" name="pemohon" value="<?= $data_cek['pemohon']; ?>"
                    readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Hari/Tgl</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_pemohon" name="tgl_verif_pemohon"
                    value="<?= $data_cek['tgl_verif_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_pemohon" name="jam_verif_pemohon"
                    value="<?= $data_cek['jam_verif_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_pemohon'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_pemohon" name="catatan_pemohon"
                readonly><?= $data_cek['catatan_pemohon']; ?></textarea>
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
                    <option><?= $data_cek['arsip']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_arsip" name="tgl_verif_arsip"
                    value="<?= $data_cek['tgl_verif_arsip']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_arsip" name="jam_verif_arsip"
                    value="<?= $data_cek['jam_verif_arsip']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_arsip'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_arsip" name="catatan_arsip"
                readonly><?= $data_cek['catatan_arsip']; ?></textarea>
        </div>

        <div>
            <a href="?page=data-verif" title="Kembali" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

<?php 
    }elseif($data_cek['jenis_kepengurusan'] == 'SKPD'){
?>

<h3 class="text-center font-weight-bold"> LIHAT DATA PENGURUSAN <?= $data_cek['jenis_kepengurusan']; ?></h3>
<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title"><i class="fa fa-edit"></i> Biodata Pemohon
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" placeholder="Nama"
                    value="<?= $data_cek['nama_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIK Pemohon</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK"
                    value="<?= $data_cek['nik']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">TTL</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
                    value="<?= $data_cek['tempat_lahir']; ?>" readonly>
            </div>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                    value="<?= $data_cek['tgl_lahir']; ?>" placeholder="Tanggal Lahir" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" value="<?= $data_cek['jk']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Desa/Kelurahan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="<?= $data_cek['kelurahan']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kecamatan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                    value="<?= $data_cek['kecamatan']; ?>" placeholder="Kecamatan" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal Permohonan</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_permohonan" name="tgl_permohonan"
                    value="<?= $data_cek['tgl_permohonan']; ?>" placeholder="Tanggal Permohonan" readonly>
            </div>
        </div>

        <label class="col-sm-2 col-form-label">Dokumen yang Diproses</label>
            <div class="form-check-inline">
                <?php if ($data_cek['dokumen_baru'] == 'Baru'): ?>
                <input class="form-check-input" type="checkbox" id="dokumen_baru"
                    name="dokumen_baru" value="Baru" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="dokumen_baru"
                    name="dokumen_baru" value="Baru">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Dokumen Baru
                </label>
            </div>
            <div class="form-check-inline">
                <?php if ($data_cek['penambahan_jiwa'] == 'Penambahan'): ?>
                <input class="form-check-input" type="checkbox" id="penambahan_jiwa"
                    name="penambahan_jiwa" value="Penambahan" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="penambahan_jiwa"
                    name="penambahan_jiwa" value="Penambahan">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck2">
                    Penambahan Jiwa
                </label>
            </div>
            <div class="form-check-inline">
                <?php if ($data_cek['perubahan_data'] == 'Perubahan'): ?>
                <input class="form-check-input" type="checkbox" id="perubahan_data"
                    name="perubahan_data" value="Perubahan" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="perubahan_data"
                    name="perubahan_data" value="Perubahan">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck3">
                    Perubahan Data
                </label>
            </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Petugas Pelayanan
        </h3>
    </div>

    <div class="card-body">
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc1'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc1" value="Y" checked>F.1-08
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc1" value="Y">F.1-08
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc2'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc2" value="Y" checked>F.1-09
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc2" value="Y">F.1-09
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc3'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc3" value="Y" checked>F.1-10
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc3" value="Y">F.1-10
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc4'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc4" value="Y" checked>Copy Akta Kelahiran
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc4" value="Y">Copy Akta Kelahiran
                <?php endif ?>
            </label>
        </div>
        <br>

        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc5'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc5" value="Y" checked>Kartu Keluarga
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc5" value="Y">Kartu Keluarga
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc6'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc6" value="Y" checked>Copy Akta Nikah/Cerai
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc6" value="Y">Copy Akta Nikah/Cerai
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc7'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc7" value="Y" checked>KTP Asli
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc7" value="Y">KTP Asli
                <?php endif ?>
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <?php if ($data_dok['doc8'] == 'Y'): ?>
                <input type="checkbox" class="form-check-input" name="doc8" value="Y" checked>Lainnya
                <?php else: ?>
                <input type="checkbox" class="form-check-input" name="doc8" value="Y">Lainnya
                <?php endif ?>
            </label>
        </div>
        <br><br>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas_pelayanan" id="petugas_pelayanan" value="<?= $data_cek['petugas_pelayanan']; ?>"
                    class="form-control">
                    <option><?= $data_cek['petugas_pelayanan']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_pelayanan" name="tgl_verif_pelayanan"
                    value="<?= $data_cek['tgl_verif_pelayanan']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_pelayanan" name="jam_verif_pelayanan"
                    value="<?= $data_cek['jam_verif_pelayanan']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_pelayanan'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pelayanan" name="status_verif_pelayanan"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_pelayanan" name="catatan_pelayanan"
                readonly><?= $data_cek['catatan_pelayanan']; ?></textarea>
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
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="kasi" id="kasi" class="form-control">
                    <option><?= $data_cek['kasi']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kasi" name="tgl_verif_kasi"
                    value="<?= $data_cek['tgl_verif_kasi']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kasi" name="jam_verif_kasi"
                    value="<?= $data_cek['jam_verif_kasi']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kasi'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kasi" name="status_verif_kasi"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kasi" name="catatan_kasi"
                readonly><?= $data_cek['catatan_kasi']; ?></textarea>
        </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Operator
        </h3>
    </div>

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="operator" id="operator" class="form-control">
                    <option><?= $data_cek['operator']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_operator" name="tgl_verif_operator"
                    value="<?= $data_cek['tgl_verif_operator']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_operator" name="jam_verif_operator"
                    value="<?= $data_cek['jam_verif_operator']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_operator'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_operator" name="status_verif_operator"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_operator" name="catatan_operator"
                readonly><?= $data_cek['catatan_operator']; ?></textarea>
        </div>
    </div>
</div>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Petugas Distribusi
        </h3>
    </div>

    <div class="card-body">
        <h6><b>Memasukkan No. Kendali</b></h6>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas" id="petugas" class="form-control">
                    <option><?= $data_cek['petugas']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_petugas" name="tgl_verif_petugas"
                    value="<?= $data_cek['tgl_verif_petugas']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_petugas" name="jam_verif_petugas"
                    value="<?= $data_cek['jam_verif_petugas']; ?>" readonly>
            </div>
        </div>

        <br>
        <h6><b>Serahkan ke Pemohon</b></h6>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-4">
                <select name="petugas2" id="petugas2" class="form-control">
                    <option><?= $data_cek['petugas2']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_petugas2" name="tgl_verif_petugas2"
                    value="<?= $data_cek['tgl_verif_petugas2']; ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_petugas2" name="jam_verif_petugas2"
                    value="<?= $data_cek['jam_verif_petugas2']; ?>" readonly>
            </div>
        </div>
        <div class="form-check">
            <?php if ($data_cek['status_verif_petugas'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_petugas" name="status_verif_petugas"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_petugas" name="catatan_petugas"
                readonly><?= $data_cek['catatan_petugas']; ?></textarea>
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
                    <option><?= $data_cek['kepdinas']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_kepdinas" name="tgl_verif_kepdinas"
                    value="<?= $data_cek['tgl_verif_kepdinas']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_kepdinas" name="jam_verif_kepdinas"
                    value="<?= $data_cek['jam_verif_kepdinas']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_kepdinas'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kepdinas" name="status_verif_kepdinas"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_kepdinas" name="status_verif_kepdinas"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_kepdinas" name="catatan_kepdinas"
                readonly><?= $data_cek['catatan_kepdinas']; ?></textarea>
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
                <input type="text" class="form-control" id="pemohon" name="pemohon" value="<?= $data_cek['pemohon']; ?>"
                    readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Hari/Tgl</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_pemohon" name="tgl_verif_pemohon"
                    value="<?= $data_cek['tgl_verif_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_pemohon" name="jam_verif_pemohon"
                    value="<?= $data_cek['jam_verif_pemohon']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_pemohon'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_pemohon" name="status_verif_pemohon"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_pemohon" name="catatan_pemohon"
                readonly><?= $data_cek['catatan_pemohon']; ?></textarea>
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
                    <option><?= $data_cek['arsip']; ?></option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_verif_arsip" name="tgl_verif_arsip"
                    value="<?= $data_cek['tgl_verif_arsip']; ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jam</label>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="jam_verif_arsip" name="jam_verif_arsip"
                    value="<?= $data_cek['jam_verif_arsip']; ?>" readonly>
            </div>
        </div>

        <div class="form-check">
            <?php if ($data_cek['status_verif_arsip'] == 'Terverifikasi'): ?>
            <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip"
                value="Terverifikasi" checked>
            <!--jika belum login-->
            <?php else: ?>
            <input class="form-check-input" type="checkbox" id="status_verif_arsip" name="status_verif_arsip"
                value="Terverifikasi">
            <?php endif ?>
            <label class="form-check-label font-weight-bold" for="defaultCheck1">
                Terverifikasi
            </label>
        </div>
        <br>

        <div class="form-group">
            <label for="comment">Catatan:</label>
            <textarea class="form-control" rows="1" id="catatan_arsip" name="catatan_arsip"
                readonly><?= $data_cek['catatan_arsip']; ?></textarea>
        </div>

        <div>
            <a href="?page=data-verif" title="Kembali" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>


<?php 
    }
?>