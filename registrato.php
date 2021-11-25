
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        
        <!--- basic page needs
         ================================================== -->
        <meta charset="utf-8">
            <title>Arranca Botta</title>
            <meta name="description" content="">
                <meta name="author" content="">
                    
                    <!-- mobile specific metas
                     ================================================== -->
                    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                        
                        <!-- CSS
                         ================================================== -->
                        <link rel="stylesheet" href="css/base.css">
                            <link rel="stylesheet" href="css/vendor.min.css">
                                <link rel="stylesheet" href="css/main.css">
                                    
                                    <!-- script
                                     ================================================== -->
                                    <script src="js/modernizr.js"></script>
                                    
                                    <!-- favicons
                                     ================================================== -->
                                    <link rel="shortcut icon" href="faviconlogo.ico" >
                                        
                                        </head>
    
    <body>
        
        <!-- header
         ================================================== -->
        <header id="main-header" >
            
            <div class="row" style="margin-left:3%;">
                
                <div class="logo">
                    <a href="index.html">Arranca Botta</a>
                </div>
                <nav id="nav-wrap">
                    
                    <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
                        <span class="menu-icon">Menu</span>
                    </a>
                    <a class="mobile-btn" href="#" title="Hide navigation">
                        <span class="menu-icon">Menu</span>
                    </a>
                    
                    <ul id="nav" class="nav" style="padding-top:2%;">
                        <li><a class="smoothscroll" href="index.html">Home</a></li>
                    </ul> <!-- end #nav -->
                    
                </nav> <!-- end #nav-wrap -->
                <div class="" style="padding-top:22px; float:left; margin-left:5%;">
                    <a href="https://www.facebook.com/ArrancaBotta"><img src="fb.png" style="width:37px;"></a>
                    <a href="https://www.instagram.com/arranca_botta/"><img src="instagram.png" style="width:35px;"></a>
                </div>
                
                
            </div>
            
            
            
        </header> <!-- end header -->
        
        
        <!-- homepage hero
         ================================================== -->
        
        
        <?php
            $servername = "89.46.111.94";
            $username = "Sql1330362";
            $password = "3b1hip8152";
            $dbname = "Sql1330362_1";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        
        if ($_POST['gender'] == "male")
        $sesso="M";
        else if ($_POST['gender'] == "female")
        $sesso="F";
        
        
        
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $data = $_POST['data'];
        $luogo = $_POST['luogo'];
        $societa = $_POST['societa'];
        $tipo = $_POST['tipo'];
        $nt = $_POST['ntessera'];
        $num = $_POST['cellulare'];
        
            if ($_POST['societa'] =="")
            $societa="nc";
            
            if ($_POST['tipo'] =="")
            $tipo="nc";
            
            if ($_POST['ntessera'] =="")
            $nt="nc";
        
        $sql = "INSERT INTO `Sql1330362_1`.`Atleti_prova` (`nome`, `cognome`, `sesso`, `data`, `luogonascita`, `societa`, `tipo`, `numero`, `cellulare`) VALUES ('$nome', '$cognome','$sesso', '$data' ,'$luogo', '$societa', '$tipo', '$nt', '$num');";
        
        $result = $conn->query($sql);
        
        
        $conn->close();
        
        
        ?>

        <br> <br> <br> <br>
        <center><h2> <span style="color:yellow">Grazie! </span> Ricorda che per confermare l'iscrizione <span style="color:yellow">devi inviare via mail il certificato medico </span> valido! </h2></center> <br>

        <center><a href="mailto:arrancabotta@gmail.com?&subject=Certificato%20medico%20<?php echo($nome)?>%20<?php echo($cognome)?>" > <button name="nome"> Invia certificato (premi qui) </button></a>
        <center>

        
        <br>
        <center><h2>Riceverai una mail di conferma di iscrizione una volta verificato il certificato medico!</h2></center>
        <h3>Non riesci?</h3><h3>Invialo su WhatsApp ai contatti qui sotto!</h3>

        <h4>Il percorso è già stato tracciato con delle frecce segnaletiche!</h4>
        <h3> <span style="color:yellow">PROVALO!</span></h3>

        <center>Buon divertimento!</center>

        <!-- Testimonials Section
         ================================================== -->
        <section id="testimonials">
            
            <div class="row content flex-container">
                <h1 style="color:black;"> Contatti </h1>
                <div id="testimonial-slider" class="flexslider">
                    
                    <ul class="slides">
                        <li>
                            
                            <!--<p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is
                             to do what you believe is great work. And the only way to do great work is to love what you do.
                             If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.
                             </p>-->
                            
                            <div class="testimonial-author">
                                <img src="images/avatars/adri.jpg" alt="Adriano">
                                    <div class="author-info">
                                        Adriano Carminati
                                        <span class="position">340 2477864</span>
                                    </div>
                                    </div>
                        </li> <!-- end slide -->
                        
                        <li>
                            <!-- <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                             Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                             nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                             </p>-->
                            <div class="testimonial-author">
                                <img src="images/avatars/erik.jpg" alt="Erik">
                                    <div class="author-info">
                                        Erik Falgari
                                        <span>338 9668394</span>
                                    </div>
                                    </div>
                        </li> <!-- end slide -->
                        
                    </ul> <!-- end slides -->
                    
                </div> <!-- end flexslider -->
                
            </div> <!-- end row -->
            
        </section> <!-- end testimonials section -->
        
        
        <!-- contact
         ================================================== -->
        <!--<section id="contact">
         
         <div class="row section-head">
         
         <div class="twelve columns">
         
         <h1>Get In Touch With Us<span>.</span></h1>
         
         <hr />
         
         </div>
         
         </div>--> <!-- end section-head -->
        
        <!--<div class="row">
         
         <div id="contact-form" class="six columns tab-whole left">
         
         <!-- form -->
        <!--<form name="contactForm" id="contactForm" method="post" action=""  >
         <fieldset>
         
         <div class="group">
         <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minLength="2" required />
         </div>
         <div>
         <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required />
         </div>
         <div>
         <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject"  value="" />
         </div>
         <div>
         <textarea name="contactMessage"  id="contactMessage" placeholder="message" rows="10" cols="50" required ></textarea>
         </div>
         <div>
         <button class="submitform">Submit</button>
         <div id="submit-loader">
         <div class="text-loader">Sending...</div>
         <div class="s-loader">
         <div class="bounce1"></div>
         <div class="bounce2"></div>
         <div class="bounce3"></div>
         </div>
         </div>
         </div>
         
         </fieldset>
         </form> <!-- Form End -->
        
        <!-- contact-warning -->
        <!-- <div id="message-warning"></div>
         <!-- contact-success -->
        <!-- <div id="message-success">
         <i class="icon-ok"></i>Your message was sent, thank you!<br />
         </div>
         
         </div>
         
         <div class="six columns tab-whole right">
         
         <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
         
         <h3 class="address">Come Visit</h3>
         
         <p>
         1600 Amphitheatre Parkway<br>
         Mountain View, CA<br>
         94043 US
         </p>
         
         <h3>Contact Numbers:</h3>
         <p>Phone: (000) 555 1212<br>
         Mobile: (000) 555 0100<br>
         Fax: (000) 555 0101
         </p>
         
         </div>
         
         </div>--> <!-- end row -->
        
        <!--</section> --> <!-- end contact -->
        
        
        <!-- Footer
         ================================================== -->
        <footer>
            
            <div class="row">
                
                <div class="twelve columns content group">
                    
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/ArrancaBotta"><i class="fa fa-facebook-square"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                         <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                         <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                         <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                         <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                         <li><a href="#"><i class="fa fa-skype"></i></a></li>-->
                    </ul>
                    
                    <hr />
                    
                    <div class="info">
                        
                        <div class="footer-logo"></div>
                        
                        <p>Lo staff Arranca Botta vi ringrazia.
                        </p>
                        
                    </div>
                    
                </div>
                
                <ul class="copyright">
                    <li>&copy; Copyright 2015 KREO.</li>
                    <li>Design by <a href="http://www.styleshout.com/">Styleshout.</a>.</li>
                </ul>
                
                
                
            </div> <!-- end row -->
            
        </footer> <!-- end footer -->
        
        <div id="preloader">
            <div id="loader">
                <!--<img src="logoarra_DEF.png">-->
            </div>
            
        </div>
        
        <!-- Java Script
         ================================================== -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <script src="js/jquery.placeholder.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/main.js"></script>
        
    </body>
    
</html>
