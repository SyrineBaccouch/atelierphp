<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ISET RADES</font></font></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Basculer la navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
      <li class="nav-item">
          <a class="nav-link" href="ex1.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Exercice 1</font></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ex2.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Exercice2</font></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ex4.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Exercice 4</font></font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ex5.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Exercice 5</font></font></a>
       
    </div>
  </div>
</nav>
    <div class="container mt-3">
    <h1>liste des etudiants</h1>

<?php
$tab=['etudiant1'=>'foulen ben foulen1',
'etudiant2'=>'foulen ben foulen2',
'etudiant3'=>'foulen ben foulen3',
'etudiant4'=>'foulen ben foulen4'];
?>
<table class="table">
    <tr class="table-success">
        <?php 
        foreach($tab as $key => $value){
            echo "<th>$key</th>";
        }
        ?>
    </tr>
    <tr>
        <?php 
        foreach($tab as $value){
            echo "<td>$value</td>";
        }
        ?>
    </tr>
</table>
</div>
</body>
</html>


