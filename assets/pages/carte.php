<?php 
require '../../admin/actions/clients/compteur.php';
incrementVisitorsCount();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/commum.css" />
    <link rel="stylesheet" href="../css/carte.css" />
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow py-3 sticky-top">
      <div class="container">
          <a class="navbar-brand" href="#">
              <img class="logo" src="../images/logo.png"  alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto">

                  <li class="nav-item">
                    <a class="nav-link" href="../../index.php">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../pages/carte.php">Pizzas</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="../pages/boissons.php">Boissons</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../pages/texMex.php">Tex mex</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../pages/desserts.php">Desserts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../pages/contact.php">Contact</a>
                  </li>
              </ul>
          </div>
      </div>
    </nav>
    <aside>
        <h2>Bienvenue dans notre pizzéria, où nous mettons tout en œuvre pour
            vous offrir les meilleures pizzas de la région !<br> </h2>
        <img
            src="../images/pizza-6097011_1280-removebg-preview.png"
            alt=""
            class="banniere"
        />
        <h1>
            <span>à</span>
            emporter
            <br />
            ou
            <br />
            <span>en</span>
            livraison
        </h1>
    </aside> 
    <main>
        <div>
            <ul class="sorte">
                <li class="toutes">Toutes</li>
                <li class="tomate">Base tomate</li>
                <li class="fraiche">Base crème fraîche</li>
                <li class="sucrees">Sucrées</li>
            </ul>
        </div>

    

        <section class="container-fluid-fluid" id="tomate">
            <h1>Base Tomate</h1>
            <div class="row">
            <?php
            require '../../admin/database/database.php';
            $requete = $bdd->prepare(("SELECT * FROM pizzas where ingredients LIKE 'Tomate%'"));
            $requete->execute();
        while ($pizza = $requete->fetch()) {
            ?>
                <div class="pizT col-lg-3">
                    <p class="titre"><?php echo $pizza['nom']; ?></p>
                    <img src="../../admin/assets/uploads/<?php echo $pizza['image']; ?>" alt="<?php echo $pizza['nom']; ?>">
                    <p class="ingredient"><?php echo $pizza['ingredients']; ?></p>

                    <div id="prix">
                        <div>
                            <p class="taille">Junior</p>
                            <p class="prix"><?php echo $pizza['prix_junior']; ?>€</p>
                        </div>
                        <div>
                            <p class="taille">Sénior</p>
                            <p class="prix"><?php echo $pizza['prix_senior']; ?>€</p>
                        </div>
                        <div>
                            <p class="taille">Méga</p>
                            <p class="prix"><?php echo $pizza['prix_mega']; ?>€</p>
                        </div>
                        <div>
                            <p class="taille">S. Méga</p>
                            <p class="prix"><?php echo $pizza['prix_Smega']; ?>€</p>
                        </div>
                        <div>
                            <p class="taille">Giant</p>
                            <p class="prix"><?php echo $pizza['prix_giant']; ?>€</p>
                        </div>
                    </div>
                </div>
          
            <?php }?>
        </section>
        
        <section class="container-fluid-fluid" id="fraiche">
            <h1>Base Crème fraîche</h1>
            <div class="row">
            <?php
                $requete = $bdd->prepare(("SELECT * FROM pizzas where ingredients LIKE 'Crème%'"));
                $requete->execute();
                 while ($pizza = $requete->fetch()) {
            ?>
                <div class="pizT col-lg-3">
                    <p class="titre"><?php echo $pizza['nom']; ?></p>
                    <img src="../../admin/assets/uploads/<?php echo $pizza['image']; ?>" alt="<?php echo $pizza['nom']; ?>">
                    <p class="ingredient"><?php echo $pizza['ingredients']; ?></p>

                    <div id="prix">
                        <div>
                            <p class="taille">Junior</p>
                            <p class="prix"><?php echo $pizza['prix_junior']; ?>€</p>
                        </div>
                        <div>
                            <p class="taille">Sénior</p>
                            <p class="prix"><?php echo $pizza['prix_senior']; ?>€</p>
                        </div>
                        <div>
                            <p class="taille">Méga</p>
                            <p class="prix"><?php echo $pizza['prix_mega']; ?>€</p>
                        </div>
                        <div>
                            <p class="taille">S. Méga</p>
                            <p class="prix"><?php echo $pizza['prix_Smega']; ?>€</p>
                        </div>
                        <div>
                            <p class="taille">Giant</p>
                            <p class="prix"><?php echo $pizza['prix_giant']; ?>€</p>
                        </div>
                    </div>
                </div>
          
            <?php }?>

          

        </section>

        <section class="container-fluid-fluid" id="sucrees">
            <h1>Pizza Sucré</h1>
            <div class="row">

                <div class="pizT  col-lg-3">
                    <p class="titre">Calzone Nutella Banane</p>
                    <div class="calz ">
                        <img src="../images/pizza/calzone.png" alt="calz">
                        <img src="../images/pizza/choco.png" alt="choco">
                        <img src="../images/pizza/banane.png" alt="banane">
                    </div>

                    <div id="prix">
                        <div>
                            <p class="taille">Junior</p>
                            <p class="prix">7.00 €</p>
                        </div>
                        <div>
                            <p class="taille">Sénior</p>
                            <p class="prix">9.00 €</p>
                        </div>
                        <div>
                            <p class="taille">Méga</p>
                            <p class="prix">13.00 €</p>
                        </div>
                        <div>
                            <p class="taille">S. Méga</p>
                            <p class="prix">18.00 €</p>
                        </div>
                    </div>
                </div>
                <div class="pizT  col-lg-3">
                    <p class="titre">Calzone Nutella Brownie</p>
                    <div class="calz">
                        <img src="../images/pizza/calzone.png" alt="calz">
                        <img src="../images/pizza/choco.png" alt="choco">
                        <img src="../images/pizza/brownies.jpg" alt="brownie">
                    </div>

                    <div id="prix">
                        <div>
                            <p class="taille">Junior</p>
                            <p class="prix">7.00 €</p>
                        </div>
                        <div>
                            <p class="taille">Sénior</p>
                            <p class="prix">9.00 €</p>
                        </div>
                        <div>
                            <p class="taille">Méga</p>
                            <p class="prix">13.00 €</p>
                        </div>
                        <div>
                            <p class="taille">S. Méga</p>
                            <p class="prix">18.00 €</p>
                        </div>
                    </div>
                </div>
                <div class="pizT  col-lg-3">
                    <p class="titre">Calzone Nutella Poire</p>
                    <div class="calz">
                        <img src="../images/pizza/calzone.png" alt="calz">
                        <img src="../images/pizza/choco.png" alt="choco">
                        <img src="../images/pizza/poire.png" alt="poire">
                    </div>

                    <div id="prix">
                        <div>
                            <p class="taille">Junior</p>
                            <p class="prix">7.00 €</p>
                        </div>
                        <div>
                            <p class="taille">Sénior</p>
                            <p class="prix">9.00 €</p>
                        </div>
                        <div>
                            <p class="taille">Méga</p>
                            <p class="prix">13.00 €</p>
                        </div>
                        <div>
                            <p class="taille">S. Méga</p>
                            <p class="prix">18.00 €</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid-fluid" id="compo">
            <h1 class="titrecompo">Composez votre pizza avec 2 différentes moitiés <br> ( Méga & S.Méga)</h1>
            <h2>A partir de la Marguerita (tomate, mozzarella) : </h2>
            <ul>
                <li>Junior <br> 6.00 €</li>
                <li>Sénior <br> 8.00 €</li>
                <li>Méga <br> 12.00 €</li>
                <li>S-Méga <br> 18.00 €</li>
            </ul>
            <h2>Ingrédient supplémentaires :</h2>
            <ul>
                <li>Junior <br> 1.00 €</li>
                <li>Sénior <br> 1.50 €</li>
                <li>Méga  <br> 2.00 €</li>
                <li>S-Méga <br> 3.00 €</li>
            </ul>
            <p>Olive,oignons,champignons,poivrons,pommes de terre,crème fraîche,bleu,chèvre,oeuf,viande hachée,poulet,poulet tika,merguez,jambon,chorizo,thon,anchois,fruits de mer.</p>
        </section>

        

    </main>

    <footer>
        <hr>
        <hr>
        <hr>

        <div id="footer">
            <p>Délices Pizza</p>
            <p>&copy;copyright  SEBIA Baya</p>
            <img src="../images/facebook.png" alt="facebook">
        </div>
    </footer>
    <script src="../js/carte.js"></script>
    <script src="../js/commun.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>