<?php

    if(isset($_GET["id"]) && !empty($_GET['id'])){
        // hapus artikel
        include("../../connection.php");
        $id = $_GET["id"];
        $query = mysqli_query($koneksi, "DELETE FROM user WHERE id=$id");

        if($query) {
            // arahkan ke data artikel
            echo "<script> window.location = 'index.php'</script>";
        } else {
            // tampilkan pesan error
            die("Gagal menghapus: " . mysqli_error($koneksi));
        }

    } else {
        // arahkan ke data artikel
        header("location: index.php");
    }

?>
