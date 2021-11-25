//<?php
//    $mysqli = new mysqli("89.46.111.94", "Sql1330362", "3b1hip8152", "Sql1330362_1");
//    //$resource = mysql_connect('89.46.111.94', 'Sql1330362', '3b1hip8152');
//    //mysql_select_db('Sql1330362_1', $resource);
//
//    if(!$mysqli){
//        echo("Errore connessione server");
//    }
//
//    //if(!mysql_select_db('Sql1330362_1', $resource)){
//    //    echo("Errore bd");    //errore nel collegamento
//    //}
//    echo("CIAOOOO");

//    $nome = $_POST['nome'];
//    $cognome = $_POST['cognome'];
//    $data = $_POST['data'];
//    $luogo = $_POST['luogo'];
//    $societa = $_POST['societa'];
//    $tipo = $_POST['tipo'];
//    $nt = $_POST['ntessera'];
//    $num = $_POST['cellulare'];
//    $sesso= 1;
    //echo($nome);
    // echo($cognome);
    //  echo($data);
//    $sql = "INSERT INTO Atleti_prova (nome, cognome, sesso, data, luogo, societa, tipo, numerotessera, cellulare) VALUES ('$nome', '$cognome','$sesso', '$data','$luogo', '$societa', '$tipo', '$nt', '$num')";
    
//    $res = mysqli_query($mysqli,$sql);
    
//    mysqli_close($mysqli);
    
//    header("refresh:0; url=index.html");
    
    
//    ?>


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
    
    echo($sesso);
    echo($nome);
    echo($cognome);
    echo($data);
    
    
    $sql = "INSERT INTO `Sql1330362_1`.`Atleti_prova` (`nome`, `cognome`, `sesso`, `data`, `luogonascita`, `societa`, `tipo`, `numero`, `cellulare`) VALUES ('$nome', '$cognome','$sesso', '$data' ,'$luogo', '$societa', '$tipo', '$nt', $num);";
    echo($sql);
    $result = $conn->query($sql);
    
    
    $conn->close();
    
    
    header("refresh:0; url=registrato.html?nome=$nome");
    
?>
