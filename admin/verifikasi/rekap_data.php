<?php
	$tgl = date("Y-m-d");
	if (isset($_POST['submit'])) {
		$tgl = $_POST['hari'];
	}
?>

<div class="col-3 ml-auto">
    <form method="post" action="" class="form-inline">
        <input type="date" class="form-control" id="hari" name="hari" value="<?= $tgl;?>">
        <input type="submit" name="submit" value="Ganti" class="btn btn-primary ml-1">
    </form>
</div>
<br>

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-table"></i> Data Kepengurusan
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <br>
            <table id="example1" class="table table-warning table-hover">
                <thead>
                    <tr>
                        <th>Tanggal Permohonan</th>
                        <th>Nama Pemohon</th>
                        <th>NIK</th>
                        <th>TTL</th>
                        <th>Jenis Kelamin</th>
                        <th>Desa/Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Jenis Pengurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $jenis = $_GET['jenis'];
                        switch ($jenis) {
                        case '1':
                            $type = 'KTP'; break;
                        case '2':
                            $type = 'KK'; break;
                        case '3':
                            $type = 'AKTA LAHIR'; break;
                        case '4':
                            $type = 'AKTA MATI'; break;
                        case '5':
                            $type = 'AKTA PERKAWINAN'; break;
                        case '6':
                            $type = 'AKTA CERAI'; break;
                        case '7':
                            $type = 'KIA'; break;
                        case '8':
                            $type = 'SKPD'; break;
                        }
                        $no = 1;
                        $sql = $koneksi->query("SELECT * from tabel_verifikasi WHERE jenis_kepengurusan = '$type' AND tgl_permohonan = '$tgl' ORDER BY tgl_permohonan DESC");
                        while ($data = $sql->fetch_assoc()) {
                        ?>
                    <tr>
                        <td>
                            <?php echo $data['tgl_permohonan']; ?>
                        </td>
                        <td>
                            <?php echo $data['nama_pemohon']; ?>
                        </td>
                        <td>
                            <?php echo $data['nik']; ?>
                        </td>
                        <td>
                            <?php echo $data['tempat_lahir']. ", ".$data['tgl_lahir']; ?>
                        </td>
                        <td>
                            <?php echo $data['jk']; ?>
                        </td>
                        <td>
                            <?php echo $data['kelurahan']; ?>
                        </td>
                        <td>
                            <?php echo $data['kecamatan']; ?>
                        </td>
                        <td>
                            <?php echo $data['jenis_kepengurusan']; ?>
                        </td>
                        <td>
                            <a href="?page=view-data&kode=<?php echo $data['id_kendali']; ?>" title="Ubah"
                                class="btn btn-warning btn-block btn-sm mt-0">
                                <i class="fas fa-eye"></i>
                            </a>

                            <a href="?page=edit-data&kode=<?php echo $data['id_kendali']; ?>" title="Ubah"
                                class="btn btn-success btn-block btn-sm mt-1">
                                <i class="fa fa-edit"></i>
                            </a>

                            <a href="?page=del-data&kode=<?php echo $data['id_kendali']; ?>"
                                onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus"
                                class="btn btn-danger btn-block btn-sm mt-1">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                    <?php
            }
            ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->