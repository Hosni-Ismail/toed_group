<?php

require "config.php";
require "../admin/fonction.php";


$user_id = $_SESSION["user"]["id"];
$chantiers = get_chantier_by_idClient($pdo,$user_id);
$client = get_user_by_chantier($pdo,$user_id);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Calender-Button.css">
    <link rel="stylesheet" href="assets/css/Fixed-Navbar-1.css">
    <link rel="stylesheet" href="assets/css/Fixed-Navbar-2.css">
    <link rel="stylesheet" href="assets/css/Fixed-Navbar.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navbar---App-Toolbar--LG--MD---Mobile-Nav--SM--XS-1.css">
    <link rel="stylesheet" href="assets/css/Navbar---App-Toolbar--LG--MD---Mobile-Nav--SM--XS.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Steps-Progressbar.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg sticky-top shadow-lg clean-navbar" style="border-color: var(--bs-blue);background: #27747B;color: var(--bs-blue);padding: 20.2px 0px;transform: translate(0px);">
        <div class="container"><a class="navbar-brand logo" href="../../index.php" style="color: var(--bs-gray-200);font-weight: bold;padding: 5px 0px;margin: 0px;height: 50px;width: 213.238px;">TOED GROUP</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden"></span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link link-primary" href="voir_chantier.php" style="color: var(--bs-gray-100);">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../pricing.php" style="color: var(--bs-gray-100);">Demandez un chantier</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../contact.php" style="color: var(--bs-gray-100);">Contact</a></li>
                    <li class="nav-item text-uppercase border rounded" style="background: #ffffff;border-width: 1px;border-color: rgb(150,39,39);border-radius: -1px;font-family: Montserrat, sans-serif;padding: 0px;color: var(--bs-blue);"><a class="nav-link" href="../connexion/logout.php" style="background: var(--bs-white);transform: perspective(0px);filter: blur(0px);font-size: 15.8px;color: #27747B;">Se deconnecter</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 style="text-align: center;font-size: 21.880000000000006px;padding: 67px;">Retrouvez ici tout vos chantiers</h1>
    <?php foreach($chantiers as $chantier){ ?>
    <a href="page_chantier.php?id=<?php echo $chantier["chantier_id"]; ?>&user=<?php echo $client["id"]; ?>"><button class="btn btn-primary border rounded shadow-sm" type="button" style="width: 150.4875px;height: 138px;background: #27747B;"><?php echo $chantier["nom_chantier"]; ?></button></a>
    <?php }?>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>