<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/styles.php">
	<title>Date !</title>
</head>
<body>
	<div>
		<p> Date format dd/mm/aaaa : 
			<?php
			echo date("d/m/Y");
			?>
		</p>
	</div>
	<div>
		<p> Date format dd-mm-aa : 
			<?php
			echo date("d-m-y");
			?>
		</p>
	</div>
	<div>
		<p> Date avec jour en toute lettre et mois en toute lettres : 
			<?php
			setlocale(LC_TIME, 'fr_FR.utf8','fra');
			echo strftime("%A %d %B %Y");
			?>
		</p>
	</div>
	<div>
		<p>Timestamp du jour : <?php
		echo date("U");
		?>
		<br>
		Timestamp du 2 Aout 2016 à 15H00 :  <?php
		echo mktime("15","0","0","08","02","2016");
		?>
	</p>
</div>
<div>
	<p>Nombre de jours nous séparant du 16 Mai 2016 : <?php
	$date1 = date_create("2016-05-16");
	$date2 = date_create(date("Y-m-d"));
	echo date_diff($date1,$date2)->format("%a jours");
	?>	
</p>
</div>
<div>
	<p>Nombre de jours du mois de Fevrier 2016 : <?php
	echo cal_days_in_month(CAL_GREGORIAN,2,2016);
	?>
</p>
</div>
<div>
	<p>Date du jour + 20 jours : <?php
	echo date("d-m-Y",mktime(date("m-d-Y"))+24*3600*20);
	?><br>
	Date du jour -22 jours : <?php
	echo date("d-m-Y",mktime(date("m-d-Y"))-24*3600*22);
	?>
</p>
</div>
</body>
</html>