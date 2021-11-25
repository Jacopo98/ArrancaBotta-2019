
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

<script src="http://code.jquery.com/jquery-latest.js"></script>

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
<li><a class="smoothscroll">Area riservata </a></li>
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


<br> <br> <br> <br>
<center>


<section class="">



<h1> Corridori iscritti:<br />
</h1>
<div style="color:white">
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
    
    
    
    //
    $sql0="SELECT count(*) as tot FROM Atleti_prova";
    
    //$result = $conn->query($sql);
    //$resut0 = $conn->query($sql0);
    
    $result0 = $conn->query($sql0);
    
    while($row = mysqli_fetch_array($result0)){
        echo "ISCRIZIONI ATTUALI:  ". $row['tot'] ."";
    }
    
    
    ?>
</div>


<h2>  </h2>

<center><table style="color:white">
<tr><td><b>Nome      </b></td><td></td>   <td></td>  <td><b>Cognome</b></td>   </tr>

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
    
    
    $sql="select nome, cognome From Atleti_prova order by sesso, nome";
    $result = $conn->query($sql);
    while($cicle=mysqli_fetch_array($result)){
        echo "<tr><td>".$cicle['nome']."</td>   <td></td>  <td></td><td>".$cicle['cognome']."</td></tr>";
    }
    
    
    ?>
</table></center>

</section>

<a href="http://www.arrancabotta.it"><button name="nome"> TORNA ALLA HOME </button></a>


</center>




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



