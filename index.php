<?php
if (empty($_POST['face']) && empty($_POST['shot'])){
    $_POST['face']=0;
    $_POST['shot']=0;
    $resultat = '-';
    $shot = 0;
}
else {
    $face = htmlspecialchars($_POST['face']); // On sécurise ...
    $shot = htmlspecialchars($_POST['shot']);
    $resultat = 0;
    $tableauDes = array();


    for ($i = 1; $i <= $shot; $i++) {
        $des = rand(1, $face);
        $tableauDes[] = $des;
        $resultat += $des;
    }
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lancer de dés</title>
 
    <!-- icon-->
    <script src="https://kit.fontawesome.com/cb109f8570.js" crossorigin="anonymous"></script>

    <!-- Fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
    <!-- styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="./Ressources/CSS/style.css">

    <link rel="apple-touch-icon" sizes="57x57" href="/Ressources/Images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/Ressources/Images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/Ressources/Images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/Ressources/Images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/Ressources/Images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/Ressources/Images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/Ressources/Images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/Ressources/Images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/Ressources/Images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/Ressources/Images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/Ressources/Images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/Ressources/Images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/Ressources/Images/favicon-16x16.png">
<link rel="manifest" href="/Ressources/Images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">


</head>

<body>
    
    <?php
    include 'header.php';
    ?>
<section class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 form">
                <form name="formulaire" method="post" action="index.php">
                    <div class="row">
                        <div class="col-md-6 right"><label>Nombre de face du dé : </label></div>
                        <div class="col-md-6 left"><select name="face">
                               <option value="2">2 faces</option>
                                <option value="3">3 faces</option>
                                <option value="4">4 faces</option>
                                <option value="5">5 faces</option>
                                <option value="6" selected>6 faces</option>
                                <option value="7">7 faces</option>
                                <option value="8">8 faces</option>
                                <option value="10">10 faces</option>
                                <option value="12">12 faces</option>
                                <option value="14">14 faces</option>
                                <option value="16">16 faces</option>
                                <option value="20">20 faces</option>
                                <option value="24">24 faces</option>
                                <option value="30">30 faces</option>
                                <option value="34">34 faces</option>
                                <option value="37">37 faces</option>
                                <option value="50">50 faces</option>
                                <option value="60">60 faces</option>
                                <option value="100">100 faces</option>
                                <option value="120">120 faces</option>

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 right"><label>Nombre(s) de dé(s) à lancer : </label></div>
                        <div class="col-md-6 left"><input class="nbde" name="shot" type="number" min="1" max="100" value="1"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><input class="lancer" type="submit" value="Lancer"></div>
                    </div>
                </form>
            </div>
            <div class=" col-md-2"></div>
        </div>
    </div>



    <div class="container">
        <div class="row resultat">
            <div class="col-md-2"></div>
            <div class="col-md-8 ">
                <div class="formde">
                    <?php
                    echo "<h3>$resultat</h3>";
                    ?>
                </div>
                <p><div class="trait"></div></p>
            </div>

            <div class="col-md-2"></div>
        </div>
        <div class="row resultat2">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php

                if ($shot > 1) {
                    ?>
                    <div class="face">
                    <?php
                    echo "<p>Le dé à $face faces a été sélectionné</p>";
                    ?>
                    </div>
                    <?php
                    foreach ($tableauDes as $key => $value) {
                        $nblancer = $key + 1;

                        echo "<p>Lancer N°$nblancer - Résultat : $value </p>";
                    }
                } else {
                    
                }
                ?>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    </section>
    <footer>
    <div class="row">
           <p>© Erwan Gentric, Tous droits réservés.</p>

        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</body>

</html>