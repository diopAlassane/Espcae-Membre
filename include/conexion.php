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
