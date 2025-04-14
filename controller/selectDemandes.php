<?php 
require_once(__DIR__ . '/../bdd/bdd.php');

$sql = "SELECT u.nom, u.prenom, u.email, u.telephone, t.nom_type, d.description, d.date_demande
        FROM demande d
        JOIN utilisateur u ON d.id_utilisateur = u.id_utilisateur
        JOIN type t ON d.id_type = t.id_type
        ORDER BY d.date_demande DESC";

$stmt = $bdd->query($sql);
$demandes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
