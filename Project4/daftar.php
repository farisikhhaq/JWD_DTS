<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Daftar PMB</title>
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
                        <a class="nav-link" aria-current="page" href="tampil.php">Calon Perseta Baru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="daftar.php">Daftar Baru</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
  <h2>Tambah Data Peserta</h2>
  
  <form class="form-horizontal" method="GET" action="#proses">
  <div class="row mb-3">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama">
    </div>
  </div>
  <div class="row mb-3">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="alamat" name="alamat">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios1" value="L" checked>
        <label class="form-check-label" for="gridRadios1">
          Laki-Laki
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios2" value="P">
        <label class="form-check-label" for="gridRadios2">
          Perempuan
        </label>
      </div>
    </div>
  </fieldset>
  <div class="row mb-3">
    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
    <div class="col-sm-2">
    <select class="form-select" id="agama" name="agama">
      <option selected>Choose...</option>
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Katolik">Katolik</option>
      <option value="Hindu">Hindu</option>
      <option value="Budha">Budha</option>
      <option value="KhongHuchu">Khong Huchu</option>
    </select>
  </div>
  </div>
  <div class="row mb-3">
    <label for="sekolahasal" class="col-sm-2 col-form-label">Sekolah Asal</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="sekolahasal" name="sekolahasal">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" id="simpan" name="simpan">Simpan</button>
</form>
</div>
    <section id="proses" class="proses">
                <?php
                if(isset($_GET["simpan"])){

                    include "koneksi.php";
                    
                    $nama=$_GET['nama'];
                    $alamat=$_GET['alamat'];
                    $jeniskelamin=$_GET['jeniskelamin'];
                    $agama=$_GET['agama'];
                    $sekolahasal=$_GET['sekolahasal'];

                    $sql="INSERT INTO siswa(nama_mahasiswa, alamat, jenis_kelamin, agama, sekolah_asal)
                        VALUE('$nama','$alamat','$jeniskelamin','$agama','$sekolahasal')";

                    if (mysqli_query($connect, $sql)){
                        echo "<script>alert('Anda Berhasil Mendaftar');history.go(-1); </script>";
                        header('Location: tampil.php');
                        } else{
                        echo "<script>alert('Gagal Mendaftar ada yang Kosong');history.go(-1);</script>";
                        echo mysqli_error($connect);
                    }
                    mysqli_close($connect);
                }
                    ?>
    </section>

</body>
</html>