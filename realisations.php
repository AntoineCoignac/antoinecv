<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>CV Antoine Coignac</title>
    <meta name=description content="CV Antoine Coignac" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
</head>
<body>
    <header>
        <!--<a href="menu.html"><img src="images/menu.png" alt="" /></a>-->
        <nav role="navigation">
            <div id="menuToggle">
                <!--
                A fake / hidden checkbox is used as click reciever,
                so you can use the :checked selector on it.
                -->
                <input type="checkbox" />

                <!--
                Some spans to act as a hamburger.

                They are acting like a real hamburger,
                not that McDonalds stuff.
                -->
                <span></span>
                <span></span>
                <span></span>

                <!--
                Too bad the menu has to be inside of the button
                but hey, it's pure CSS magic.
                -->
                <ul id="menu">
                    <a href="index.php#Presentation"><li>Présentation</li></a>
                    <a href="index.php#Competences"><li>Compétences</li></a>
                    <a href="index.php#QualitesDefauts"><li>Qualités</li></a>
                    <a href="index.php#Parcours"><li>Parcours</li></a>
                    <a href="index.php#Realisations"><li>Réalisations</li></a>
                    <a href="index.php#Contact"><li>Contact</li></a>
                </ul>
            </div>
        </nav>
    </header>
    <main>

    </main>
</body>