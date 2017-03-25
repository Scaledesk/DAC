<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Desi Atta </title>
    <meta name="description" content="">

    <meta name="keywords" content="">

    <meta name="robots" content="noindex,nofollow">

    <meta name="author" content="Desi Atta">


    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#e94c45">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/animate.css">


    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- OWl Carousel -->
    <link rel="stylesheet" href="css/owl.theme.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>


    <link rel="stylesheet" href="css/bootstrap.min.css">


    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap-theme.min.css">



    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <link rel="stylesheet" href="css/main.css">

</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<!--///////////////////////////////////////////////////////////////////////////////////////////
                                    Navigation
//////////////////////////////////////////////////////////////////////////////////////////-->

<div id="header-section">
    <nav class="navbar navbar-default custom-nav navbar-fixed-top">
        <div class="top-header">
            <p class="text-right">
                <select name="" id="">
                    <option value="">Select Your Language</option>
                    <option value="">English</option>
                    <option value="">Hindi</option>
                </select>
            </p>
        </div>


        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand custom-brand visible-xs " href="index.html">
                    <img src="img/logo.png" alt="" width="80%" class="header-logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown-toggle" id="menu1" data-toggle="dropdown"><a href="#">Our Products</a></li>

                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="product-category-atta.html">Single Grain</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="product-category-readymix.html">Ready Mix</a></li>

                        </ul>

                    <li><a href="recipe-display.html">Food Experiments</a></li>
                    <li><a href="about-dac.html">About Us</a></li>
                    <li class="text-center">
                        <a class="navbar-brand custom-brand p-10 visible-lg visible-md visible-sm " href="index.html">
                            <img src="img/logo.png" alt="" width="80%" class="header-logo">
                        </a>
                    </li>
                    
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="#" style="padding-right: 0">Store Locator</a><span style="position:absolute;top:60%;left:20%;font-size:12px;">(Coming Soon)</span></li>
                    


                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>



<!--///////////////////////////////////////////////////////////////////////////////////////////
                                 Contact us Section
//////////////////////////////////////////////////////////////////////////////////////////-->

<section id="contact-us-section">
    <div class="container">
        <div class="row">
            <div class="contact-banner">
                <!--<h1 class="text-center">For Any Queries Write us at example@examole.com</h1>-->
            </div>
        </div>



        <div class="row contact-bg">
            <div class="col-md-6">
                <form action="PHPMailer/MailFunction.php" method="post">
                    <h3>Contact us</h3>
                    
                     <?php 
                         
                        echo $_REQUEST['msg']; 

                        ?>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
<!--                                <label for="First name">First Name</label>-->
                                <input type="text" class="form-control" name="fname" required placeholder="First Name" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
<!--                                <label for="Last name">Last Name</label>-->
                                <input type="text" class="form-control" required name="sname" placeholder="Last Name" />
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
<!--                                <label for="Email">Email</label>-->
                                <input type="email" class="form-control" name="email" required placeholder="Email" />
                            </div>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group"> 
<!--                                <label for="Phone Number">Phone Number</label>-->
                                <input type="Number" required name="phone" class="form-control" placeholder="Phone Number" />
                            </div>
                        </div>


                    </div>


                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
<!--                                <label for="message">Message</label>-->
                                <textarea  cols="10" rows="3" name="message" class="form-control" placeholder="Write Your Message"></textarea>
                            </div>
                        </div>


                    </div>


                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button class="contact-btn" type="submit">Submit</button>
                       
                       
                    </div> 
                    </div>


                </form>

            </div>
            
            
            <div class="col-md-6 contact-info">
               <p>For trade enquiries, feedback / complaint , please write to our Customer Care Manager</p> <br>
<p><i class="fa fa-envelope"></i> &nbsp;Email &nbsp;: <a href="mailto:care@futureconsumer.in">care@futureconsumer.in </a></p><br>
<p><i class="fa fa-phone"></i> &nbsp; Toll free number&nbsp;:&nbsp;<a href="tel:18002100060">1800 210 0060</a>  </p>
                
            </div>
        </div>
        

    </div>

</section>








<!--///////////////////////////////////////////////////////////////////////////////////////////
                                 Footer
