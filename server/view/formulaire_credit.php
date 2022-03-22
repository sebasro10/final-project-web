<script> document.title = 'Ajouter une opération'; </script>
<?php include_once 'view/menu.php'; ?>
<div class="container bg-primary">
    <h1>Ajouter une opération</h1>
    <form action="?action=formulaire_credit&id=<?= $id_mission ?>" method="post">
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="mb-3">
            <label for="montant" class="form-label">Montant :</label>
            <input type="number" class="form-control" id="montant" name="montant" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description :</label>
            <textarea class="form-control" placeholder="Décrivez votre opération" id="description" name="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Ajouter l'opération</button>
    </form>
    <br />
</div>