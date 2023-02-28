<?php include '../includes/head.php';
  require '../includes/navbar.php';
  require '../database/database.php';
  require '../actions/pizzas/modifier_commande.php';
  $requete = $bdd->prepare("SELECT * FROM commandes");
  $requete->execute();
  $commandes = $requete->fetch()
?>

<h1 class="text-center text-danger text-uppercase mt-5">Modifier la Commande : <?= $commandes['client_id']; ?></h1>
<div class="form-container">
    <div class="row">
    <form method="post" action="">

        <input type="hidden" name="id" value="<?= $commandes['id'] ?>">
            <div class="form-group">
            <label for="client">Client</label>
        <select name="client_id" id="client" required>
        <?php
            // Récupération des clients de la base de données
            $requete_clients = $bdd->query("SELECT id, nom_client FROM clients");
            while ($client = $requete_clients->fetch()) {
            $selected = $client['id'] == $commandes['client_id'] ? 'selected' : '';
            echo '<option value="'.$client['id'].'" '.$selected.'>'.$client['nom_client'].'</option>';
            }
        ?>
        </select>
        </div>
        <div class="form-group">
        <label for="pizza">Pizza</label>
        <select name="pizza_id" id="pizza" required>
        <?php
            // Récupération des pizzas de la base de données
            $requete_pizzas = $bdd->query("SELECT id, nom FROM pizzas");
            while ($pizza = $requete_pizzas->fetch()) {
            $selected = $pizza['id'] == $commandes['pizza_id'] ? 'selected' : '';
            echo '<option value="'.$pizza['id'].'" '.$selected.'>'.$pizza['nom'].'</option>';
            }
       ?>
        </select>
        </div>
        <div class="form-group">
        <label for="taille">Taille</label>
        <select name="taille" id="taille" required>
        <?php
                $tailles = ['junior', 'senior', 'mega', 'Smega', 'giant'];
                foreach ($tailles as $taille) {
                $selected = $taille == $commandes['taille'] ? 'selected' : '';
                echo '<option value="'.$taille.'" '.$selected.'>'.$taille.'</option>';
                }
            ?>
        </select>
        </div>
        <div class="form-group">
        <label for="prix">Prix</label>
        <input type="number" step="0.01" name="prix" id="prix" value="<?= $commandes['prix']?>" required>

        </div>
        <div class="form-group">
        <label for="adresse_livraison">Adresse de livraison</label>
        <input type="text" name="adresse_livraison" id="adresse_livraison" value="<?= $commandes['adresse_livraison'] ?>" required>
        </div>
        <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name="date" id="date" value="<?= $commandes['date'] ?>" required>
        </div>
        <div class="form-group">
        <label for="statut">Statut</label>
        <select name="statut" id="statut" required>
        <?php
                $statuts = ['en attente', 'en livraison', 'livrée'];
                foreach ($statuts as $statut) {
                $selected = $statut == $commandes['statut'] ? 'selected' : '';
                echo '<option value="'.$statut.'" '.$selected.'>'.$statut.'</option>';
                }
            ?>
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
    </div>

    <?php   require '../includes/footer.php'; ?>