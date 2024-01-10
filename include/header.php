<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <!-- lien Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PokéDoc</title>
</head>

<body>
    <header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid h-100">

                <!-- logo de la navbar-->
                <a class="navbar-brand" href="index.php">
                    <img class="logo" src="logo1-removebg-preview.png" alt="logo">
                </a>
                <!-- menu burger -->
                <button class="navbar-toggler h-100" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- debut des menu -->
                <div class="collapse navbar-collapse h-md-100" id="navbarSupportedContent">
                    <div class="">
                        <ul class="navbar-nav mb-2 mb-lg-0 h-100 px-2 ">
                            <li class="nav-item py-3">
                                <a class="nav-link active text-dark fs-5 fw-bold text-uppercase" aria-current="page"
                                    href="index.php">Accueil</a>
                            </li>
                            <li class="nav-item py-3">
                                <a class="nav-link active text-dark fs-5 fw-bold text-uppercase" aria-current="page"
                                    href="potions.php">Potions</a>
                            </li>
                            <li class="nav-item py-3">
                                <a class="nav-link active text-dark fs-5 fw-bold text-uppercase" aria-current="page"
                                    href="contact.php">Contact</a>
                            </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>