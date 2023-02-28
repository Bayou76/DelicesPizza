// fonction pour mettre automatiquement l'adresse saisit du client à l'addresse de livraison
function copierAdresse() {
    // Récupération de la valeur de l'input "adresse_client"
    var adresseClient = document.getElementById("adresse_client").value;
    
    // Mise à jour de la valeur de l'input "adresse_livraison"
    document.getElementById("adresse_livraison").value = adresseClient;
  }


  //fichier ajout pizza
