<?php include ("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Webpage Title -->
    <title>Articles - akrab</title>
    <?php
    include "header.php";?>


    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Articles</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Content -->
    <article>
    <div class="ex-basic-1 pt-4 mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">

                    <!------------------- ARTIKEL ------------------->
                    <?php

                            if(isset($_GET['id']) && !empty($_GET['id'])){
                                $id = $_GET['id'];


                                $query = mysqli_query($koneksi, "SELECT * FROM artikel WHERE id='$id' ORDER BY tanggal DESC");

                                if(mysqli_num_rows($query) > 0 ){

                                    // looping Artikel
                                    while($artikel = mysqli_fetch_array($query)){
                                        echo "<div class='text-container";
                                        echo "<div class='text-container artikel-kop'>";
                                        echo "<h2><b>".$artikel['judul']."</b></h2>";
                                        echo "<p class='artikel-tanggal'>posted by <b>".$artikel['penulis']."</b>, on ".$artikel['tanggal']."</p>";
                                        echo "</div>";

                                        echo "<div class='artikel-isi'>";
                                        echo $artikel['isi'];
                                        echo "</div><hr/>";

                                    }
                                } else {
                                    include("404.php");
                                }

                            } else {
                                include("404.php");
                            }

                        ?>
                    <!------------------- END ARTIKEL --------------->
                </div>
            </div>
        </div>
    </div>

    </article>
    <!-- end of Content -->


    <?php
    include "footer.php";?>