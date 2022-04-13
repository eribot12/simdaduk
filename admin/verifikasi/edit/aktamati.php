<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" id="id" name="id" value="<?= $_GET['kode']; ?>">
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
                        value="<?= $data_cek['nama_pemohon']; ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIK Pemohon</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK"
                        value="<?= $data_cek['nik']; ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">TTL</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                        placeholder="Tempat Lahir" value="<?= $data_cek['tempat_lahir']; ?>" required>
                </div>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                        value="<?= $data_cek['tgl_lahir']; ?>" placeholder="Tanggal Lahir" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-3">
                    <select name="jk" id="jk" class="form-control" value="<?= $data_cek['jk']; ?>">
                        <option><?= $data_cek['jk']; ?></option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Desa/Kelurahan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Desa/Kelurahan"
                        value="<?= $data_cek['kelurahan']; ?>" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kecamatan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                        value="<?= $data_cek['kecamatan']; ?>" placeholder="Kecamatan" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Permohonan</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="tgl_permohonan" name="tgl_permohonan"
                        value="<?= $data_cek['tgl_permohonan']; ?>" placeholder="Tanggal Permohonan" required>
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
                    <select name="petugas_pelayanan" id="petugas_pelayanan"
                        value="<?= $data_cek['petugas_pelayanan']; ?>" class="form-control">
                        <option><?= $data_cek['petugas_pelayanan']; ?></option>
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
                        value="<?= $data_cek['tgl_verif_pelayanan']; ?>" placeholder="Tanggal">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jam</label>
                <div class="col-sm-6">

                    <input type="time" class="form-control" id="jam_verif_pelayanan" name="jam_verif_pelayanan"
                        value="<?= $data_cek['jam_verif_pelayanan']; ?>" class="form-control">
                </div>
            </div>

            <div class="form-check">
                <?php if ($data_cek['status_verif_pelayanan'] == 'Terverifikasi'): ?>
                <input class="form-check-input" type="checkbox" id="status_verif_pelayanan"
                    name="status_verif_pelayanan" value="Terverifikasi" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="status_verif_pelayanan"
                    name="status_verif_pelayanan" value="Terverifikasi">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Terverifikasi
                </label>
            </div>
            <br>

            <div class="form-group">
                <label for="comment">Catatan:</label>
                <textarea class="form-control" rows="1" id="catatan_pelayanan"
                    name="catatan_pelayanan"><?= $data_cek['catatan_pelayanan']; ?></textarea>
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
                    <input type="date" class="form-control" id="tgl_verif_kasi" name="tgl_verif_kasi"
                        value="<?= $data_cek['tgl_verif_kasi']; ?>" placeholder="Tanggal">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jam</label>
                <div class="col-sm-6">
                    <input type="time" class="form-control" id="jam_verif_kasi" name="jam_verif_kasi"
                        value="<?= $data_cek['jam_verif_kasi']; ?>" class="form-control">
                </div>
            </div>

            <br>
            <h6><b>Terima & Serahkan ke Kabid</b></h6>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-4">
                    <select name="kasi2" id="kasi2" class="form-control">
                        <option><?= $data_cek['kasi2']; ?></option>
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
                    <input type="date" class="form-control" id="tgl_verif_kasi2" name="tgl_verif_kasi2"
                        value="<?= $data_cek['tgl_verif_kasi2']; ?>" placeholder="Tanggal">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jam</label>
                <div class="col-sm-6">
                    <input type="time" class="form-control" id="jam_verif_kasi2" name="jam_verif_kasi2"
                        value="<?= $data_cek['jam_verif_kasi2']; ?>" class="form-control">
                </div>
            </div>

            <div class="form-check">
                <?php if ($data_cek['status_verif_kasi'] == 'Terverifikasi'): ?>
                <input class="form-check-input" type="checkbox" id="status_verif_kasi"
                    name="status_verif_kasi" value="Terverifikasi" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="status_verif_kasi"
                    name="status_verif_kasi" value="Terverifikasi">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Terverifikasi
                </label>
            </div>
            <br>

            <div class="form-group">
                <label for="comment">Catatan:</label>
                <textarea class="form-control" rows="1" id="catatan_kasi"
                    name="catatan_kasi"><?= $data_cek['catatan_kasi']; ?></textarea>
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
                    <input type="date" class="form-control" id="tgl_verif_operator" name="tgl_verif_operator"
                        value="<?= $data_cek['tgl_verif_operator']; ?>" placeholder="Tanggal">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jam</label>
                <div class="col-sm-6">
                    <input type="time" class="form-control" id="jam_verif_operator" name="jam_verif_operator"
                        value="<?= $data_cek['jam_verif_operator']; ?>" class="form-control">
                </div>
            </div>

            <div class="form-check">
                <?php if ($data_cek['status_verif_operator'] == 'Terverifikasi'): ?>
                <input class="form-check-input" type="checkbox" id="status_verif_operator"
                    name="status_verif_operator" value="Terverifikasi" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="status_verif_operator"
                    name="status_verif_operator" value="Terverifikasi">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Terverifikasi
                </label>
            </div>
            <br>

            <div class="form-group">
                <label for="comment">Catatan:</label>
                <textarea class="form-control" rows="1" id="catatan_operator"
                    name="catatan_operator"><?= $data_cek['catatan_operator']; ?></textarea>
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
                    <input type="date" class="form-control" id="tgl_verif_kabid" name="tgl_verif_kabid"
                        value="<?= $data_cek['tgl_verif_kabid']; ?>" placeholder="Tanggal">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jam</label>
                <div class="col-sm-6">
                    <input type="time" class="form-control" id="jam_verif_kabid" name="jam_verif_kabid"
                        value="<?= $data_cek['jam_verif_kabid']; ?>" class="form-control">
                </div>
            </div>

            <div class="form-check">
                <?php if ($data_cek['status_verif_kabid'] == 'Terverifikasi'): ?>
                <input class="form-check-input" type="checkbox" id="status_verif_kabid"
                    name="status_verif_kabid" value="Terverifikasi" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="status_verif_kabid"
                    name="status_verif_kabid" value="Terverifikasi">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Terverifikasi
                </label>
            </div>
            <br>

            <div class="form-group">
                <label for="comment">Catatan:</label>
                <textarea class="form-control" rows="1" id="catatan_kabid"
                    name="catatan_kabid"><?= $data_cek['catatan_kabid']; ?></textarea>
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
                    <input type="date" class="form-control" id="tgl_verif_petugas" name="tgl_verif_petugas"
                        value="<?= $data_cek['tgl_verif_petugas']; ?>" placeholder="Tanggal">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jam</label>
                <div class="col-sm-6">
                    <input type="time" class="form-control" id="jam_verif_petugas" name="jam_verif_petugas"
                        value="<?= $data_cek['jam_verif_petugas']; ?>" class="form-control">
                </div>
            </div>

            <div class="form-check">
                <?php if ($data_cek['status_verif_petugas'] == 'Terverifikasi'): ?>
                <input class="form-check-input" type="checkbox" id="status_verif_petugas"
                    name="status_verif_petugas" value="Terverifikasi" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="status_verif_petugas"
                    name="status_verif_petugas" value="Terverifikasi">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Terverifikasi
                </label>
            </div>
            <br>

            <div class="form-group">
                <label for="comment">Catatan:</label>
                <textarea class="form-control" rows="1" id="catatan_petugas"
                    name="catatan_petugas"><?= $data_cek['catatan_petugas']; ?></textarea>
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
                        <option>1</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="tgl_verif_kepdinas" name="tgl_verif_kepdinas"
                        value="<?= $data_cek['tgl_verif_kepdinas']; ?>" placeholder="Tanggal">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jam</label>
                <div class="col-sm-6">
                    <input type="time" class="form-control" id="jam_verif_kepdinas" name="jam_verif_kepdinas"
                        value="<?= $data_cek['jam_verif_kepdinas']; ?>" class="form-control">
                </div>
            </div>

            <div class="form-check">
                <?php if ($data_cek['status_verif_kepdinas'] == 'Terverifikasi'): ?>
                <input class="form-check-input" type="checkbox" id="status_verif_kepdinas"
                    name="status_verif_kepdinas" value="Terverifikasi" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="status_verif_kepdinas"
                    name="status_verif_kepdinas" value="Terverifikasi">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Terverifikasi
                </label>
            </div>
            <br>

            <div class="form-group">
                <label for="comment">Catatan:</label>
                <textarea class="form-control" rows="1" id="catatan_kepdinas"
                    name="catatan_kepdinas"><?= $data_cek['catatan_kepdinas']; ?></textarea>
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
                    <input type="text" class="form-control" id="pemohon" name="pemohon" placeholder="Nama"
                        value="<?= $data_cek['pemohon']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Hari/Tgl</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="tgl_verif_pemohon" name="tgl_verif_pemohon"
                        value="<?= $data_cek['tgl_verif_pemohon']; ?>" placeholder="Tanggal">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jam</label>
                <div class="col-sm-6">
                    <input type="time" class="form-control" id="jam_verif_pemohon" name="jam_verif_pemohon"
                        value="<?= $data_cek['jam_verif_pemohon']; ?>" class="form-control">
                </div>
            </div>

            <div class="form-check">
                <?php if ($data_cek['status_verif_pemohon'] == 'Terverifikasi'): ?>
                <input class="form-check-input" type="checkbox" id="status_verif_pemohon"
                    name="status_verif_pemohon" value="Terverifikasi" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="status_verif_pemohon"
                    name="status_verif_pemohon" value="Terverifikasi">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Terverifikasi
                </label>
            </div>
            <br>

            <div class="form-group">
                <label for="comment">Catatan:</label>
                <textarea class="form-control" rows="1" id="catatan_pemohon"
                    name="catatan_pemohon"><?= $data_cek['catatan_pemohon']; ?></textarea>
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
                    <input type="date" class="form-control" id="tgl_verif_arsip" name="tgl_verif_arsip"
                        value="<?= $data_cek['tgl_verif_arsip']; ?>" placeholder="Tanggal">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jam</label>
                <div class="col-sm-6">
                    <input type="time" class="form-control" id="jam_verif_arsip" name="jam_verif_arsip"
                        value="<?= $data_cek['jam_verif_arsip']; ?>" class="form-control">
                </div>
            </div>

            <div class="form-check">
                <?php if ($data_cek['status_verif_arsip'] == 'Terverifikasi'): ?>
                <input class="form-check-input" type="checkbox" id="status_verif_arsip"
                    name="status_verif_arsip" value="Terverifikasi" checked>
                <!--jika belum login-->
                <?php else: ?>
                <input class="form-check-input" type="checkbox" id="status_verif_arsip"
                    name="status_verif_arsip" value="Terverifikasi">
                <?php endif ?>
                <label class="form-check-label font-weight-bold" for="defaultCheck1">
                    Terverifikasi
                </label>
            </div>
            <br>

            <div class="form-group">
                <label for="comment">Catatan:</label>
                <textarea class="form-control" rows="1" id="catatan_arsip"
                    name="catatan_arsip"><?= $data_cek['catatan_arsip']; ?></textarea>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <input type="submit" name="UbahMati" value="Simpan" class="btn btn-info">
        <a href="?page=data-verif" title="Kembali" class="btn btn-secondary">Batal</a>
    </div>
</form>