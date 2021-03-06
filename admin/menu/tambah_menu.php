<?php
session_start();

if(isset($_SESSION['username'])){

    include('../../connection.php');

?>
<!-- Tampilkan form tambah menu -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/user.png">

    <title>Administrator Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style-admin.css" rel="stylesheet">

    <!-- font-awesome untuk ikon -->
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

  </head>

  <body>

    <nav><?php include('navbar.php'); ?></nav>

    <div class="container-fluid">
      <div class="row">
          <aside>
              <?php $menu = "class='active'"; ?>
              <?php include('aside.php'); ?>
          </aside>

          <section id="konten">
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

              <form class="form" action="" method="POST">
                  <div class="form-group">
                      <label for="nama">Nama Menu</nama>
                      <input type="text" name="nama" class="form-control" placeholder="Nama menu" required>
                  </div>
                  <div class="form-group">
                      <label for="url">URL</nama>
                      <input type="text" name="url" class="form-control" placeholder="Inputkan URL" required>
                  </div>
                  <div class="form-group">
                      <label for="urutan">Urutan</nama>
                      <input type="number" name="urutan" class="form-control" placeholder="Urutan" required>
                  </div>
                  <div class="form-group">
                      <label for="Status">Status</nama>
                      <select name="status" class="form-control">
                          <option value="1">Aktif</option>
                          <option value="0">Non-aktif</option>
                      </select>
                  </div>

                  <div class="form-group">
                      <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                  </div>

              </form>

            </div>
          </section>

      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/holder.js"></script>
  </body>
</html>

<?php

// kode untuk menyimpan menu ke database
if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $url = $_POST['url'];
    $urutan = $_POST['urutan'];
    $status = $_POST['status'];

    // lakukan penyimpanan ke database
    $simpan = mysqli_query($koneksi, "INSERT INTO menu (nama,url,urutan,status) VALUES('$nama','$url','$urutan','$status')");

    if($simpan) {
        // berhasil tersimpan, arahkan ke tabel data artikel
        echo "<script>window.location = 'index.php'</script>";
    } else {
        // gagal menyimpan
        echo "Gagal menyimpan, suatu kesalahan terjadi!";
    }
}

} else {
    // suruh user login
    header('location: ../login.php');
}

?>
