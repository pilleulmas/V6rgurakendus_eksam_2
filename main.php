<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Hindamine</title>
	<link rel="stylesheet" type="text/css" href="stiil.css">
</head>
<body>
	<div id="p2is">
	</div>
	
	<div id="vorm">
		<form method="post" action="sisestus.php" name="sisu" id="f1">
			<input type="text" name="nimi" placeholder="Palun sisesta oma nimi" value="<?php if (isset($name)) echo $name;?>"/>
			<span class="error">* <?php if (isset($nameErr)) echo $nameErr;?></span><br/>
			<input type="number" name="hind" placeholder="Palun sisesta oma pakkumine" value="<?php if (isset($hind)) echo $hind;?>"/>
			<span class="error">* <?php if (isset($sisuErr)) echo $sisuErr;?></span><br/>
			<input type="submit" value="Teen pakkumise!" form="f1"/>
		</form>
	</div>
	<div id="kuva">
		<h1><?php include 'p2ring.php';?></h1>
	</div>
	<div id="kyss">
		<h2>Mida pakuksid sina sellise võimaluse eest?</h2>
	</div>
	<div id="pilt">
	<img src="eksam_2.JPG" alt="taust">
	</div>
</div>

</body>
</html>