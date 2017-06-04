<?php 
	
	
    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";
    $l = mysqli_connect($host, $user, $pass, $db);
    
	$sql1 = "SELECT Max(hind) AS maxhind FROM pulmas_eksam_2";
	$tulem = $l->query($sql1);
	$row = $tulem->fetch_assoc();
			if ($tulem->num_rows > 0) {
				$maxhind = $row["maxhind"];
			}
	$sql2= "SELECT Nimi, hind FROM pulmas_eksam_2 WHERE hind=".$maxhind;
	$result = $l->query($sql2);
	if ($result->num_rows > 0) {
		 // output data
		$row = $result->fetch_assoc() ;
			 echo "<br>Parim pakkuja ". $row["Nimi"]. " pakkus hinnaks " . $row["hind"] . " eurot<br>";
	} else {
		 echo "0 results";
	}
	//mysqli_query($l, $sql1);
	
    mysqli_close($l);
	?>