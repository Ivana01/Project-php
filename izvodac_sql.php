<?php
include("pdo.php");

if($_POST["id"] > 0 && $_POST["submit"] == "Odustani"){
	header("Location:izvodac.php");
}

if($_FILES["slika"]["name"]){
	$putanja = "slike/"; 
	move_uploaded_file($_FILES["slika"]["tmp_name"], $putanja . $_FILES["slika"]["name"]);
	$uploadana_slika = $_FILES["slika"]["name"];
	header("Location:izvodac.php");
}
else{
	$uploadana_slika = $_POST["slika"];
	header("Location:izvodac.php");
}

if($_POST["id"] > 0 && $_POST["submit"] == "Dodaj/Uredi" ){
	$upit = $db->query("UPDATE azil SET 
		ime = '" . $_POST["ime"] . "',
		datum = '" . $_POST["datum"] . "',
		pjesma = '" . $_POST["pjesma"] . "',
		slika = '" . $_POST["slika"] . "'
		WHERE
		id = " . $_POST["id"] . "
		");
	header("Location:izvodac.php");
}
elseif($_POST["id"] > 0 && $_POST["submit"] == "Potvrdi" ){
	$upit = $db->query("DELETE FROM azil WHERE id = " . $_POST["id"]);
	header("Location:izvodac.php");
}
elseif($_POST["id"] == 0){
	$upit = $db->query("INSERT INTO izvodac 
		(ime, datum, pjesma, slika)VALUES
		('" . $_POST["ime"] . "',
		'" . $_POST["datum"] . "',
		'" . $_POST["pjesma"] . "',
		'" . $_POST["slika"] . "')
		");
	header("Location:izvodac.php");
}

?>