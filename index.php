<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SJC Hardware</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>

<?php include './view/commun/header.php'; ?>

<main>
    <?php
    $page = $_GET['page'] ?? 'form';
    if ($page === 'admin') {
        include('./view/Admindemande.php');
    } else {
        include './view/FormDemande.php';
    }
    ?>
</main>

<footer>
  &copy; <?= date('Y') ?> SJC Hardware — Tous droits réservés.
</footer>

</body>
</html>
