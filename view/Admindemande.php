<?php 
// Connexion + requête
require_once(__DIR__ . '/../bdd/bdd.php');

$sql = "SELECT u.nom, u.prenom, u.email, u.telephone, t.nom_type, d.description, d.date_demande
        FROM demande d
        JOIN utilisateur u ON d.id_utilisateur = u.id_utilisateur
        JOIN type t ON d.id_type = t.id_type
        ORDER BY d.date_demande DESC";

$stmt = $bdd->query($sql);
$demandes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<section style="padding: 2rem;">
    <h2 style="color: #89F1FF;">Liste des demandes</h2>

    <table style="width: 100%; border-collapse: collapse; background-color: #1a1a1a; color: white; border-radius: 12px; overflow: hidden;">
        <thead style="background-color: #222;">
            <tr>
                <th style="padding: 12px;">Nom</th>
                <th style="padding: 12px;">Prénom</th>
                <th style="padding: 12px;">Email</th>
                <th style="padding: 12px;">Téléphone</th>
                <th style="padding: 12px;">Type</th>
                <th style="padding: 12px;">Description</th>
                <th style="padding: 12px;">Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($demandes as $demande): ?>
            <tr style="border-top: 1px solid #333;">
                <td style="padding: 12px;"><?= htmlspecialchars($demande['nom']) ?></td>
                <td style="padding: 12px;"><?= htmlspecialchars($demande['prenom']) ?></td>
                <td style="padding: 12px;"><?= htmlspecialchars($demande['email']) ?></td>
                <td style="padding: 12px;"><?= htmlspecialchars($demande['telephone']) ?></td>
                <td style="padding: 12px;"><?= htmlspecialchars($demande['nom_type']) ?></td>
                <td style="padding: 12px;"><?= nl2br(htmlspecialchars($demande['description'])) ?></td>
                <td style="padding: 12px;"><?= htmlspecialchars($demande['date_demande']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>
