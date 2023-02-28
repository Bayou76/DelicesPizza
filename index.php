<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/commum.css" />
    <link rel="stylesheet" href="./assets/css/index.css" />
  </head>
  <body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow py-3 sticky-top">
      <div class="container">
          <a class="navbar-brand" href="#">
              <img class="logo" src="./assets/images/logo.png"  alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto">

                  <li class="nav-item">
                    <a class="nav-link" href="./index.php">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./assets/pages/carte.php">Pizzas</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./assets/pages/boissons.php">Boissons</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./assets/pages/texMex.php">Tex mex</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./assets/pages/desserts.php">Desserts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./assets/pages/contact.php">Contact</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
    <main>
      <aside>
        <h2>Bienvenue dans notre pizzeria, où nous mettons tout en œuvre pour
          vous offrir les meilleures pizzas de la région !<br> </h2>
        <img
          src="./assets/images/pizza-6097011_1280-removebg-preview.png"
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

      <section id="presentation">
        <div>
          <p id="ph_accroche">
            Nous utilisons des
            ingrédients frais et de qualité pour créer nos recettes originales,
            et notre pâte à pizza est faite maison chaque jour. <br> Nous proposons
            également une large sélection d'accompagnements et de boissons pour
            compléter votre repas. Venez déguster nos délicieuses pizzas dans
            notre restaurant chaleureux, ou faites-vous livrer directement chez
            vous grâce à notre service de livraison rapide. <br> Nous avons hâte de
            vous accueillir et de vous faire découvrir tous les plaisirs de la
            pizza !
          </p>
        </div>
      </section>

      <section id="adresse">
        <div>
          <h1>Délices Pizza</h1>
          <div id="cercle">
            <p class="cercle"></p>
            <p class="cercle"></p>
            <p class="cercle"></p>
            <p class="cercle"></p>
            <p class="cercle"></p>
            <p class="cercle"></p>
          </div>

          <p>
            4 Grand Rue
            <br />
            61230 Gacé
          </p>

          <a id="tel" href="tel:0233125273">
            <img
              id="phone"
              src="./assets/images/telephone-intelligent.png"
              alt="phone"
            />
            02 33 12 52 73
          </a>

          <div id="calendrier">
            <div id="calendar">
              <img src="/assets/images/calendrier.png" alt="calendar" />
              <!-- <span id="opnClo"></span>  -->
              <span class="triangle"></span>
            </div>
          </div>
        </div>
        <div>
          <div id="horaire">
            <button class="closH">×</button>
            <ul>
              <li><strong>Lundi Fermé</strong></li>
              <li>
                <strong>Mardi</strong>
                <br />
                ouvert de 18:00 à 22:30
              </li>
              <li>
                <strong>Du Mercredi au Jeudi</strong>
                <br />
                ouvert de 11:00 à 14:00 et de 18:00 à 22:00
              </li>
              <li>
                <strong>Du Vendredi au Dimanche</strong>
                <br />
                ouvert de 11:00 à 14:00 et 18:00 à 22:00
              </li>
            </ul>
          </div>
        </div>
      </section>

      <div>
        <a href="/assets/images/DELICE_PIZZA.pdf" id="carte">
          Télécharger notre carte
        </a>
      </div>

      <section id="promo">
        <div class="promo">
          <div class="menu">
            <h2>Menu 2 pers</h2>
            <p>
              1 pizza Sénior
              <br />
              + 10 nuggets
              <br />
              + 2 pots de glace 100ml
              <br />
              + 1 boisson 1,5l
            </p>
            <span>23,90€</span>
          </div>

          <div class="menu">
            <h2>Menu Family</h2>
            <p>
              1 pizza méga
              <br />
              + 20 nuggets
              <br />
              + 1 pots de glace 500ml
              <br />
              + 1 boisson 1,5l
            </p>
            <span>33,90€</span>
          </div>
        </div>

        <div class="promo">
          <div class="menu">
            <h2>Menu Match</h2>
            <p>
              3 pizza Sénior
              <br />
              + 20 nuggets
              <br />
              + 1 pots de glace 500ml
              <br />
              + 2 boisson 1,5l
            </p>
            <span>50€</span>
          </div>

          <div class="menu">
            <h2>Menu Enfant</h2>
            <p>
              1 mini pizza
              <br />
              ou 6 nuggets
              <br />
              + 1 jus d'orange
              <br />
              + 1 Kinder Surprise
            </p>
            <span>6€</span>
          </div>
        </div>
      </section>

      <!-- <section id="downland">
            <div class="downland">
                <img src="/assets/images/appstore.png" alt="apple">
            </div>

            <div class="downland">
                <img src="/assets/images/googleplay.png" alt="googleplay">
            </div>
        </section> -->
    </main>

    

    <footer>
      <hr />
      <hr />
      <hr />

      <div id="footer">
        <p>Délices Pizza</p>
        <p>&copy;copyright SEBIA Baya</p>
        <img src="/assets/images/facebook.png" alt="facebook" />
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="/assets/js/commun.js"></script>
    <script src="/assets/js/index.js"></script>
  </body>
</html>
