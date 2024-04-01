<?php
error_reporting(E_ALL);
 ini_set("display_errors",1);
 // CONNEXION A LA BASE DE DONNEES
$bdd = new PDO('mysql:host=localhost;dbname=Inscrit','root','');


// tu peux laisser le controle de isset($_post['ok']) ou bien
// tu peux enléver

if (isset($_POST['ok'])) {
  // ICI ON RECUPERE LES VALEURS DES CHAMPS DU FORMULAIRE
    $email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']); 

  if(isset($email,$password) AND !empty($_POST['email'])){

    // VERIFIONS SI L'email que la personne à renseigner existe déjà dans la base de données
    $reqData = $bdd->prepare('SELECT count(*) as count FROM connexion WHERE email = ?');
    $reqData->execute(array($email));
    $resultat = $reqData->fetch();
    

        if ($resultat['count']>0) {
                $passwordVerify=password_verify ($password,$resultat ['passsword']);
                if ($passwordVerify)  {
                    $_SESSION ['nom']=$resultat ['nom'];

                    echo $_SESSION['nom'];
                    header('LOCATION:index.php');
                    exit;
                } else {
                    echo 'Mot de passe incorrect';
                }
                 } else {
                    echo 'Le mail n\'existe pas'; 
                 } else  {
                    echo 'Vueillez remplir tous les champs';
                 }
                
}

}


?>