//////////////////////////////////////////////////////////////////////////////////////////-->

<section id="footer-section">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="img/footer-logo.png" alt="">
                    <p>At Desi Atta Company, our primary aim is to offer convenient products to our customers while never compromising on quality. We ensure that only the finest ingredients are used in making our products so as to offer the tastiest and healthiest products to our consumers. We are firmly committed to being a
                        catalyst of positive change in the life of every family member.</p>

                </div>

                <div class="col-md-6">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-right footer-links">
                                <p><a href="product-category-atta.html">Single Grain</a></p>
                                <p><a href="product-category-readymix.html">Ready Mix</a></p>
                                <p><a href="recipe-display.html">Recipes</a></p>
                                <p><a href="">Blog</a></p>
                                <p><a href="">Store Locator</a></p>
                                

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="text-right footer-links">
                               <p><a href="about-dac.html">About</a></p>
                               <p><a href="contact.php">Contact</a></p>
                                <p><a href="terms-and-conditions.html">T&amp;C</a></p>
                                <p><a href="terms-and-conditions.html">Privacy Policy</a></p>
                                <p><a href="#">Future Group</a></p>
                                
                                
                                

                            </div>
                        </div>


                    </div>



                </div>


            </div>

            <hr>
            <div class="copyright">
                <div class="row">
                    <div class="col-md-4">
                        <p>Designed with <i class="fa fa-heart"></i> at KreativStreet</p>
                    </div>


                    <div class="col-md-4 text-right">
                        <div class="input-group">
                           <form action="PHPMailer/MailFunction.php" method="post">
                            <input type="email" placeholder="Enter Email id" name="email" class="form-control subscribe-field" />
                               
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" style="    background: #c7ae92;
    color: #fff;
    text-shadow: none;">Sign Up</button>
                              </form>
                               
                                </span>
                            
                        </div>
                        <p class="info-under">Get Offers &amp; Recipies via e-Mail</p>
                    </div>
                    
                    <div class="col-md-4">
                        <ul class="social-list">
                            
                            
                            <li><a target="_blank" href="https://twitter.com/desiattacompany"><i class="fa fa-twitter"></i></a></li>
                            
                            <li><a target="_blank" href="https://www.instagram.com/desiattacompany/"><i class="fa fa-instagram"></i></a></li>
                            
                            <li><a target="_blank" href="https://www.youtube.com/channel/UCTpey4eiAsn1sYi4pGLGzag"><i class="fa fa-youtube"></i></a></li>
                            
                            <li><a target="_blank" href="https://www.facebook.com/DesiAttaCompany"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>


                    

                </div>

            </div>


        </div>
    </footer>
</section>





<script src="https://use.fontawesome.com/d4bfffe885.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!--<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>-->

<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

<!-- <script src="js/vendor/isotope.min.js"></script>-->

<!-- <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>-->
<script src="js/jquery.filterizr.js"></script>


<script>
    $(document).ready(function(){

        $(function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
        });

        $(function() {
            //Simple filter controls
            $('.simplefilter li').click(function() {
                $('.simplefilter li').removeClass('active');
                $(this).addClass('active');
            });
            //Multifilter controls
            $('.multifilter li').click(function() {
                $(this).toggleClass('active');
            });
            //Shuffle control
            $('.shuffle-btn').click(function() {
                $('.sort-btn').removeClass('active');
            });
            //Sort controls
            $('.sort-btn').click(function() {
                $('.sort-btn').removeClass('active');
                $(this).addClass('active');
            });
        });


        $("div#fb").click(function(){
//            alert(123);
            event.preventDefault();
//        $('html,body').animate({scrollTop:0}, 'slow') ;
            $('html,body').animate({scrollTop:$('#fb').offset().top - 95}, 'slow') ;
            return false;
        });

    });


</script>





<script src="js/main.js"></script>




<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!--
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
-->


<script>
    $(document).ready(function(){
        $('.slider').slick({
            dots: false,
            infinite: true,
            speed: 600,
            fade: true,
            cssEase: 'linear',
            autoplay: true

        });
    });




</script>


<!--
<script>
    $(document).ready(function(){F
        $(".owl-carousel").owlCarousel();
    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

</script>
-->





</body>
</html>
