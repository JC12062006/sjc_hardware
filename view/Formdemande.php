<?php require_once('./controller/selectType.php'); ?>

<section style="padding: 2rem;">
    <h2 style="color: #89F1FF;">Faire une demande</h2>

    <form action="./controller/ajoutDemande.php" method="POST">
        <input type="text" name="nom" placeholder="Nom" required><br>
        <input type="text" name="prenom" placeholder="Prénom" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="tel" name="telephone" placeholder="Téléphone" required><br>


        <label for="type">Type de service :</label><br>
        <select name="type" required>
            <option value="">-- Sélectionner --</option>
            <?php foreach ($types as $type): ?>
                <option value="<?= $type['id_type'] ?>"><?= htmlspecialchars($type['nom_type']) ?></option>
            <?php endforeach; ?>
        </select><br>

        <textarea name="description" placeholder="Décrivez votre demande" required></textarea><br>
        <button type="submit">Envoyer</button>
    </form>
</section>
