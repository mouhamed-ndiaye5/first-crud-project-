<?php

require_once "process.php";
require_once __DIR__.'/../error.php';
if (isset($_GET['ID'])){
    if(session_status()===PHP_SESSION_NONE){
        session_start();
    }
    $id = $_GET['ID'];
    
    $nom = $_SESSION['NOM'];
    $prenom = $_SESSION['PRENOM'];
    echo "BONJOUR $prenom $nom";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <form action="process.php" method="post">
        <button class="btn btn-primary" name="deconnecter">Se deconnecter</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>
