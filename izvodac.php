<?php include("pdo.php"); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="right-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="" id="logo">Izvođači</a></h1>
							</header>
						</div>

					<!-- Nav -->
						<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="naslovna.php">Naslovna</a></li>
								<li><a href="onama.php">O nama</a></li>
								<li><a href="izvodac.php">Izvođači</a></li>
								<li><a href="galerija.php">Galerija</a></li>
							</ul>
						</nav>

				</div>
			<!-- Main -->



			<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<div class="8u 12u(narrower)">
								<div id="content">
				<!--php -->
		<div class="row medium-10 large-8 columns">
			
		<?php 
			$query = $db->query("SELECT * FROM izvodac order by ime asc");
			$projekt = $query->fetchAll();
		?>

		<table align="center">
			<tr>
				<th style="border-bottom:#333 solid 2px" colspan="2">Datum</th>
				<th style="border-bottom:#333 solid 2px">Ime i prezime izvođača</th>
				<th style="border-bottom:#333 solid 2px"><a href="izvodac_forma.php">novo</a></th>
				<th style="border-bottom:#333 solid 2px">&nbsp;</th>
			<tr>
			
			<?php
				foreach($projekt as $stavka){
					if($stavka["slika"] == ""){
						$profilna = "blank.jpg";
					}
					else{
						$profilna = $stavka["slika"];
					}
					echo "<tr>
			<th style='border-bottom:#333 solid 2px' colspan='2'>
			<img style='width: 70px; height: 70px' src='images/" . $profilna . "'>
			" . $stavka["datum"] ." </th>
		  	<th style='border-bottom:#333 solid 2px'><" . $stavka["ime"] . ">" . $stavka["ime"] . "</a></th>
		  	<th><a href='izvodac_forma.php?id=" . $stavka["id"] . "'>Uredi</a> | <a href='brisanje.php?id=" . $stavka["id"] . "'>Obriši</a> </th>
		  </tr>";
				}
			?>
		
		</table>
	</div>

	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
	<script>
		$(document).foundation();
	</script>
			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
						</div>
						<div class="row">
							<div class="col-12">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Potražite Woodstock na društvenim mrežama!</h3>
										</header>
								
										<ul class="icons">
											<li><a href="https://twitter.com/woodstock" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="https://www.facebook.com/WoodstockMusicandArtFair/"target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="https://www.instagram.com/woodstock/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>							
										</ul>
									</section>
							</div>
						</div>
					</div>
				</div>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>