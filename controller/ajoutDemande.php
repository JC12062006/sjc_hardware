<?php 
require_once(__DIR__ . '/../bdd/bdd.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $id_type = $_POST['type'];
    $description = $_POST['description'];

    $stmtUser = $bdd->prepare("INSERT INTO utilisateur (nom, prenom, email, telephone) VALUES (?, ?, ?, ?)");
    $stmtUser->execute([$nom, $prenom, $email, $telephone]);
    $id_utilisateur = $bdd->lastInsertId();

    $stmtDemande = $bdd->prepare("INSERT INTO demande (id_utilisateur, id_type, description, date_demande) VALUES (?, ?, ?, NOW())");
    $stmtDemande->execute([$id_utilisateur, $id_type, $description]);

    header('Location: ../index.php');
    exit();
}
?>
