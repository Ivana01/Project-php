<?php include("pdo.php"); 


$id = isset($_GET["id"]) ? $_GET["id"] : 0;
 
if($id != 0){
    $query = $db->query("SELECT * FROM izvodac where id = $id");
    $rezultati = $query->fetchAll();
    $id = $rezultati[0]["id"];
    $ime = $rezultati[0]["ime"];
    $datum = $rezultati[0]["datum"];
    $pjesma = $rezultati[0]["pjesma"];
    $slika = $rezultati[0]["slika"];
    $button = "Uredi";
}
else{
    $id = 0;
    $ime = "";
    $datum = "";
    $pjesma = "";
    $slika = "";
    $button = "Dodaj";
}

?>

<!-- HTML -->

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
                                <li><a href="izvodaci.php">Izvođači</a></li>
                                <li><a href="galerija.php">Galerija</a></li>
                            </ul>
                        </nav>

                </div>




     
    <div class="row medium-10 large-8 columns">
    <div class="row">
        <div class="medium-3 large-3 columns">
            <?php
                if($slika == ""){
                    $profilna = "blank.jpg";
                }
                else{
                    $profilna = $slika;
                }
            ?>
            <img style='width:150px' src='images/<?php echo $profilna; ?>'>
        </div>
        <div class="medium-9 large-9 columns">
            <form method="post" action="izvodac_sql.php" enctype="multipart/form-data" name="form" id="forma-izvodac">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                Ime i prezime izvođača: <input type="text" name="ime" value="<?php echo $ime; ?>"><br>
                Datum: <input type="text" name="datum" value="<?php echo $datum; ?>"><br>
                Pjesma: <input type="text" name="pjesma" value="<?php echo $pjesma; ?>"><br>
                Slika: <input type="text" name="slika" value="<?php echo $slika; ?>"><br>
                
                <input type="submit" name="submit" value="<?php echo $button ?>" class="button">
                <input type="submit" name="submit" value="Odustani" class="button">
            </form>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
        $(document).foundation();
    </script>
</body>
</html>
