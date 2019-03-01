<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/style/style.css">
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../public/javascript/interface.js"></script>
    <link rel="icon" type="image/png" href="../public/images/logo.png" />
    <title>BlahTakiCar</title>
</head>
<body onload="affichDefault()">
<!-- Menu -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php" alt="Accéder à l'accueil" id="nomSite">BlahTakiCar</a>
        </div>
        <ul class="nav navbar-nav ">
            <li><a href="../index.php?&action=rechercher" alt="Rechercher un trajet" class = "liens">Rechercher</a></li>
            <li><a href="#" alt="Proposer un trajet" class = "liens">Proposer</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php
            if(isset($_SESSION['id'])) { ?>
                <li><a href="../index.php?&action=profil" alt="Mon Profil" class = "liens"><span class="glyphicon glyphicon-user"></span>Mon profil</a></li>
                <li><a href="../index.php?&action=deconnexion" alt="Déconnexion" class = "liens"><span class="glyphicon glyphicon-user"></span>Se déconnecter</a></li>
            <?php }else{ ?>
                <li><a href="../index.php?&action=connexion" alt="Se connecter" class = "liens"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
                <li><a href="../index.php?&action=inscription" alt="S'inscrire"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
            <?php } ?>
        </ul>
    </div>
</div>
<br />