<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
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




<?php
$Notes= ["Rami"=>7.50, "Mohamed"=>19.00,"Amira"=>15.50,"Asma"=>10.00,
 "Ahmed"=>9.5,"Yassine"=>15.5, "Islem"=>12.00];

echo "les étudiants qui ont une moyenne>10 sont :<br>";
foreach ($Notes as $nom=>$moy){
    if($moy>=10){
        echo "$nom <br>";
    }
}

echo "<br>le nombre d'étudiants est: ". count($Notes);

echo "<br><br>les étudiants qui ont une bonne note sont :<br>";
foreach($Notes as $nom=>$moy){
    if($moy>=15){
        echo "$nom: $moy<br>";
    }
}

echo "<br>Liste des étudiants et de leurs notes en PHP<br>";
echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Note en PHP</th></tr>";
foreach ($Notes as $nom=>$moy) {
    echo "<tr><td>$nom</td><td>$moy</td></tr>";
}
echo "</table>";

asort($Notes);
echo "<br>Liste des étudiants et de leurs notes en PHP Triée selon notes<br>";
echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Note en PHP</th></tr>";
foreach ($Notes as $nom=>$moy) {
    echo "<tr><td>$nom</td><td>$moy</td></tr>";
}
echo "</table>";

ksort($Notes);
echo "<br>Liste des étudiants et de leurs notes en PHP Triée selon noms<br>";
echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Note en PHP</th></tr>";
foreach ($Notes as $nom=>$moy) {
    echo "<tr><td>$nom</td><td>$moy</td></tr>";
}
echo "</table>";

$moyenne=array_sum($Notes)/count($Notes);
echo "<br>La moyenne des notes est: $moyenne";
 ?>