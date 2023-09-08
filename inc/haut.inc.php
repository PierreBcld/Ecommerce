<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mon Site</title>
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>inc/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo RACINE_SITE ?>inc/js/main.js"></script>
</head>
<body>
    <header>
        <div class="conteneur">
            <nav class="topnav" id="myTopnav">
                <a href="<?php echo RACINE_SITE; ?>/">Mon Site</a>
                <a href="<?php echo RACINE_SITE; ?>inscription.php">Inscription</a>
                <a href="<?php echo RACINE_SITE; ?>connexion.php">Se connecter</a>
                <a href="<?php echo RACINE_SITE; ?>boutique.php">Notre boutique</a>
                <a href="<?php echo RACINE_SITE; ?>panier.php">Votre panier</a>
                <a href="javascript:void(0)" class="icon" onclick="toggleNav()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
        </div>
    </header>
    <section>
        <div class="conteneur">