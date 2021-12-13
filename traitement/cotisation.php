<?php
include('../include/conexion.php');

if (isset($_POST['AjouteCotisation'])) {
    $date = $_POST['DateCotis'];
    $motif = $_POST['Motif'];
    $mois = $_POST['Mois'];
    $matricule = $_POST['Matricule'];
    $montant = $_POST['Montant'];

    //die($matricule);

    if (!empty($date) && !empty($motif) && !empty($mois) && !empty($matricule) && !empty($montant)) {

        $req = "INSERT INTO cotisations SET DateCotis=?, Mois=?, Motif=?, Montant=?, Matricule=?";
        $resultat = $connexion->prepare($req);
        $resultat->execute([$date, $mois, $motif, $montant, $matricule]);

        header('Location: ../pages/listeCotisation.php');
    } else {
        echo "les champs ne doivent pas être vide";
    }
}

if ($_GET['idsup']) {
    $id = $_GET['idsup'];

    $req = "DELETE FROM cotisations WHERE NumCotis=?";
    $resultat = $connexion->prepare($req);
    $resultat->execute([$id]);
    header('Location: ../pages/listeCotisation.php');
}

if ($_POST['recherche']) {


    die("ok");
}
