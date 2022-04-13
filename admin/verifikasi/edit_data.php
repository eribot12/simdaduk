<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tabel_verifikasi WHERE id_kendali='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);

        $sql_dok = "SELECT * FROM verif_dokumen WHERE id_kendali='".$_GET['kode']."'";
        $query_dok = mysqli_query($koneksi, $sql_dok);
        $data_dok = mysqli_fetch_array($query_dok,MYSQLI_BOTH);
    }
?>

<h3 class="text-center font-weight-bold"> UBAH DATA PENGURUSAN <?= $data_cek['jenis_kepengurusan']; ?></h3>

<?php
if($data_cek['jenis_kepengurusan'] == 'KK'){
    include "edit/kk.php";
} elseif($data_cek['jenis_kepengurusan'] == 'KTP'){
    include "edit/ktp.php";
} elseif($data_cek['jenis_kepengurusan'] == 'KIA'){
    include "edit/kia.php";
} elseif($data_cek['jenis_kepengurusan'] == 'AKTA LAHIR'){
    include "edit/aktalahir.php";
} elseif($data_cek['jenis_kepengurusan'] == 'AKTA MATI'){
    include "edit/aktamati.php";
} elseif($data_cek['jenis_kepengurusan'] == 'AKTA PERKAWINAN'){
    include "edit/aktakawin.php";
} elseif($data_cek['jenis_kepengurusan'] == 'AKTA PERCERAIAN'){
    include "edit/aktacerai.php";
} elseif($data_cek['jenis_kepengurusan'] == 'SKPD'){
    include "edit/skpd.php";
}
?>

