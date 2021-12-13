<?php
$host = "localhost";
$username = "root";
$password = "";
$bdname = "espacemembre";
try {
    $connexion = new PDO("mysql:host=$host;dbname=$bdname", "$username", "$password");
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Echec de la connexion :" . $e->getMessage());
}
if (isset($_POST["ajoutMembre"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $telephone = $_POST["tel"];
    //verification si les champs sont vide
    if (!empty($nom) && !empty($prenom) && !empty($adresse) && !empty($telephone)) {
        $req = "INSERT INTO membres SET nom=?,prenom=?,adresse=?,telephone=?";
        $resultat = $connexion->prepare($req);
        $resultat->execute([$nom, $prenom, $adresse, $telephone]);

        header("location:../pages/listeMembre.php");
    } else {
        echo "Erreur de remplir le Formulaire ";
    }
}
