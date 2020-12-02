<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio - Jennifer Bouquin</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="app">
        <header>
            <nav>
                <ul>
                    <li class="<?= $currentPage == 'home' ? 'active' : '' ?>"><a href="<?= $this->router->generate('page-home') ?>">Accueil</a></li>
                    <li class="<?= $currentPage == 'experience' ? 'active' : '' ?>"><a href="<?= $this->router->generate('page-experience') ?>">Expérience</a></li>
                    <li class="<?= $currentPage == 'portfolio' ? 'active' : '' ?>"><a href="<?= $this->router->generate('page-portfolio') ?>">Portfolio</a></li>
                </ul>
            </nav>
        </header>
        <main>