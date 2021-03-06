<?php 
  error_reporting(0);
  session_start();	
  include "config/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Webpage Title -->
    <title>akrabProject</title>
    <?php include "header.php";?>
    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="" src="images/header-logo.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <!-- <h1>We're a digital product agency</h1> -->
                        <h1>Good design is Good business</h1>
                        <a class="btn-solid-lg page-scroll" href="#details">Discover</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <div class="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Card -->
                        <div class="card">
                            <div class="card-image">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Branding & strategy</h5>
                                <div class="card-text">To build a solid foundation for your online shop you need a strong brand and a bulletproof strategy</div>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-image">
                                <i class="fas fa-pencil-ruler"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Design & development</h5>
                                <div class="card-text">Our team of competent designers and developers are able to create beautiful designs and structured code</div>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-image">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Digital marketing</h5>
                                <div class="card-text">We can deliver a comprehensive marketing plan and then execute it down to the smallest details</div>
                            </div>
                        </div>
                        <!-- end of card -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of services -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Details 1 -->
    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2>Branding & strategy</h2>
                        <hr class="hr-heading">
                        <p>To build a solid foundation for your business you need a strong brand and a bulletproof strategy. You can rely on our experience to create a beautiful and profitable business</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Delivering powerful brands</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Creating beautiful concepts and evocative logos</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Preparing complete branding guides and styles</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Speedy delivery of marketing design assets</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-1.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->


    <!-- Details 2 -->
    <div class="basic-2">
        <div class="container-fluid">
            <div class="row">
                <div class="image-area">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-2.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of image-area -->
                <div class="text-area">
                    <div class="text-container">
                        <h2>Design & development</h2>
                        <hr class="hr-heading">
                        <p>Our team of competent designers and developers are able to create beautiful designs and structured code that will serve your ecommerce project to establish your market position and increase revenues</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox">Build Now</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of text-area -->
            </div> <!-- end of row -->
        </div> <!-- end of container-fluid -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 2 -->


    <!-- Details Lightbox -->
    <!-- Lightbox -->
	<div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">??</button>
			<div class="col-lg-8">
                <div class="image-container">
                    <img class="img-fluid" src="images/details-lightbox.jpg" alt="alternative">
                </div> <!-- end of image-container -->
			</div> <!-- end of col -->
			<div class="col-lg-4">
                <h3>Goals Setting</h3>
				<hr>
                <p>The app can easily help you track your personal development evolution if you take the time to set it up.</p>
                <h4>User Feedback</h4>
                <p>This is a great app which can help you save time and make your live easier. And it will help improve your productivity.</p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Splash screen panel</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Statistics graph report</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Events calendar layout</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Location details screen</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Onboarding steps interface</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#contact">Contact Us</a> <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
			</div> <!-- end of col -->
		</div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details lightbox -->


    <!-- Details 3 -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2>Digital marketing</h2>
                        <hr class="hr-heading">
                        <p>We can deliver a comprehensive marketing plan and then execute it down to the smallest details. Our marketing specialist will also conduct evaluations regularly and advise you</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Marketing plan for 6 months with evaluation</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Email campaigns for the existing customers</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Remarketing campaigns to reduce cart abandon</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Loyalty programs for your favorite clients</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-3.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of details 3 -->


    <!-- Mission -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="text-container">
                    <h4>Our mission is to deliver reliable solutions together with the necessary consulting and marketing services which will help customers achieve long term market stability</h4>
                </div> <!-- end of text-container -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of mission -->


    <!-- Strengths -->
    <div id="strengths" class="basic-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <div class="bullet">1</div>
                            <div class="media-body">
                                <h4>Specialized expertise</h4>
                                <p>We've been deploying successful companies for about 3 years and we've made it our mission to provide the best digital design services in the industry. Besides the design itself we also provide branding and strategy services to create solid foundations our customers online projects</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="bullet">2</div>
                            <div class="media-body">
                                <h4>Akrab group</h4>
                                <p>Our partnership with local business enables us to spread wings remote corners. We're in permanent communication with the Professional design and development team so we can solve any difficult situations that can occur after major updates</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="bullet">3</div>
                            <div class="media-body">
                                <h4>Timely delivery</h4>
                                <p>We take pride in delivering projects before the deadline to extend the pre-launch testing period. This ensures a smooth user experience and it also helps with bringing visitors back. You can check out or <a class="red page-scroll" href="#projects">projects section</a> below to hear straight from our customers what they think about us</p>
                            </div>
                        </li>
                    </ul>
                </div> <!-- end of col-lg-12 -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-5 -->
    <!-- end of strengths -->


    <!-- Projects -->
    <div id="projects" class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">      
                    
                    <!-- Text Slider -->
                    <div class="slider-container">
                        <div class="swiper-container text-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="image-container">
                                                <img class="img-fluid" src="images/project-1.jpg" alt="alternative">
                                            </div> <!-- end of image-container -->
                                        </div> <!-- end of col -->
                                        <div class="col-lg-6">
                                            <div class="text-container">
                                                <h4>Online retailer shop</h4>
                                                <p>We were proud to partner with Online Retailer in order to create a modern online store where customers can purchase some of the best items from the market at affordable prices</p>
                                                <p class="testimonial-text">"I am happy to have chosen akrabProject for our business consultant. Their specialized experience helped the project and made it available 2 weeks prior the launch date for extensive testing"</p>
                                                <div class="testimonial-author">Alan Smith - General Manager</div>
                                            </div> <!-- end of text-container -->
                                        </div> <!-- end of col -->
                                    </div> <!-- end of row -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="image-container">
                                                <img class="img-fluid" src="images/project-2.jpg" alt="alternative">
                                            </div> <!-- end of image-container -->
                                        </div> <!-- end of col -->
                                        <div class="col-lg-6">
                                            <div class="text-container">
                                                <h4>Profile site</h4>
                                                <p>We were proud to partner with company or ersonal in order to create a modern online store where customers can purchase some of the best items from the market at affordable prices</p>
                                                <p class="testimonial-text">"I am happy to have chosen akrabProject for our business consultant. Their specialized experience helped the project and made it available 2 weeks prior the launch date for extensive testing"</p>
                                                <div class="testimonial-author">Irfan Traore - Sales Manager</div>
                                            </div> <!-- end of text-container -->
                                        </div> <!-- end of col -->
                                    </div> <!-- end of row -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="image-container">
                                                <img class="img-fluid" src="images/project-3.jpg" alt="alternative">
                                            </div> <!-- end of image-container -->
                                        </div> <!-- end of col -->
                                        <div class="col-lg-6">
                                            <div class="text-container">
                                                <h4>Coffee shop branding</h4>
                                                <p>We were proud to partner with local business in order to create a comfortable atmosphere where customers can purchase some of the best items from the market at affordable prices</p>
                                                <p class="testimonial-text">"I am happy to have chosen akrabProject for our business consultant. Their specialized experience helped the project and made it available 2 weeks prior the launch date for extensive testing"</p>
                                                <div class="testimonial-author">Nicole Richter - Development Manager</div>
                                            </div> <!-- end of text-container -->
                                        </div> <!-- end of col -->
                                    </div> <!-- end of row -->
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->
                            
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of text slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of projects -->


    <!-- About -->
    <div id="about" class="basic-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container bg-gray">
                        <h2>About our team</h2>
                        <p>We are a group of designers, developers and marketers specialized in Akrabun Family. We've designed many business plan in past 3 years</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-circle"></i>
                                <div class="media-body">We love what we do and have a lot of passion</div>
                                <i class="fas fa-circle"></i>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                    <div class="image-container">
                        <img class="img-fluid" src="images/team.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-6 -->
    <!-- end of about -->


    <!-- Invitation -->
    <div class="basic-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>We invite you to book a consultation call with one of our Key Account Managers and we guarantee it will not be a waste of time</h4>
                    <a class="btn-solid-lg page-scroll" href="#contact">Book Consultation</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-7 -->
    <!-- end of invitation -->


    <!-- Contact -->
    <div id="contact" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Book consultation</h2>
                    <p class="p-heading">Don't hesitate to give us a call or just use the contact form below</p>
                    <ul class="list-unstyled li-space-lg">
                        <li><i class="fas fa-map-marker-alt"></i> &nbsp;Jl. Perintis Kemerdekaan VII, Tamalanrea, Makassar</li>
                        <li><i class="fas fa-phone"></i> &nbsp;<a href="tel:+6281245002930">+62 812 4500 2930</a></li>
                        <li><i class="fas fa-envelope"></i> &nbsp;<a href="mailto:contact@site.com">projectakrab@gmail.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Contact Form -->
                    <form id="contactForm">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Submit</button>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of contact -->

<?php
include "footer.php";?>