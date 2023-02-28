<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/commum.css" />
    <link rel="stylesheet" href="../css/boissons.css" />
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

        <section class="boissons">
            <h1>boissons</h1>
            <img src="../images/boissons.png" alt="boissons">
        </section>

        <section class="container" id="boissons">
            <div>
                <h1>Canettes (33cl)</h1>
                <div id="canette">
                    <ul>
                        <li>Coca-Cola</li>
                        <li>Coca-Cola Cherry</li>
                        <li>Tropico</li>
                        <li>Oasis tropical</li>
                        <li>Oasis orange</li>
                        <li>Oasis pomme-cassis</li>
                        <li>Ice Tea</li>
                        <li>Fanta orange / citron</li>
                    </ul>

                    <p>1.50 €</p>
                </div>
            </div>

            <div>
                <h1>Bouteilles (1,5l)</h1>
                <div id="bouteille">
                        <ul>
                            <li>Coca-Cola</li>
                            <li>Fanta</li>
                            <li>Tropico</li>
                            <li>Oasis</li>
                        </ul>

                        <p>3.00 €</p>
                </div>
            </div>
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
    <script src="../js/commun.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>