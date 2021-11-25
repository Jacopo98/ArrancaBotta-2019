<html>
<head>


</head>
<body>


    <div id="sezione">
    ciaooo
    </div>



</body>
</html>


<?php
    //session_destroy();

    session_start();
   
    
    if (isset($_SESSION['login'])) {
        if (isset($_POST['logout'])) {
            unset($_SESSION['login']);
            // $messaggio = "Logout effettuato con successo! Arrivederci!";
        }
    }
    
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
    
    
    $userid=$_POST['username'];
    $password=$_POST['password'];
    
    
    //$_SESSION['userid']=$userid;
    //echo($_session["userid"]);
    //echo($password);
    
    $sql="select * From Amministratori where ID='$userid' and pass='$password'";
    
    $result = $conn->query($sql);
    
    
    $num_righe = mysqli_num_rows($result);
    
    if($num_righe > 0){
        
       
                    $_SESSION['login'] = "verificata";
                    header("Location: protetta.php");
        
        
    
    }
    else{
    header("location: areariservata.html");
    }
    
    
    ?>