<?php

    if (isset ($_POST['UbahKK'])){
        $nama_pemohon = $_POST['nama_pemohon'];
        $nik = $_POST['nik'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];
        $kelurahan = $_POST['kelurahan'];
        $kecamatan = $_POST['kecamatan'];
        $tgl_permohonan = $_POST['tgl_permohonan'];
        $dokumen_baru = $_POST['dokumen_baru'];
        $penambahan_jiwa = $_POST['penambahan_jiwa'];
        $perubahan_data = $_POST['perubahan_data'];

        $petugas_pelayanan = $_POST['petugas_pelayanan'];
        $tgl_verif_pelayanan = $_POST['tgl_verif_pelayanan'];
        $jam_verif_pelayanan = $_POST['jam_verif_pelayanan'];
        $status_verif_pelayanan = $_POST['status_verif_pelayanan'];
        $catatan_pelayanan = $_POST['catatan_pelayanan'];

        $kasi =  $_POST['kasi'];
        $tgl_verif_kasi = $_POST['tgl_verif_kasi'];
        $jam_verif_kasi = $_POST['jam_verif_kasi'];
        $status_verif_kasi =  $_POST['status_verif_kasi'];
        $catatan_kasi = $_POST['catatan_kasi'];

        $operator =  $_POST['operator'];
        $tgl_verif_operator = $_POST['tgl_verif_operator'];
        $jam_verif_operator = $_POST['jam_verif_operator'];
        $operator2 =  $_POST['operator2'];
        $tgl_verif_operator2 = $_POST['tgl_verif_operator2'];
        $jam_verif_operator2 = $_POST['jam_verif_operator2'];
        $status_verif_operator =  $_POST['status_verif_operator'];
        $catatan_operator = $_POST['catatan_operator'];

        $kabid = $_POST['kabid'];
        $tgl_verif_kabid = $_POST['tgl_verif_kabid'];
        $jam_verif_kabid = $_POST['jam_verif_kabid'];
        $status_verif_kabid =  $_POST['status_verif_kabid'];
        $catatan_kabid = $_POST['catatan_kabid'];

        $petugas = $_POST['petugas'];
        $tgl_verif_petugas = $_POST['tgl_verif_petugas'];
        $jam_verif_petugas = $_POST['jam_verif_petugas'];
        $petugas2 = $_POST['petugas2'];
        $tgl_verif_petugas2 = $_POST['tgl_verif_petugas2'];
        $jam_verif_petugas2 = $_POST['jam_verif_petugas2'];
        $status_verif_petugas =  $_POST['status_verif_petugas'];
        $catatan_petugas = $_POST['catatan_petugas'];

        $kepdinas = $_POST['kepdinas'];
        $tgl_verif_kepdinas = $_POST['tgl_verif_kepdinas'];
        $jam_verif_kepdinas = $_POST['jam_verif_kepdinas'];
        $status_verif_kepdinas =  $_POST['status_verif_kepdinas'];
        $catatan_kepdinas =  $_POST['catatan_kepdinas'];

        $pemohon =  $_POST['pemohon'];
        $tgl_verif_pemohon = $_POST['tgl_verif_pemohon'];
        $jam_verif_pemohon = $_POST['jam_verif_pemohon'];
        $status_verif_pemohon =  $_POST['status_verif_pemohon'];
        $catatan_pemohon = $_POST['catatan_pemohon'];

        $arsip = $_POST['arsip'];
        $tgl_verif_arsip = $_POST['tgl_verif_arsip'];
        $jam_verif_arsip = $_POST['jam_verif_arsip'];
        $status_verif_arsip =  $_POST['status_verif_arsip'];
        $catatan_arsip = $_POST['catatan_arsip'];

        $jenis_kepengurusan = $data_cek['jenis_kepengurusan'];
        $id = $_POST['id'];

        $sql_ubah = "UPDATE tabel_verifikasi SET nama_pemohon = '$nama_pemohon', nik = '$nik', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', jk = '$jk', kelurahan = '$kelurahan', kecamatan = '$kecamatan', tgl_permohonan = '$tgl_permohonan', dokumen_baru = '$dokumen_baru', penambahan_jiwa = '$penambahan_jiwa', perubahan_data = '$perubahan_data', petugas_pelayanan = '$petugas_pelayanan', tgl_verif_pelayanan = '$tgl_verif_pelayanan', jam_verif_pelayanan = '$jam_verif_pelayanan', status_verif_pelayanan = '$status_verif_pelayanan', catatan_pelayanan = '$catatan_pelayanan', kasi = '$kasi', tgl_verif_kasi = '$tgl_verif_kasi', jam_verif_kasi = '$jam_verif_kasi', status_verif_kasi = '$status_verif_kasi', catatan_kasi = '$catatan_kasi', operator = '$operator', tgl_verif_operator = '$tgl_verif_operator', jam_verif_operator = '$jam_verif_operator', operator2 = '$operator2', tgl_verif_operator2 = '$tgl_verif_operator2', jam_verif_operator2 = '$jam_verif_operator2', status_verif_operator = '$status_verif_operator', catatan_operator = '$catatan_operator', kabid = '$kabid', tgl_verif_kabid = '$tgl_verif_kabid', jam_verif_kabid = '$jam_verif_kabid', status_verif_kabid = '$status_verif_kabid', catatan_kabid = '$catatan_kabid', petugas = '$petugas', tgl_verif_petugas = '$tgl_verif_petugas', jam_verif_petugas = '$jam_verif_petugas', petugas2 = '$petugas2', tgl_verif_petugas2 = '$tgl_verif_petugas2', jam_verif_petugas2 = '$jam_verif_petugas2', status_verif_petugas = '$status_verif_petugas', catatan_petugas = '$catatan_petugas', kepdinas = '$kepdinas', tgl_verif_kepdinas = '$tgl_verif_kepdinas', jam_verif_kepdinas = '$jam_verif_kepdinas', status_verif_kepdinas = '$status_verif_kepdinas', catatan_kepdinas = '$catatan_kepdinas', pemohon = '$pemohon', tgl_verif_pemohon = '$tgl_verif_pemohon', jam_verif_pemohon = '$jam_verif_pemohon', status_verif_pemohon = '$status_verif_pemohon', catatan_pemohon = '$catatan_pemohon', arsip = '$arsip', tgl_verif_arsip = '$tgl_verif_arsip', jam_verif_arsip = '$tgl_verif_arsip', status_verif_arsip = '$status_verif_arsip', catatan_arsip = '$catatan_arsip', jenis_kepengurusan = '$jenis_kepengurusan' WHERE id_kendali = $id";

        $query_ubah = mysqli_query($koneksi, $sql_ubah);

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
        $doc8 = '';
        if(isset($_POST['doc8'])){
          $doc8 =  $_POST['doc8'];
        }
        $doc9 = '';
        if(isset($_POST['doc9'])){
          $doc9 =  $_POST['doc9'];
        }
        $doc10 = '';
        if(isset($_POST['doc10'])){
          $doc10 =  $_POST['doc10'];
        }
        $doc11 = '';
        if(isset($_POST['doc11'])){
          $doc11 =  $_POST['doc11'];
        }
        $doc12 = '';
        if(isset($_POST['doc12'])){
          $doc12 =  $_POST['doc12'];
        }

        $sql_ubah = "UPDATE verif_dokumen SET doc1 = '$doc1', doc2 = '$doc2', doc3 = '$doc3', doc4 = '$doc4', doc5 = '$doc5', doc6 = '$doc6', doc7 = '$doc7', doc8 = '$doc8', doc9 = '$doc9', doc10 = '$doc10', doc11 = '$doc11', doc12 = '$doc12'";

        $query_ubah = mysqli_query($koneksi, $sql_ubah);

        if ($query_ubah) {
            echo "<script>
          Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = 'index.php?page=data-verif';
            }
          })</script>";
          }else{
          echo "<script>
          Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = 'index.php?page=data-verif';
            }
          })</script>";
        }
    }elseif (isset ($_POST['UbahKTP'])){
        $nama_pemohon = $_POST['nama_pemohon'];
        $nik = $_POST['nik'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];
        $kelurahan = $_POST['kelurahan'];
        $kecamatan = $_POST['kecamatan'];
        $tgl_permohonan = $_POST['tgl_permohonan'];
        $dokumen_baru = $_POST['dokumen_baru'];
        $penambahan_jiwa = $_POST['penambahanjiwaa'];
        $perubahan_data = $_POST['perubahan_data'];

        $petugas_pelayanan = $_POST['petugas_pelayanan'];
        $tgl_verif_pelayanan = $_POST['tgl_verif_pelayanan'];
        $jam_verif_pelayanan = $_POST['jam_verif_pelayanan'];
        $status_verif_pelayanan = $_POST['status_verif_pelayanan'];
        $catatan_pelayanan = $_POST['catatan_pelayanan'];

        $kasi =  $_POST['kasi'];
        $tgl_verif_kasi = $_POST['tgl_verif_kasi'];
        $jam_verif_kasi = $_POST['jam_verif_kasi'];
        $status_verif_kasi =  $_POST['status_verif_kasi'];
        $catatan_kasi = $_POST['catatan_kasi'];

        $operator =  $_POST['operator'];
        $tgl_verif_operator = $_POST['tgl_verif_operator'];
        $jam_verif_operator = $_POST['jam_verif_operator'];
        $status_verif_operator =  $_POST['status_verif_operator'];
        $catatan_operator = $_POST['catatan_operator'];

        $petugas = $_POST['petugas'];
        $tgl_verif_petugas = $_POST['tgl_verif_petugas'];
        $jam_verif_petugas = $_POST['jam_verif_petugas'];
        $petugas2 = $_POST['petugas2'];
        $tgl_verif_petugas2 = $_POST['tgl_verif_petugas2'];
        $jam_verif_petugas2 = $_POST['jam_verif_petugas2'];
        $status_verif_petugas =  $_POST['status_verif_petugas'];
        $catatan_petugas = $_POST['catatan_petugas'];

        $pemohon =  $_POST['pemohon'];
        $tgl_verif_pemohon = $_POST['tgl_verif_pemohon'];
        $jam_verif_pemohon = $_POST['jam_verif_pemohon'];
        $status_verif_pemohon =  $_POST['status_verif_pemohon'];
        $catatan_pemohon = $_POST['catatan_pemohon'];

        $arsip = $_POST['arsip'];
        $tgl_verif_arsip = $_POST['tgl_verif_arsip'];
        $jam_verif_arsip = $_POST['jam_verif_arsip'];
        $status_verif_arsip =  $_POST['status_verif_arsip'];
        $catatan_arsip = $_POST['catatan_arsip'];

        $jenis_kepengurusan = $data_cek['jenis_kepengurusan'];
        $id = $_POST['id'];

        $sql_ubah = "UPDATE tabel_verifikasi SET nama_pemohon = '$nama_pemohon', nik = '$nik', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', jk = '$jk', kelurahan = '$kelurahan', kecamatan = '$kecamatan', tgl_permohonan = '$tgl_permohonan', dokumen_baru = '$dokumen_baru', penambahan_jiwa = '$penambahan_jiwa', perubahan_data = '$perubahan_data', petugas_pelayanan = '$petugas_pelayanan', tgl_verif_pelayanan = '$tgl_verif_pelayanan', jam_verif_pelayanan = '$jam_verif_pelayanan', status_verif_pelayanan = '$status_verif_pelayanan', catatan_pelayanan = '$catatan_pelayanan', kasi = '$kasi', tgl_verif_kasi = '$tgl_verif_kasi', jam_verif_kasi = '$jam_verif_kasi', status_verif_kasi = '$status_verif_kasi', catatan_kasi = '$catatan_kasi', operator = '$operator', tgl_verif_operator = '$tgl_verif_operator', jam_verif_operator = '$jam_verif_operator', status_verif_operator = '$status_verif_operator', catatan_operator = '$catatan_operator', petugas = '$petugas', tgl_verif_petugas = '$tgl_verif_petugas', jam_verif_petugas = '$jam_verif_petugas', petugas2 = '$petugas2', tgl_verif_petugas2 = '$tgl_verif_petugas2', jam_verif_petugas2 = '$jam_verif_petugas2', status_verif_petugas = '$status_verif_petugas', catatan_petugas = '$catatan_petugas', pemohon = '$pemohon', tgl_verif_pemohon = '$tgl_verif_pemohon', jam_verif_pemohon = '$jam_verif_pemohon', status_verif_pemohon = '$status_verif_pemohon', catatan_pemohon = '$catatan_pemohon', arsip = '$arsip', tgl_verif_arsip = '$tgl_verif_arsip', jam_verif_arsip = '$tgl_verif_arsip', status_verif_arsip = '$status_verif_arsip', catatan_arsip = '$catatan_arsip', jenis_kepengurusan = '$jenis_kepengurusan' WHERE id_kendali = $id";

        $query_ubah = mysqli_query($koneksi, $sql_ubah);

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
        
        $sql_ubah = "UPDATE verif_dokumen SET doc1 = '$doc1', doc2 = '$doc2', doc3 = '$doc3', doc4 = '$doc4', doc5 = '$doc5', doc6 = '$doc6', doc7 = '$doc7'";

        $query_ubah = mysqli_query($koneksi, $sql_ubah);

        if ($query_ubah) {
            echo "<script>
          Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = 'index.php?page=data-verif';
            }
          })</script>";
          }else{
          echo "<script>
          Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = 'index.php?page=data-verif';
            }
          })</script>";
        }
    }elseif (isset ($_POST['UbahKIA'])){
        $nama_pemohon = $_POST['nama_pemohon'];
        $nik = $_POST['nik'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];
        $kelurahan = $_POST['kelurahan'];
        $kecamatan = $_POST['kecamatan'];
        $tgl_permohonan = $_POST['tgl_permohonan'];
        $dokumen_baru = $_POST['dokumen_baru'];
        $penambahan_jiwa = $_POST['penambahan_jiwa'];
        $perubahan_data = $_POST['perubahan_data'];

        $petugas_pelayanan = $_POST['petugas_pelayanan'];
        $tgl_verif_pelayanan = $_POST['tgl_verif_pelayanan'];
        $jam_verif_pelayanan = $_POST['jam_verif_pelayanan'];
        $status_verif_pelayanan = $_POST['status_verif_pelayanan'];
        $catatan_pelayanan = $_POST['catatan_pelayanan'];

        $kasi =  $_POST['kasi'];
        $tgl_verif_kasi = $_POST['tgl_verif_kasi'];
        $jam_verif_kasi = $_POST['jam_verif_kasi'];
        $status_verif_kasi =  $_POST['status_verif_kasi'];
        $catatan_kasi = $_POST['catatan_kasi'];

        $operator =  $_POST['operator'];
        $tgl_verif_operator = $_POST['tgl_verif_operator'];
        $jam_verif_operator = $_POST['jam_verif_operator'];
        $status_verif_operator =  $_POST['status_verif_operator'];
        $catatan_operator = $_POST['catatan_operator'];

        $petugas = $_POST['petugas'];
        $tgl_verif_petugas = $_POST['tgl_verif_petugas'];
        $jam_verif_petugas = $_POST['jam_verif_petugas'];
        $petugas2 = $_POST['petugas2'];
        $tgl_verif_petugas2 = $_POST['tgl_verif_petugas2'];
        $jam_verif_petugas2 = $_POST['jam_verif_petugas2'];
        $status_verif_petugas =  $_POST['status_verif_petugas'];
        $catatan_petugas = $_POST['catatan_petugas'];

        $pemohon =  $_POST['pemohon'];
        $tgl_verif_pemohon = $_POST['tgl_verif_pemohon'];
        $jam_verif_pemohon = $_POST['jam_verif_pemohon'];
        $status_verif_pemohon =  $_POST['status_verif_pemohon'];
        $catatan_pemohon = $_POST['catatan_pemohon'];

        $arsip = $_POST['arsip'];
        $tgl_verif_arsip = $_POST['tgl_verif_arsip'];
        $jam_verif_arsip = $_POST['jam_verif_arsip'];
        $status_verif_arsip =  $_POST['status_verif_arsip'];
        $catatan_arsip = $_POST['catatan_arsip'];

        $jenis_kepengurusan = $data_cek['jenis_kepengurusan'];
        $id = $_POST['id'];

        $sql_ubah = "UPDATE tabel_verifikasi SET nama_pemohon = '$nama_pemohon', nik = '$nik', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', jk = '$jk', kelurahan = '$kelurahan', kecamatan = '$kecamatan', tgl_permohonan = '$tgl_permohonan', dokumen_baru = '$dokumen_baru', penambahan_jiwa = '$penambahan_jiwa', perubahan_data = '$perubahan_data', petugas_pelayanan = '$petugas_pelayanan', tgl_verif_pelayanan = '$tgl_verif_pelayanan', jam_verif_pelayanan = '$jam_verif_pelayanan', status_verif_pelayanan = '$status_verif_pelayanan', catatan_pelayanan = '$catatan_pelayanan', kasi = '$kasi', tgl_verif_kasi = '$tgl_verif_kasi', jam_verif_kasi = '$jam_verif_kasi', status_verif_kasi = '$status_verif_kasi', catatan_kasi = '$catatan_kasi', operator = '$operator', tgl_verif_operator = '$tgl_verif_operator', jam_verif_operator = '$jam_verif_operator', status_verif_operator = '$status_verif_operator', catatan_operator = '$catatan_operator', petugas = '$petugas', tgl_verif_petugas = '$tgl_verif_petugas', jam_verif_petugas = '$jam_verif_petugas', petugas2 = '$petugas2', tgl_verif_petugas2 = '$tgl_verif_petugas2', jam_verif_petugas2 = '$jam_verif_petugas2', status_verif_petugas = '$status_verif_petugas', catatan_petugas = '$catatan_petugas', pemohon = '$pemohon', tgl_verif_pemohon = '$tgl_verif_pemohon', jam_verif_pemohon = '$jam_verif_pemohon', status_verif_pemohon = '$status_verif_pemohon', catatan_pemohon = '$catatan_pemohon', arsip = '$arsip', tgl_verif_arsip = '$tgl_verif_arsip', jam_verif_arsip = '$tgl_verif_arsip', status_verif_arsip = '$status_verif_arsip', catatan_arsip = '$catatan_arsip', jenis_kepengurusan = '$jenis_kepengurusan' WHERE id_kendali = $id";

        $query_ubah = mysqli_query($koneksi, $sql_ubah);

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

        $sql_ubah = "UPDATE verif_dokumen SET doc1 = '$doc1', doc2 = '$doc2', doc3 = '$doc3', doc4 = '$doc4', doc5 = '$doc5'";

        $query_ubah = mysqli_query($koneksi, $sql_ubah);

        if ($query_ubah) {
            echo "<script>
          Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = 'index.php?page=data-verif';
            }
          })</script>";
          }else{
          echo "<script>
          Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = 'index.php?page=data-verif';
            }
          })</script>";
        }
    }elseif (isset ($_POST['UbahLahir'])){
        $nama_pemohon = $_POST['nama_pemohon'];
        $nik = $_POST['nik'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];
        $kelurahan = $_POST['kelurahan'];
        $kecamatan = $_POST['kecamatan'];
        $tgl_permohonan = $_POST['tgl_permohonan'];
        $dokumen_baru = $_POST['dokumen_baru'];
        $penambahan_jiwa = $_POST['penambahan_jiwa'];
        $perubahan_data = $_POST['perubahan_data'];

        $petugas_pelayanan = $_POST['petugas_pelayanan'];
        $tgl_verif_pelayanan = $_POST['tgl_verif_pelayanan'];
        $jam_verif_pelayanan = $_POST['jam_verif_pelayanan'];
        $status_verif_pelayanan = $_POST['status_verif_pelayanan'];
        $catatan_pelayanan = $_POST['catatan_pelayanan'];

        $kasi =  $_POST['kasi'];
        $tgl_verif_kasi = $_POST['tgl_verif_kasi'];
        $jam_verif_kasi = $_POST['jam_verif_kasi'];
        $kasi2 =  $_POST['kasi2'];
        $tgl_verif_kasi2 = $_POST['tgl_verif_kasi2'];
        $jam_verif_kasi2 = $_POST['jam_verif_kasi2'];
        $status_verif_kasi =  $_POST['status_verif_kasi'];
        $catatan_kasi = $_POST['catatan_kasi'];

        $operator =  $_POST['operator'];
        $tgl_verif_operator = $_POST['tgl_verif_operator'];
        $jam_verif_operator = $_POST['jam_verif_operator'];
        $status_verif_operator =  $_POST['status_verif_operator'];
        $catatan_operator = $_POST['catatan_operator'];

        $kabid = $_POST['kabid'];
        $tgl_verif_kabid = $_POST['tgl_verif_kabid'];
        $jam_verif_kabid = $_POST['jam_verif_kabid'];
        $status_verif_kabid =  $_POST['status_verif_kabid'];
        $catatan_kabid = $_POST['catatan_kabid'];

        $kepdinas = $_POST['kepdinas'];
        $tgl_verif_kepdinas = $_POST['tgl_verif_kepdinas'];
        $jam_verif_kepdinas = $_POST['jam_verif_kepdinas'];
        $status_verif_kepdinas =  $_POST['status_verif_kepdinas'];
        $catatan_kepdinas =  $_POST['catatan_kepdinas'];

        $petugas = $_POST['petugas'];
        $tgl_verif_petugas = $_POST['tgl_verif_petugas'];
        $jam_verif_petugas = $_POST['jam_verif_petugas'];
        $status_verif_petugas =  $_POST['status_verif_petugas'];
        $catatan_petugas = $_POST['catatan_petugas'];

        $pemohon =  $_POST['pemohon'];
        $tgl_verif_pemohon = $_POST['tgl_verif_pemohon'];
        $jam_verif_pemohon = $_POST['jam_verif_pemohon'];
        $status_verif_pemohon =  $_POST['status_verif_pemohon'];
        $catatan_pemohon = $_POST['catatan_pemohon'];

        $arsip = $_POST['arsip'];
        $tgl_verif_arsip = $_POST['tgl_verif_arsip'];
        $jam_verif_arsip = $_POST['jam_verif_arsip'];
        $status_verif_arsip =  $_POST['status_verif_arsip'];
        $catatan_arsip = $_POST['catatan_arsip'];

        $jenis_kepengurusan = $data_cek['jenis_kepengurusan'];
        $id = $_POST['id'];

        $sql_ubah = "UPDATE tabel_verifikasi SET nama_pemohon = '$nama_pemohon', nik = '$nik', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', jk = '$jk', kelurahan = '$kelurahan', kecamatan = '$kecamatan', tgl_permohonan = '$tgl_permohonan', dokumen_baru = '$dokumen_baru', penambahan_jiwa = '$penambahan_jiwa', perubahan_data = '$perubahan_data', petugas_pelayanan = '$petugas_pelayanan', tgl_verif_pelayanan = '$tgl_verif_pelayanan', jam_verif_pelayanan = '$jam_verif_pelayanan', status_verif_pelayanan = '$status_verif_pelayanan', catatan_pelayanan = '$catatan_pelayanan', kasi = '$kasi', tgl_verif_kasi = '$tgl_verif_kasi', jam_verif_kasi = '$jam_verif_kasi', kasi2 = '$kasi2', tgl_verif_kasi2 = '$tgl_verif_kasi2', jam_verif_kasi2 = '$jam_verif_kasi2', status_verif_kasi = '$status_verif_kasi', catatan_kasi = '$catatan_kasi', operator = '$operator', tgl_verif_operator = '$tgl_verif_operator', jam_verif_operator = '$jam_verif_operator', status_verif_operator = '$status_verif_operator', catatan_operator = '$catatan_operator', kabid = '$kabid', tgl_verif_kabid = '$tgl_verif_kabid', jam_verif_kabid = '$jam_verif_kabid', status_verif_kabid = '$status_verif_kabid', catatan_kabid = '$catatan_kabid', petugas = '$petugas', tgl_verif_petugas = '$tgl_verif_petugas', jam_verif_petugas = '$jam_verif_petugas', status_verif_petugas = '$status_verif_petugas', catatan_petugas = '$catatan_petugas', kepdinas = '$kepdinas', tgl_verif_kepdinas = '$tgl_verif_kepdinas', jam_verif_kepdinas = '$jam_verif_kepdinas', status_verif_kepdinas = '$status_verif_kepdinas', catatan_kepdinas = '$catatan_kepdinas', pemohon = '$pemohon', tgl_verif_pemohon = '$tgl_verif_pemohon', jam_verif_pemohon = '$jam_verif_pemohon', status_verif_pemohon = '$status_verif_pemohon', catatan_pemohon = '$catatan_pemohon', arsip = '$arsip', tgl_verif_arsip = '$tgl_verif_arsip', jam_verif_arsip = '$tgl_verif_arsip', status_verif_arsip = '$status_verif_arsip', catatan_arsip = '$catatan_arsip', jenis_kepengurusan = '$jenis_kepengurusan' WHERE id_kendali = $id";

        $query_ubah = mysqli_query($koneksi, $sql_ubah);

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
        $doc8 = '';
        if(isset($_POST['doc8'])){
          $doc8 =  $_POST['doc8'];
        }
        $doc9 = '';
        if(isset($_POST['doc9'])){
          $doc9 =  $_POST['doc9'];
        }
        $doc10 = '';
        if(isset($_POST['doc10'])){
          $doc10 =  $_POST['doc10'];
        }
        $doc11 = '';
        if(isset($_POST['doc11'])){
          $doc11 =  $_POST['doc11'];
        }
        $doc12 = '';
        if(isset($_POST['doc12'])){
          $doc12 =  $_POST['doc12'];
        }
        $doc13 = '';
        if(isset($_POST['doc13'])){
          $doc13 =  $_POST['doc13'];
        }
        $doc14 = '';
        if(isset($_POST['doc14'])){
          $doc14 =  $_POST['doc14'];
        }

        $sql_ubah = "UPDATE verif_dokumen SET doc1 = '$doc1', doc2 = '$doc2', doc3 = '$doc3', doc4 = '$doc4', doc5 = '$doc5', doc6 = '$doc6', doc7 = '$doc7', doc8 = '$doc8', doc9 = '$doc9', doc10 = '$doc10', doc11 = '$doc11', doc12 = '$doc12', doc13 = '$doc13', doc14 = '$doc14'";

        $query_ubah = mysqli_query($koneksi, $sql_ubah);

        if ($query_ubah) {
            echo "<script>
          Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = 'index.php?page=data-verif';
            }
          })</script>";
          }else{
          echo "<script>
          Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = 'index.php?page=data-verif';
            }
          })</script>";
        }
    }elseif (isset ($_POST['UbahMati'])){
        $nama_pemohon = $_POST['nama_pemohon'];
        $nik = $_POST['nik'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];
        $kelurahan = $_POST['kelurahan'];
        $kecamatan = $_POST['kecamatan'];
        $tgl_permohonan = $_POST['tgl_permohonan'];
        $dokumen_baru = $_POST['dokumen_baru'];
        $penambahan_jiwa = $_POST['penambahan_jiwa'];
        $perubahan_data = $_POST['perubahan_data'];

        $petugas_pelayanan = $_POST['petugas_pelayanan'];
        $tgl_verif_pelayanan = $_POST['tgl_verif_pelayanan'];
        $jam_verif_pelayanan = $_POST['jam_verif_pelayanan'];
        $status_verif_pelayanan = $_POST['status_verif_pelayanan'];
        $catatan_pelayanan = $_POST['catatan_pelayanan'];

        $kasi =  $_POST['kasi'];
        $tgl_verif_kasi = $_POST['tgl_verif_kasi'];
        $jam_verif_kasi = $_POST['jam_verif_kasi'];
        $kasi2 =  $_POST['kasi2'];
        $tgl_verif_kasi2 = $_POST['tgl_verif_kasi2'];
        $jam_verif_kasi2 = $_POST['jam_verif_kasi2'];
        $status_verif_kasi =  $_POST['status_verif_kasi'];
        $catatan_kasi = $_POST['catatan_kasi'];

        $operator =  $_POST['operator'];
        $tgl_verif_operator = $_POST['tgl_verif_operator'];
        $jam_verif_operator = $_POST['jam_verif_operator'];
        $status_verif_operator =  $_POST['status_verif_operator'];
        $catatan_operator = $_POST['catatan_operator'];

        $kabid = $_POST['kabid'];
        $tgl_verif_kabid = $_POST['tgl_verif_kabid'];
        $jam_verif_kabid = $_POST['jam_verif_kabid'];
        $status_verif_kabid =  $_POST['status_verif_kabid'];
        $catatan_kabid = $_POST['catatan_kabid'];

        $kepdinas = $_POST['kepdinas'];
        $tgl_verif_kepdinas = $_POST['tgl_verif_kepdinas'];
        $jam_verif_kepdinas = $_POST['jam_verif_kepdinas'];
        $status_verif_kepdinas =  $_POST['status_verif_kepdinas'];
        $catatan_kepdinas =  $_POST['catatan_kepdinas'];

        $petugas = $_POST['petugas'];
        $tgl_verif_petugas = $_POST['tgl_verif_petugas'];
        $jam_verif_petugas = $_POST['jam_verif_petugas'];
        $status_verif_petugas =  $_POST['status_verif_petugas'];
        $catatan_petugas = $_POST['catatan_petugas'];

        $pemohon =  $_POST['pemohon'];
        $tgl_verif_pemohon = $_POST['tgl_verif_pemohon'];
        $jam_verif_pemohon = $_POST['jam_verif_pemohon'];
        $status_verif_pemohon =  $_POST['status_verif_pemohon'];
        $catatan_pemohon = $_POST['catatan_pemohon'];

        $arsip = $_POST['arsip'];
        $tgl_verif_arsip = $_POST['tgl_verif_arsip'];
        $jam_verif_arsip = $_POST['jam_verif_arsip'];
        $status_verif_arsip =  $_POST['status_verif_arsip'];
        $catatan_arsip = $_POST['catatan_arsip'];

        $jenis_kepengurusan = $data_cek['jenis_kepengurusan'];
        $id = $_POST['id'];

        $sql_ubah = "UPDATE tabel_verifikasi SET nama_pemohon = '$nama_pemohon', nik = '$nik', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', jk = '$jk', kelurahan = '$kelurahan', kecamatan = '$kecamatan', tgl_permohonan = '$tgl_permohonan', dokumen_baru = '$dokumen_baru', penambahan_jiwa = '$penambahan_jiwa', perubahan_data = '$perubahan_data', petugas_pelayanan = '$petugas_pelayanan', tgl_verif_pelayanan = '$tgl_verif_pelayanan', jam_verif_pelayanan = '$jam_verif_pelayanan', status_verif_pelayanan = '$status_verif_pelayanan', catatan_pelayanan = '$catatan_pelayanan', kasi = '$kasi', tgl_verif_kasi = '$tgl_verif_kasi', jam_verif_kasi = '$jam_verif_kasi', kasi2 = '$kasi2', tgl_verif_kasi2 = '$tgl_verif_kasi2', jam_verif_kasi2 = '$jam_verif_kasi2', status_verif_kasi = '$status_verif_kasi', catatan_kasi = '$catatan_kasi', operator = '$operator', tgl_verif_operator = '$tgl_verif_operator', jam_verif_operator = '$jam_verif_operator', status_verif_operator = '$status_verif_operator', catatan_operator = '$catatan_operator', kabid = '$kabid', tgl_verif_kabid = '$tgl_verif_kabid', jam_verif_kabid = '$jam_verif_kabid', status_verif_kabid = '$status_verif_kabid', catatan_kabid = '$catatan_kabid', petugas = '$petugas', tgl_verif_petugas = '$tgl_verif_petugas', jam_verif_petugas = '$jam_verif_petugas', status_verif_petugas = '$status_verif_petugas', catatan_petugas = '$catatan_petugas', kepdinas = '$kepdinas', tgl_verif_kepdinas = '$tgl_verif_kepdinas', jam_verif_kepdinas = '$jam_verif_kepdinas', status_verif_kepdinas = '$status_verif_kepdinas', catatan_kepdinas = '$catatan_kepdinas', pemohon = '$pemohon', tgl_verif_pemohon = '$tgl_verif_pemohon', jam_verif_pemohon = '$jam_verif_pemohon', status_verif_pemohon = '$status_verif_pemohon', catatan_pemohon = '$catatan_pemohon', arsip = '$arsip', tgl_verif_arsip = '$tgl_verif_arsip', jam_verif_arsip = '$tgl_verif_arsip', status_verif_arsip = '$status_verif_arsip', catatan_arsip = '$catatan_arsip', jenis_kepengurusan = '$jenis_kepengurusan' WHERE id_kendali = $id";

        $query_ubah = mysqli_query($koneksi, $sql_ubah);

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

        $sql_ubah = "UPDATE verif_dokumen SET doc1 = '$doc1', doc2 = '$doc2', doc3 = '$doc3', doc4 = '$doc4', doc5 = '$doc5', doc6 = '$doc6', doc7 = '$doc7'";

        $query_ubah = mysqli_query($koneksi, $sql_ubah);

        if ($query_ubah) {
            echo "<script>
          Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = 'index.php?page=data-verif';
            }
          })</script>";
          }else{
          echo "<script>
          Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = 'index.php?page=data-verif';
            }
          })</script>";
        }
    }elseif (isset ($_POST['UbahKawin'])){
        $nama_pemohon = $_POST['nama_pemohon'];
        $nik = $_POST['nik'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];
        $kelurahan = $_POST['kelurahan'];
        $kecamatan = $_POST['kecamatan'];
        $tgl_permohonan = $_POST['tgl_permohonan'];
        $dokumen_baru = $_POST['dokumen_baru'];
        $penambahan_jiwa = $_POST['penambahan_jiwa'];
        $perubahan_data = $_POST['perubahan_data'];

        $petugas_pelayanan = $_POST['petugas_pelayanan'];
        $tgl_verif_pelayanan = $_POST['tgl_verif_pelayanan'];
        $jam_verif_pelayanan = $_POST['jam_verif_pelayanan'];
        $status_verif_pelayanan = $_POST['status_verif_pelayanan'];
        $catatan_pelayanan = $_POST['catatan_pelayanan'];

        $kasi =  $_POST['kasi'];
        $tgl_verif_kasi = $_POST['tgl_verif_kasi'];
        $jam_verif_kasi = $_POST['jam_verif_kasi'];
        $status_verif_kasi =  $_POST['status_verif_kasi'];
        $catatan_kasi = $_POST['catatan_kasi'];

        $operator =  $_POST['operator'];
        $tgl_verif_operator = $_POST['tgl_verif_operator'];
        $jam_verif_operator = $_POST['jam_verif_operator'];
        $status_verif_operator =  $_POST['status_verif_operator'];
        $catatan_operator = $_POST['catatan_operator'];

        $kabid = $_POST['kabid'];
        $tgl_verif_kabid = $_POST['tgl_verif_kabid'];
        $jam_verif_kabid = $_POST['jam_verif_kabid'];
        $status_verif_kabid =  $_POST['status_verif_kabid'];
        $catatan_kabid = $_POST['catatan_kabid'];

        $kepdinas = $_POST['kepdinas'];
        $tgl_verif_kepdinas = $_POST['tgl_verif_kepdinas'];
        $jam_verif_kepdinas = $_POST['jam_verif_kepdinas'];
        $status_verif_kepdinas =  $_POST['status_verif_kepdinas'];
        $catatan_kepdinas =  $_POST['catatan_kepdinas'];

        $petugas = $_POST['petugas'];
        $tgl_verif_petugas = $_POST['tgl_verif_petugas'];
        $jam_verif_petugas = $_POST['jam_verif_petugas'];
        $status_verif_petugas =  $_POST['status_verif_petugas'];
        $catatan_petugas = $_POST['catatan_petugas'];

        $pemohon =  $_POST['pemohon'];
        $tgl_verif_pemohon = $_POST['tgl_verif_pemohon'];
        $jam_verif_pemohon = $_POST['jam_verif_pemohon'];
        $status_verif_pemohon =  $_POST['status_verif_pemohon'];
        $catatan_pemohon = $_POST['catatan_pemohon'];

        $arsip = $_POST['arsip'];
        $tgl_verif_arsip = $_POST['tgl_verif_arsip'];
        $jam_verif_arsip = $_POST['jam_verif_arsip'];
        $status_verif_arsip =  $_POST['status_verif_arsip'];
        $catatan_arsip = $_POST['catatan_arsip'];

        $jenis_kepengurusan = $data_cek['jenis_kepengurusan'];
        $id = $_POST['id'];

        $sql_ubah = "UPDATE tabel_verifikasi SET nama_pemohon = '$nama_pemohon', nik = '$nik', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', jk = '$jk', kelurahan = '$kelurahan', kecamatan = '$kecamatan', tgl_permohonan = '$tgl_permohonan', dokumen_baru = '$dokumen_baru', penambahan_jiwa = '$penambahan_jiwa', perubahan_data = '$perubahan_data', petugas_pelayanan = '$petugas_pelayanan', tgl_verif_pelayanan = '$tgl_verif_pelayanan', jam_verif_pelayanan = '$jam_verif_pelayanan', status_verif_pelayanan = '$status_verif_pelayanan', catatan_pelayanan = '$catatan_pelayanan', kasi = '$kasi', tgl_verif_kasi = '$tgl_verif_kasi', jam_verif_kasi = '$jam_verif_kasi', status_verif_kasi = '$status_verif_kasi', catatan_kasi = '$catatan_kasi', operator = '$operator', tgl_verif_operator = '$tgl_verif_operator', jam_verif_operator = '$jam_verif_operator', status_verif_operator = '$status_verif_operator', catatan_operator = '$catatan_operator', kabid = '$kabid', tgl_verif_kabid = '$tgl_verif_kabid', jam_verif_kabid = '$jam_verif_kabid', status_verif_kabid = '$status_verif_kabid', catatan_kabid = '$catatan_kabid', petugas = '$petugas', tgl_verif_petugas = '$tgl_verif_petugas', jam_verif_petugas = '$jam_verif_petugas', status_verif_petugas = '$status_verif_petugas', catatan_petugas = '$catatan_petugas', kepdinas = '$kepdinas', tgl_verif_kepdinas = '$tgl_verif_kepdinas', jam_verif_kepdinas = '$jam_verif_kepdinas', status_verif_kepdinas = '$status_verif_kepdinas', catatan_kepdinas = '$catatan_kepdinas', pemohon = '$pemohon', tgl_verif_pemohon = '$tgl_verif_pemohon', jam_verif_pemohon = '$jam_verif_pemohon', status_verif_pemohon = '$status_verif_pemohon', catatan_pemohon = '$catatan_pemohon', arsip = '$arsip', tgl_verif_arsip = '$tgl_verif_arsip', jam_verif_arsip = '$tgl_verif_arsip', status_verif_arsip = '$status_verif_arsip', catatan_arsip = '$catatan_arsip', jenis_kepengurusan = '$jenis_kepengurusan' WHERE id_kendali = $id";

        $query_ubah = mysqli_query($koneksi, $sql_ubah);

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
        $doc8 = '';
        if(isset($_POST['doc8'])){
          $doc8 =  $_POST['doc8'];
        }
        $doc9 = '';
        if(isset($_POST['doc9'])){
          $doc9 =  $_POST['doc9'];
        }
        $doc10 = '';
        if(isset($_POST['doc10'])){
          $doc10 =  $_POST['doc10'];
        }
        $doc11 = '';
        if(isset($_POST['doc11'])){
          $doc11 =  $_POST['doc11'];
        }
        $doc12 = '';
        if(isset($_POST['doc12'])){
          $doc12 =  $_POST['doc12'];
        }
        $doc13 = '';
        if(isset($_POST['doc13'])){
          $doc13 =  $_POST['doc13'];
        }
        $doc14 = '';
        if(isset($_POST['doc14'])){
          $doc14 =  $_POST['doc14'];
        }

        $sql_ubah = "UPDATE verif_dokumen SET doc1 = '$doc1', doc2 = '$doc2', doc3 = '$doc3', doc4 = '$doc4', doc5 = '$doc5', doc6 = '$doc6', doc7 = '$doc7', doc8 = '$doc8', doc9 = '$doc9', doc10 = '$doc10', doc11 = '$doc11', doc12 = '$doc12', doc13 = '$doc13', doc14 = '$doc14'";

        $query_ubah = mysqli_query($koneksi, $sql_ubah);

        if ($query_ubah) {
            echo "<script>
          Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = 'index.php?page=data-verif';
            }
          })</script>";
          }else{
          echo "<script>
          Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = 'index.php?page=data-verif';
            }
          })</script>";
        }
    }elseif (isset ($_POST['UbahCerai'])){
        $nama_pemohon = $_POST['nama_pemohon'];
        $nik = $_POST['nik'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];
        $kelurahan = $_POST['kelurahan'];
        $kecamatan = $_POST['kecamatan'];
        $tgl_permohonan = $_POST['tgl_permohonan'];
        $dokumen_baru = $_POST['dokumen_baru'];
        $penambahan_jiwa = $_POST['penambahan_jiwa'];
        $perubahan_data = $_POST['perubahan_data'];

        $petugas_pelayanan = $_POST['petugas_pelayanan'];
        $tgl_verif_pelayanan = $_POST['tgl_verif_pelayanan'];
        $jam_verif_pelayanan = $_POST['jam_verif_pelayanan'];
        $status_verif_pelayanan = $_POST['status_verif_pelayanan'];
        $catatan_pelayanan = $_POST['catatan_pelayanan'];

        $kasi =  $_POST['kasi'];
        $tgl_verif_kasi = $_POST['tgl_verif_kasi'];
        $jam_verif_kasi = $_POST['jam_verif_kasi'];
        $status_verif_kasi =  $_POST['status_verif_kasi'];
        $catatan_kasi = $_POST['catatan_kasi'];

        $operator =  $_POST['operator'];
        $tgl_verif_operator = $_POST['tgl_verif_operator'];
        $jam_verif_operator = $_POST['jam_verif_operator'];
        $status_verif_operator =  $_POST['status_verif_operator'];
        $catatan_operator = $_POST['catatan_operator'];

        $kabid = $_POST['kabid'];
        $tgl_verif_kabid = $_POST['tgl_verif_kabid'];
        $jam_verif_kabid = $_POST['jam_verif_kabid'];
        $status_verif_kabid =  $_POST['status_verif_kabid'];
        $catatan_kabid = $_POST['catatan_kabid'];

        $kepdinas = $_POST['kepdinas'];
        $tgl_verif_kepdinas = $_POST['tgl_verif_kepdinas'];
        $jam_verif_kepdinas = $_POST['jam_verif_kepdinas'];
        $status_verif_kepdinas =  $_POST['status_verif_kepdinas'];
        $catatan_kepdinas =  $_POST['catatan_kepdinas'];

        $petugas = $_POST['petugas'];
        $tgl_verif_petugas = $_POST['tgl_verif_petugas'];
        $jam_verif_petugas = $_POST['jam_verif_petugas'];
        $status_verif_petugas =  $_POST['status_verif_petugas'];
        $catatan_petugas = $_POST['catatan_petugas'];

        $pemohon =  $_POST['pemohon'];
        $tgl_verif_pemohon = $_POST['tgl_verif_pemohon'];
        $jam_verif_pemohon = $_POST['jam_verif_pemohon'];
        $status_verif_pemohon =  $_POST['status_verif_pemohon'];
        $catatan_pemohon = $_POST['catatan_pemohon'];

        $arsip = $_POST['arsip'];
        $tgl_verif_arsip = $_POST['tgl_verif_arsip'];
        $jam_verif_arsip = $_POST['jam_verif_arsip'];
        $status_verif_arsip =  $_POST['status_verif_arsip'];
        $catatan_arsip = $_POST['catatan_arsip'];

        $jenis_kepengurusan = $data_cek['jenis_kepengurusan'];
        $id = $_POST['id'];

        $sql_ubah = "UPDATE tabel_verifikasi SET nama_pemohon = '$nama_pemohon', nik = '$nik', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', jk = '$jk', kelurahan = '$kelurahan', kecamatan = '$kecamatan', tgl_permohonan = '$tgl_permohonan', dokumen_baru = '$dokumen_baru', penambahan_jiwa = '$penambahan_jiwa', perubahan_data = '$perubahan_data', petugas_pelayanan = '$petugas_pelayanan', tgl_verif_pelayanan = '$tgl_verif_pelayanan', jam_verif_pelayanan = '$jam_verif_pelayanan', status_verif_pelayanan = '$status_verif_pelayanan', catatan_pelayanan = '$catatan_pelayanan', kasi = '$kasi', tgl_verif_kasi = '$tgl_verif_kasi', jam_verif_kasi = '$jam_verif_kasi', status_verif_kasi = '$status_verif_kasi', catatan_kasi = '$catatan_kasi', operator = '$operator', tgl_verif_operator = '$tgl_verif_operator', jam_verif_operator = '$jam_verif_operator', status_verif_operator = '$status_verif_operator', catatan_operator = '$catatan_operator', kabid = '$kabid', tgl_verif_kabid = '$tgl_verif_kabid', jam_verif_kabid = '$jam_verif_kabid', status_verif_kabid = '$status_verif_kabid', catatan_kabid = '$catatan_kabid', petugas = '$petugas', tgl_verif_petugas = '$tgl_verif_petugas', jam_verif_petugas = '$jam_verif_petugas', status_verif_petugas = '$status_verif_petugas', catatan_petugas = '$catatan_petugas', kepdinas = '$kepdinas', tgl_verif_kepdinas = '$tgl_verif_kepdinas', jam_verif_kepdinas = '$jam_verif_kepdinas', status_verif_kepdinas = '$status_verif_kepdinas', catatan_kepdinas = '$catatan_kepdinas', pemohon = '$pemohon', tgl_verif_pemohon = '$tgl_verif_pemohon', jam_verif_pemohon = '$jam_verif_pemohon', status_verif_pemohon = '$status_verif_pemohon', catatan_pemohon = '$catatan_pemohon', arsip = '$arsip', tgl_verif_arsip = '$tgl_verif_arsip', jam_verif_arsip = '$tgl_verif_arsip', status_verif_arsip = '$status_verif_arsip', catatan_arsip = '$catatan_arsip', jenis_kepengurusan = '$jenis_kepengurusan' WHERE id_kendali = $id";

        $query_ubah = mysqli_query($koneksi, $sql_ubah);

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

        $sql_ubah = "UPDATE verif_dokumen SET doc1 = '$doc1', doc2 = '$doc2', doc3 = '$doc3', doc4 = '$doc4'";

        $query_ubah = mysqli_query($koneksi, $sql_ubah);

        if ($query_ubah) {
            echo "<script>
          Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = 'index.php?page=data-verif';
            }
          })</script>";
          }else{
          echo "<script>
          Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = 'index.php?page=data-verif';
            }
          })</script>";
        }
    }elseif (isset ($_POST['UbahSKPD'])){
        $nama_pemohon = $_POST['nama_pemohon'];
        $nik = $_POST['nik'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];
        $kelurahan = $_POST['kelurahan'];
        $kecamatan = $_POST['kecamatan'];
        $tgl_permohonan = $_POST['tgl_permohonan'];
        $dokumen_baru = $_POST['dokumen_baru'];
        $penambahan_jiwa = $_POST['penambahan_jiwa'];
        $perubahan_data = $_POST['perubahan_data'];

        $petugas_pelayanan = $_POST['petugas_pelayanan'];
        $tgl_verif_pelayanan = $_POST['tgl_verif_pelayanan'];
        $jam_verif_pelayanan = $_POST['jam_verif_pelayanan'];
        $status_verif_pelayanan = $_POST['status_verif_pelayanan'];
        $catatan_pelayanan = $_POST['catatan_pelayanan'];

        $kasi =  $_POST['kasi'];
        $tgl_verif_kasi = $_POST['tgl_verif_kasi'];
        $jam_verif_kasi = $_POST['jam_verif_kasi'];
        $status_verif_kasi =  $_POST['status_verif_kasi'];
        $catatan_kasi = $_POST['catatan_kasi'];

        $operator =  $_POST['operator'];
        $tgl_verif_operator = $_POST['tgl_verif_operator'];
        $jam_verif_operator = $_POST['jam_verif_operator'];
        $status_verif_operator =  $_POST['status_verif_operator'];
        $catatan_operator = $_POST['catatan_operator'];

        $kepdinas = $_POST['kepdinas'];
        $tgl_verif_kepdinas = $_POST['tgl_verif_kepdinas'];
        $jam_verif_kepdinas = $_POST['jam_verif_kepdinas'];
        $status_verif_kepdinas =  $_POST['status_verif_kepdinas'];
        $catatan_kepdinas =  $_POST['catatan_kepdinas'];

        $petugas = $_POST['petugas'];
        $tgl_verif_petugas = $_POST['tgl_verif_petugas'];
        $jam_verif_petugas = $_POST['jam_verif_petugas'];
        $petugas2 = $_POST['petugas2'];
        $tgl_verif_petugas2 = $_POST['tgl_verif_petugas2'];
        $jam_verif_petugas2 = $_POST['jam_verif_petugas2'];
        $status_verif_petugas =  $_POST['status_verif_petugas'];
        $catatan_petugas = $_POST['catatan_petugas'];

        $pemohon =  $_POST['pemohon'];
        $tgl_verif_pemohon = $_POST['tgl_verif_pemohon'];
        $jam_verif_pemohon = $_POST['jam_verif_pemohon'];
        $status_verif_pemohon =  $_POST['status_verif_pemohon'];
        $catatan_pemohon = $_POST['catatan_pemohon'];

        $arsip = $_POST['arsip'];
        $tgl_verif_arsip = $_POST['tgl_verif_arsip'];
        $jam_verif_arsip = $_POST['jam_verif_arsip'];
        $status_verif_arsip =  $_POST['status_verif_arsip'];
        $catatan_arsip = $_POST['catatan_arsip'];

        $jenis_kepengurusan = $data_cek['jenis_kepengurusan'];
        $id = $_POST['id'];

        $sql_ubah = "UPDATE tabel_verifikasi SET nama_pemohon = '$nama_pemohon', nik = '$nik', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', jk = '$jk', kelurahan = '$kelurahan', kecamatan = '$kecamatan', tgl_permohonan = '$tgl_permohonan', dokumen_baru = '$dokumen_baru', penambahan_jiwa = '$penambahan_jiwa', perubahan_data = '$perubahan_data', petugas_pelayanan = '$petugas_pelayanan', tgl_verif_pelayanan = '$tgl_verif_pelayanan', jam_verif_pelayanan = '$jam_verif_pelayanan', status_verif_pelayanan = '$status_verif_pelayanan', catatan_pelayanan = '$catatan_pelayanan', kasi = '$kasi', tgl_verif_kasi = '$tgl_verif_kasi', jam_verif_kasi = '$jam_verif_kasi', status_verif_kasi = '$status_verif_kasi', catatan_kasi = '$catatan_kasi', operator = '$operator', tgl_verif_operator = '$tgl_verif_operator', jam_verif_operator = '$jam_verif_operator', status_verif_operator = '$status_verif_operator', catatan_operator = '$catatan_operator', petugas = '$petugas', tgl_verif_petugas = '$tgl_verif_petugas', jam_verif_petugas = '$jam_verif_petugas', petugas2 = '$petugas2', tgl_verif_petugas2 = '$tgl_verif_petugas2', jam_verif_petugas2 = '$jam_verif_petugas2', status_verif_petugas = '$status_verif_petugas', catatan_petugas = '$catatan_petugas', kepdinas = '$kepdinas', tgl_verif_kepdinas = '$tgl_verif_kepdinas', jam_verif_kepdinas = '$jam_verif_kepdinas', status_verif_kepdinas = '$status_verif_kepdinas', catatan_kepdinas = '$catatan_kepdinas', pemohon = '$pemohon', tgl_verif_pemohon = '$tgl_verif_pemohon', jam_verif_pemohon = '$jam_verif_pemohon', status_verif_pemohon = '$status_verif_pemohon', catatan_pemohon = '$catatan_pemohon', arsip = '$arsip', tgl_verif_arsip = '$tgl_verif_arsip', jam_verif_arsip = '$tgl_verif_arsip', status_verif_arsip = '$status_verif_arsip', catatan_arsip = '$catatan_arsip', jenis_kepengurusan = '$jenis_kepengurusan' WHERE id_kendali = $id";

        $query_ubah = mysqli_query($koneksi, $sql_ubah);

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
        $doc8 = '';
        if(isset($_POST['doc8'])){
          $doc8 =  $_POST['doc8'];
        }

        $sql_ubah = "UPDATE verif_dokumen SET doc1 = '$doc1', doc2 = '$doc2', doc3 = '$doc3', doc4 = '$doc4', doc5 = '$doc5', doc6 = '$doc6', doc7 = '$doc7', doc8 = '$doc8'";

        $query_ubah = mysqli_query($koneksi, $sql_ubah);

        if ($query_ubah) {
            echo "<script>
          Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = 'index.php?page=data-verif';
            }
          })</script>";
          }else{
          echo "<script>
          Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
          }).then((result) => {if (result.value)
            {window.location = 'index.php?page=data-verif';
            }
          })</script>";
        }
    }