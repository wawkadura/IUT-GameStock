CREATE TABLE jeu(
numJeu INTEGER PRIMARY KEY,
titre varchar(50),
prix INTEGER(10),
datesortie DATE,
description VARCHAR(255),
categorie VARCHAR(10),
plateforme VARCHAR(10)
);

CREATE TABLE image(
numimage INTEGER(10),
fichier VARCHAR(100),
PRIMARY KEY(numimage)
);

CREATE TABLE adherent(
id INTEGER(10) PRIMARY KEY,
pseudo VARCHAR(10),
nom VARCHAR(10),
prenom VARCHAR(10),
email VARCHAR(30),
motdepasse VARCHAR(50)
);

CREATE TABLE commentaire(
pseudo VARCHAR(10),
dateAjoute DATE,
message VARCHAR(255),
numJeu INTEGER(10),
PRIMARY KEY(pseudo,message),
FOREIGN KEY(numJeu) REFERENCES jeu(numJeu),
FOREIGN KEY(pseudo) REFERENCES adherent(pseudo)
);
