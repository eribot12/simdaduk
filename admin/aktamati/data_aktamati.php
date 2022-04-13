<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fa fa-table"></i> Data Akta Kematian
    </h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="table-responsive">
      <div>
        <a href="?page=add-aktamati" class="btn btn-primary">
          <i class="fa fa-edit"></i> Tambah Data</a>
      </div>
      <br>
      <table id="example1" class="table table-warning table-hover">
        <thead>
          <tr>
            <th>No Akta Mati</th>
            <th>NIK</th>
            <th>Nama Lengkap</th>
            <th>Tanggal Meninggal</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Tanggal Input</th>
            <th>Tanggal Update</th>
            <th>NIK Saksi 1</th>
            <th>NIK Saksi 2</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $no = 1;
          $sql = $koneksi->query("SELECT p.id_pend, p.nik, p.nama, p.jekel, p.desa, p.rt, p.rw, a.id_kk, k.no_kk, k.kepala from 
			  tb_pdd p left join tb_anggota a on p.id_pend=a.id_pend 
			  left join tb_kk k on a.id_kk=k.id_kk where status='Ada'");
          while ($data = $sql->fetch_assoc()) {
          ?>

            <tr>
              <td>
                <?php echo $no++; ?>
              </td>
              <td>
                <?php echo $data['nik']; ?>
              </td>
              <td>
                <?php echo $data['nama']; ?>
              </td>
              <td>
                <?php echo $data['jekel']; ?>
              </td>
              <td>
                <?php echo $data['desa']; ?>
                RT
                <?php echo $data['rt']; ?>/ RW
                <?php echo $data['rw']; ?>.
              </td>
              <td>
                <?php echo $data['no_kk']; ?>-
                <?php echo $data['kepala']; ?>
              </td>

              <td>
                <a href="?page=view-pend&kode=<?php echo $data['id_pend']; ?>" title="Detail" class="btn btn-info btn-sm">
                  <i class="fa fa-user"></i>
                </a>
                <a href="?page=edit-pend&kode=<?php echo $data['id_pend']; ?>" title="Ubah" class="btn btn-success btn-sm">
                  <i class="fa fa-edit"></i>
                </a>
                <a href="?page=del-pend&kode=<?php echo $data['id_pend']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
                  <i class="fa fa-trash"></i>
                  </>
              </td>
            </tr>

          <?php
          }
          ?>
        </tbody>
        </tfoot>
      </table>
    </div>
  </div>
  <!-- /.card-body -->