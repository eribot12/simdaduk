<div class="card card-secondary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data KTP</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-ktp" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-warning table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Tempat, Tanggal Lahir</th>
						<th>Kelurahan</th>
						<th>Kecamatan</th>
						<th>Petugas</th>
						<th>Catatan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					 <?php
              $no = 1;
			  $sql = $koneksi->query("SELECT nik, nama_lengkap, tempat_lh ,tgl_lahir, kelurahan, kecamatan, pet_pelayanan, catatan from 
			  ktp");
              while ($data= $sql->fetch_assoc()) {
            	?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nik']; ?>
						</td>
						<td>
							<?php echo $data['nama_lengkap']; ?>
						</td>
						<td>
							<?php echo $data['tempat_lh']; ?>
							<?php echo $data['tgl_lahir']; ?>
						</td>
						<!-- <td>
							
						</td> -->
						<td>
							<?php echo $data['kelurahan']; ?>
						</td>
						<td>
							<?php echo $data['kecamatan']; ?>
						</td>
						<td>
							<?php echo $data['pet_pelayanan']; ?>
						</td>
						<td>
							<?php echo $data['catatan']; ?>
						</td>
						<td>
							<a href="?page=edit-datang&kode=<?php echo $data['nik']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-datang&kode=<?php echo $data['nik']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
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