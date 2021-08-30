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
                <div class="col-xl-10 offset-xl-1 text-area">

                    <!------------------- ARTIKEL ------------------->
                    <?php

                        $query = mysqli_query($koneksi, "SELECT id, judul, penulis, isi, DATE_FORMAT(tanggal,'%Y-%m-%d %k:%i') as tanggal FROM artikel ORDER BY tanggal DESC");

                        // looping Artikel
                        while($artikel = mysqli_fetch_array($query)){
                            // echo "<div class='card'";
                            echo "<div class='text-box mb-4'>";
                            
                            echo "<div>";
                            echo "<a class='no-line' href='post.php?id=".$artikel['id']."' ><h2>".$artikel['judul']."</h2></a>";
                            echo "<p>Posted by <b>".$artikel['penulis']."</b> on ".$artikel['tanggal']."</p>";
                            echo "</div>";

                            echo "<div>";
                            echo substr($artikel['isi'], 0, 255);
                            echo "<br><br><a class='btn-solid-reg' href='post.php?id=".$artikel['id']."' />Read More</a>";
                            echo "</div>";

                            echo "</div>";
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