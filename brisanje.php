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
 <?php
        include("pdo.php");

        $id = isset($_GET["id"]) ? $_GET["id"] : 0;

        if($id != 0){
            $query = $db->query("SELECT * FROM izvodac where id= $id");
            $rezultati = $query->fetchAll();
             $id = $rezultati[0]["id"];
            $ime = $rezultati[0]["ime"];
            $ime = $rezultati[0]["datum"];
            $boja = $rezultati[0]["pjesma"];
            $slika = $rezultati[0]["slika"];
        }
        else{
    $id = 0;
    $ime = 0;
    $datum = 0;
    $pjesma = "";
    $slika = "";
}
    ?>
    
<h3>Izvođači</h3>

<div class="row" style="margin-top:26px">
    <div class="medium-12 large-12 columns">
    <form method="post" action="izvodac_sql.php" enctype="multipart/form-data" name="form" id="forma-izvodac">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    Želite li stvarno pobrisati izvođača "<b><?php echo $ime; ?></b>"

    <input type="submit" name="submit" value="Potvrdi" class="button">&nbsp;&nbsp;
    <input type="submit" name="submit" value="Odustani" class="button">
    </form>
    
    
    </div>
</div> 
</body>
</html>
