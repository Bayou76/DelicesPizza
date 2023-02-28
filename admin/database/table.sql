CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_utilisateur VARCHAR(255) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    role VARCHAR(255) NOT NULL,
    employe_id INT NOT NULL,
    FOREIGN KEY (employe_id) REFERENCES employes(id)
);

CREATE TABLE employes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    poste VARCHAR(255) NOT NULL,
    adresse VARCHAR(255) NOT NULL,
    numero_telephone VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL
);


CREATE TABLE clients (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom_client VARCHAR(255) NOT NULL,
    adresse VARCHAR(255) NOT NULL,
    numero VARCHAR(255) NOT NULL
);


CREATE TABLE pizzas (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    ingredients VARCHAR(255) NOT NULL,
    taille ENUM('Junior', 'Sénior', 'Méga', 'Super Méga', 'Giant') NOT NULL,
    prix_junior FLOAT(11) NOT NULL,
    prix_senior FLOAT(11) NOT NULL,
    prix_mega FLOAT(11) NOT NULL,
    prix_Smega FLOAT(11) NOT NULL,
    prix_giant FLOAT(11) NOT NULL,
    image VARCHAR(255) NOT NULL
);

CREATE TABLE commandes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT NOT NULL,
    pizza_id INT NOT NULL,
    taille VARCHAR(255) NOT NULL,
    prix FLOAT NOT NULL,
    total FLOAT NOT NULL,
    adresse_livraison VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    statut VARCHAR(255) NOT NULL,
    FOREIGN KEY (client_id) REFERENCES clients(id),
    FOREIGN KEY (pizza_id) REFERENCES pizzas(id)
);


