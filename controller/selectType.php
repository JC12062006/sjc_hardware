<?php
require_once(__DIR__ . '/../bdd/bdd.php');

// Requête pour récupérer les types
$sql = "SELECT * FROM type";
$stmt = $bdd->query($sql);
$types = $stmt->fetchAll(PDO::FETCH_ASSOC);
