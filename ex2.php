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
$tabpays1=["Tunisie","Algérie","Egypte","France"];

echo "<table border='1'>";
echo "<tr><th>Pays</th>";
for ($i=0; $i<count($tabpays1); $i++){
    echo "<tr><td>$tabpays1[$i]</td></tr><br>";
}
echo "</table>";

$tabpays2=["Tunisie"=>"Tunis","Algérie"=>"Algiers","Egypte"=>"Caire","France"=>"Paris"];

ksort($tabpays2);
echo "<br>Liste des pays triée dans l'ordre croissant de capital<br>";
echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Capital</th></tr>";
foreach ($tabpays2 as $nom=>$cap) {
    echo "<tr><td>$nom</td><td>$cap</td></tr>";
}
echo "</table>";

krsort($tabpays2);
echo "<br>Liste des pays triée dans l'ordre décroissant de capital<br>";
echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Capital</th></tr>";
foreach ($tabpays2 as $nom=>$cap) {
    echo "<tr><td>$nom</td><td>$cap</td></tr>";
}
echo "</table>";



?>