<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
 
    <title>AJOUTER UN ETUDIANT</title>
</head>
<body style=" background-size: cover; background-position: center; height: 100vh;">
    <br> <br><br><br>
    <center><h1 style="font-family: TIMES NEW ROMAN;">BIENVENUE DANS LA PAGE AJOUTER UN ETUDIANT</h1></center><br>

    <!-- FORMULAIRE -->
 <center class = "#" style="border: 2px solid white; padding: 30px; border-radius: 45px; width: 499px; margin: auto; background: rgba(243, 236, 236, 0.49); ">
    <h2 style="font-family: TIMES NEW ROMAN; font-size: 30px; margin-bottom: 30px; color: #beb666ff;">AJOUTER UN ETUDIANT</h2>
  
<form action="process.php" method="post" style ="width: 430px; font-family: TIMES NEW ROMAN; font-size: 20px; ">
    

  <!-- EMAIL -->
    <label style="display: block; margin-bottom: 5px;">EMAIL</label>
    <div style="margin-bottom: 20px; display: flex; align-items: center; background: #beb666ff; border-radius: 10px;"  class="mb-3">
     
      <input type="email" name="email" placeholder="" required
        style="flex: 1; padding: 10px; border: none; border-radius: 10px; background: transparent; color: #020202ff;"><br>
    </div>

 <!-- DATE DE NAISSANCE -->
    <label style="display: block; margin-bottom: 5px;">MOT DE PASSE</label>
    <div style="margin-bottom: 20px; display: flex; align-items: center; background: #beb666ff; border-radius: 10px;"  class="mb-3">
     
      <input type="password" name="password" placeholder="" required
        style="flex: 1; padding: 10px; border: none; border-radius: 10px; background: transparent; color: #020202ff;"  > <br>
    </div> 
    <div style="margin-bottom: 20px; display: flex; align-items: center; "  class="mb-3">
     
    
    </div>
  

  <!-- Login Button -->
    <button type="submit" name="connecter"
      style="width: 100%; padding: 12px; border: none; border-radius: 10px; background-color: #beb666ff; color: white; font-weight: bold; cursor: pointer; transition: background 0.3s;">
      Se connecter
    </button>
</form>  <div style="margin-bottom: 20px; display: flex; align-items: center; "  class="mb-3">
     
    
    </div>
    <?php
if (isset($_GET['error'])){
  echo "<p class = 'alert alert-danger alert-dismissible'>Ce compte n'existe pas <button class = 'btn-close' data-bs-dismiss='alert' aria-label='close'></button></p>";
}
?>
</center>
<br><br>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>

