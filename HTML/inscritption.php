<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="Traitement-inscrit.php" method="post">

<p><strong>INSCRIVEZ-VOUS</strong></p>

<div class="A1">
    <span> <i class="fa fa-user"></i></span>
    <input type="text" name="nom" class="from-control" placeholder="NOM">
</div>

<div class="A2">
<span> <i class="fa fa-user"></i></span>
    <input type="text" name="prenom" class="from-control" placeholder="PRENOM">

</div>

<div class="A3">
    <span> <i class="fa fa-enveloppe"></i></span>
    <input type="email" name="email" class="from-control" placeholder="EMAIL">
</div>

<div class="A4">
    <span> <i class="fa fa-enveloppe"></i></span>
    <input type="number" name="contact" class="from-control" placeholder="CONTACT">
</div>

<div class="A5">
    <span> <i class="fa fa-lock"></i></span>
    <input type="password" name="password" class="from-control" placeholder="MOT DE PASSE">
</div>
  <button type="buton" name="ok">S'INSCRIRE</button>

  <p>
    </form>

    <a href="connexion.php">CONNEXION</a>
</body>
</html>