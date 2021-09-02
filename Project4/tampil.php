<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>FARIS I.H - 20</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            JUNIOR WEB DEVELOPER DTS<cite title="Source Title"> 2021</cite>
        </figcaption>
    </figure>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">DIGITAL TALENT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tampil.php">Calon Peserta Baru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftar.php">Daftar Baru</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<div class="container">
  <h2>Pendaftar</h2>
  <br>
<table class="table table-striped">
		<tr>
      <th>No</th>
			<th>Id Siswa</th>
			<th>Nama Siswa</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Asal Sekolah</th>
			<th>Aksi</th>
		</tr>
		<?php
      include 'koneksi.php';
      $no = 1;
		  $query = mysqli_query($db,"SELECT * FROM siswa ORDER BY id_mahasiswa ASC");
		  while ($data=mysqli_fetch_array($query)) {
		?>
		<tr>
    <!-- <?php $jenis_kelamin="L"; if($jenis_kelamin = 'L') {echo "Laki-Laki";}?> -->
      <td><?php echo $no++; ?></td>
			<td><?php echo $data['id_mahasiswa']; ?></td>
			<td><?php echo $data['nama_mahasiswa']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php if($data['jenis_kelamin']=="L"){echo "Laki-Laki";} else {echo "Perempuan";} ?></td>
			<td><?php echo $data['agama']; ?></td>
			<td><?php echo $data['sekolah_asal']; ?></td>
			<td>
        
			    <!-- Edit Data -->
				<a href="index.php?hal=edit&id=<?=$data['id_mahasiswa']?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit<?php echo $data['id_mahasiswa']; ?>">Edit</a>

				<div class="modal fade bs-example-modal-lg" id="edit<?php echo $data['id_mahasiswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog  modal-lg" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h4 class="modal-title" id="myModalLabel">Edit Data Peserta</h4>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				      </div>
				      <div class="modal-body">
				        <form class="form-horizontal" action="" method="POST">
				          <input type="hidden" name="id_mahasiswa" value="<?php echo $data['id_mahasiswa']; ?>">
						  <div class="form-group">
						    <label class="col-sm-2 control-label">Nama Siswa</label>
						    <div class="col-sm-12">
						      <input type="text" class="form-control" id="inputEmail3" name="nama_mahasiswa" value="<?php echo $data['nama_mahasiswa']; ?>">
						    </div>
						  </div>
						  <div class="form-group">
						    <label  class="col-sm-2 control-label">Alamat</label>
						    <div class="col-sm-12">
						      <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
						    <div class="col-sm-12">
						      <select class="form-control" name="jenis_kelamin">
						      	<option>Pilih Jenis Kelamin</option>
						      	<option value="L" <?php if($data['jenis_kelamin']=="L"){echo "selected";} ?>>Laki-Laki</option>
						      	<option value="P" <?php if($data['jenis_kelamin']=="P"){echo "selected";} ?>>Perempuan</option>
						      </select>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">Agama</label>
						    <div class="col-sm-12">
						      <select class="form-control" name="agama">
						      	<option>Pilih Agama</option>
						      	<option value="Islam" <?php if($data['agama']=="Islam"){echo "selected";} ?>>Islam</option>
						      	<option value="Kristen" <?php if($data['agama']=="Kristen"){echo "selected";} ?>>Kristen</option>
						      	<option value="Khatolik" <?php if($data['agama']=="Khatolik"){echo "selected";} ?>>Khatolik</option>
						      	<option value="Hindu" <?php if($data['agama']=="Hindu"){echo "selected";} ?>>Hindu</option>
						      	<option value="Budha" <?php if($data['agama']=="Budha"){echo "selected";} ?>>Budha</option>
						      	<option value="Konghucu" <?php if($data['agama']=="Konghucu"){echo "selected";} ?>>Konghucu</option>
						      	<option value="Lainnya" <?php if($data['agama']=="Lainnya"){echo "selected";} ?>>Lainnya</option>
						      </select>
						    </div>
						  </div>
						  <div class="form-group">
						    <label  class="col-sm-2 control-label">Asal Sekolah</label>
						    <div class="col-sm-12">
						      <input type="text" class="form-control" name="sekolah_asal" value="<?php echo $data['sekolah_asal']; ?>">
						    </div>
						  </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
				        <button type="submit" class="btn btn-primary" name="update">Simpan</button>
				       </form>
				      </div>
				    </div>
				  </div>
				</div>
     <a href="#" class="btn btn-danger btn-sm" data-target=".bs-example-modal-lg<?php echo $data['id_mahasiswa']; ?>" data-toggle="modal">Hapus</a>
				<div class="modal fade bs-example-modal-lg<?php echo $data['id_mahasiswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog">
          <div class="modal-content">
				      <div class="modal-header">
				        <h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus Data</h4>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				      </div>
				      <div class="modal-body">
				        <h7>Apakah Data Akan Dihapus?</h7>
				        <form action="" method="POST">
				        <input type="hidden" name="id_mahasiswa" value="<?php echo $data['id_mahasiswa']; ?>">
				      </div>
				       <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				        <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
				       </form>
				      </div>
          </div>
        </div>
      </div>
      </div>
			</td>
		</tr>
		<?php } ?>
	</table>

</div>
</div>
</html>