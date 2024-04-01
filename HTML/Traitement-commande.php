<?php
// Création de la connexion
try {
    // Création de la connexion avec PDO
    $connexion = new PDO("mysql:host=localhost;dbname=Inscrit; charset=utf8mb4", 'root', '');
    echo "Connexion réussie à la base de données.";
} catch(PDOException $e) {
    // Gestion des erreurs de connexion
    die("La connexion à la base de données a échoué : " . $e->getMessage());
}

// Vérification de la connexion

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['contact']) && isset($_POST['email']) && isset($_POST['pays']) && isset($_POST['liste'])){
// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$pays = $_POST['pays'];
$ville = $_POST['ville'];
$liste = $_POST['liste'];
// Requête SQL pour insérer les données dans la table "commande"
$sql = "INSERT INTO commande (nom, prenom, contact, email, pays, ville, liste)
VALUES(:nom, :prenom, :contact, :email, :pays, :ville, :liste)";
        
$req = $connexion->prepare($sql);

$req->execute([
    ':nom' => $nom,
    ':prenom' => $prenom,
    ':contact' => $contact,
    ':email' => $email,
    ':pays' => $pays,
    ':ville' => $ville,
    ':liste' => $liste
]);
echo "ici";
echo "<label style='color: green;'>Les informations ont été ajoutés avec succès</label>";

}else{
    echo "Veuillez renseigner tous les champs";
}
?>