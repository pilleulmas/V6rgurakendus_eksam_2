<?php 
$nameErr = $sisuErr = "";
$name = $sisu = "";
	if (empty($_POST["nimi"])){
		$nameErr = "kasutajanimi puudub!";
		$sisu = ($_POST["hind"]);
		include ('main.php');
		die();
	} else {
		$name= ($_POST["nimi"]);
	}
	if (empty($_POST["hind"])){
		$sisuErr = "hind puudu!";
		include ('main.php');
		die();
	} else {
		$sisu = ($_POST["hind"]);
	}
	
    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";
    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, "SET CHARACTER SET UTF8") or
            die("Error, ei saa andmebaasi charsetti seatud");
	
	$sql = "INSERT INTO pulmas_eksam_2 (Nimi, hind)
	VALUES ('" . $_POST["nimi"] . "', '" . $_POST["hind"] . "')";
	
	mysqli_query($l, $sql);
    mysqli_close($l);
	
	header("Location: main.php");
	die();
?>