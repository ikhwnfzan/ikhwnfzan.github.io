<?php
session_start();

if(isset($_SESSION['username'])){

    include('../../connection.php');

?>
<!-- Tampilkan halaman damin -->

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

    <nav><?php include("navbar.php"); ?></nav>

    <div class="container-fluid">
      <div class="row">
          <aside>
              <?php $artikel = "class='active'"; ?>
              <?php include('aside.php'); ?>
          </aside>

          <section id="konten">
              <?php include('data_artikel.php'); ?>
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
    // suruh user login
    header('location: ../login.php');
}

?>
