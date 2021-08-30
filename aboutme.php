<?php include ("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Webpage Title -->
    <title>About Me - akrab</title>
    <?php
    include "header.php";?>


    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>About Me</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Content -->
    <div class="ex-basic-1 p-3 ">
        <div class='container d-flex justify-content-center'>
            <div class="row">
                <div class="col-lg-12" style='text-align:center;!important'>
                    <div class="text-box card m-4">

                        <!------------------- ABOUT ------------------->
                        <div class='p-4 text-area'>
                            <img src="images/profil1.jpg" class ='card-image' style="height:300px;border-radius:50%;">
                            <h4 class='pt-3'>Ikhwan Fauzan</h4>
                            <h5>202031</h5>
                            <h6>6TADW-F / Teknik Informatika</h6>
                        </div>
                        <div class='m-2 lead text-left'>
                            <table>
                                <tr>
                                <td><i class='fab fa-whatsapp'></i></td>
                                <td><a href="tel:081235002930" target="_blank" class='ml-2 no-line' >+62 812-4500-2930 </a></td>
                                </tr>
                                <tr>
                                <td><i class='fab fa-mailchimp'></i> </td>
                                <td><a href="mailto:ikhwanfauzan15@gmail.com" target="_blank" class='ml-2 no-line' >ikhwanfauzan15@gmail.com</a></td>
                                </tr>
                                <tr>
                                <td><i class='fab fa-linkedin'></i> </td>
                                <td><a href="http://linkedin.com/in/ikhwanfauzan/" target="_blank" class='ml-2 no-line' >Ikhwan Fauzan</a></td>
                                </tr>
                                <tr>
                                <td><i class='fab fa-instagram'></i> </td>
                                <td><a href="https://instagram.com/ikhwnfzan/" target="_blank" class='ml-2 no-line' >@ikhwnfzan</a></td>
                                </tr>
                            </table>
                    </div>


                        <!------------------- END ABOUT --------------->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of Content -->


    <?php
    include "footer.php";?>