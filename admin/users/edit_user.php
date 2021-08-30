<?php
session_start();

if(isset($_SESSION['username'])){

    include('../../connection.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        // tampilkan form edit
        include('../../connection.php');

        // ambil data dari database
        $id = $_GET["id"];
        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id=$id");
        if(mysqli_num_rows($query) > 0){
            $mn = mysqli_fetch_assoc($query);
        } else {
            // artikel tidak ada di dabase
            echo "<script>window.location = 'index.php'</script>";
        }

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
              <?php $user = "class='active'"; ?>
              <?php include('aside.php'); ?>
          </aside>

          <section id="konten">
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

                <form class="form" action="" method="POST">
                    <div class="form-group">
                        <label for="username">Username</nama>
                        <input type="text" name="username" class="form-control" placeholder="Username" required value="<?php echo $mn['username']; ?>">
                    </div>
                    <div class="form-group" >
                        <label for="password">Password</nama>
                        <input type="text" id ="password" name="password" class="form-control" placeholder="Password" info>
                        <!-- <div id="tip" class="hidden">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaome Useful Message</div> -->
                    </div>
                    <div class="form-group">
                        <label for="nama-lengkap">Nama Lengkap</nama>
                        <input type="text" name="nama-lengkap" class="form-control" placeholder="Nama Lengkap" required value="<?php echo $mn['nama_lengkap']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</nama>
                        <input type="text" name="email" class="form-control" placeholder="Email" required value="<?php echo $mn['email']; ?>">
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $mn['id']; ?>" />
                        <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    </div>

                </form>

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

    } else {
        // arahkan ke halaman data artikel
    }

    // kode untuk menyimpan menu ke database
    if(isset($_POST['simpan'])){

        $username = $_POST['username'];
        $pass = ($_POST['password']);
        $nama_lengkap = $_POST['nama-lengkap'];
        $email = $_POST['email'];
        if($pass == ''){
            $password = $mn['password'];
        }else{
            $password = md5($_POST['password']);
        }

        // lakukan penyimpanan ke database
        $simpan = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', nama_lengkap='$nama_lengkap', email='$email' WHERE id=$id");

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
