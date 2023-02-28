<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/commum.css" />
    <link rel="stylesheet" href="../css/contact.css" />
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
        <h2>Bienvenue dans notre pizzeria, où nous mettons tout en œuvre pour
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
        <section>

            <form class="formulaire" method="POST" action="formulaire.php">
                <h1>Contactez-nous</h1>
                    <div class="corps-formulaire">
                    <div class="gauche">
                        <div class="groupe">
                        <label>Votre Prénom</label>
                        <input id="prenom" name="prenom" type="text" autocomplete="off" required />
                        </div>
                        <div class="groupe">
                        <label>Votre adresse e-mail</label>
                        <input id="email" name="email" type="text" autocomplete="off" required />
                        </div>
                        <div class="groupe">
                        <label>Votre téléphone</label>
                        <input id="tel" name="tel" type="text" autocomplete="off" required />
                        </div>
                    </div>
            
                    <div class="droite">
                        <div class="groupe">
                        <label>Message</label>
                        <textarea id="message" name="message" placeholder="Saisissez ici votre message..." required></textarea>
                        </div>
                    </div>
                </div>
          
                <div class="pied-formulaire" align="center">
                  <button type="submit">Envoyer le message</button>
                </div>
              </form>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha386-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi666C8" crossorigin="anonymous"></script>
</body>
</html>