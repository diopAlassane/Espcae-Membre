<?php
include('../include/conexion.php');

if (isset($_POST['ModifierPaiement'])) {
    $id = $_POST['id'];
    $date = $_POST['DateCotis'];
    $motif = $_POST['Motif'];
    $mois = $_POST['Mois'];
    $montant = $_POST['Montant'];

    $req = "UPDATE cotisations SET DateCotis=?, Mois=?, Motif=?, Montant=? WHERE NumCotis=?";
    $resultat = $connexion->prepare($req);
    //die($montant);
    $resultat->execute([$date, $mois, $motif, $montant, $id]);

    header('Location: ../pages/listeCotisation.php');
}
