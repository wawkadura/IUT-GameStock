CREATE TABLE jeu(
numero INTEGER PRIMARY KEY,
titre varchar(50),
prix INTEGER(10),
datesortie DATE,
description VARCHAR(255),
categorie VARCHAR(10),
plateforme VARCHAR(10)
);


/*CREATE TABLE catégorie(
 PRIMARY KEY
);*/


/*CREATE TABLE plateforme(
nom VARCHAR(10) PRIMARY KEY
);*/

CREATE TABLE commentaire(
pseudo VARCHAR(10),
dateAjoute DATE ,
description VARCHAR(255),
note INTEGER(10),
numeroJeu INTEGER(10),
PRIMARY KEY(pseudo,dateAjoute),
FOREIGN KEY(numeroJeu) REFERENCES jeu(numero)
FOREIGN KEY(pseudo) REFERENCES adherent(pseudo)
);

CREATE TABLE image(
numeimage INTEGER(10),
numeroJeu INTEGER(10),
type VARCHAR(10),
cheminimage VARCHAR(100),
PRIMARY KEY(numeimage)
FOREIGN KEY(numeroJeu) REFERENCES jeu(numero)
);

CREATE TABLE adherent(
id INTEGER(10) PRIMARY KEY,
pseudo VARCHAR(10),
nom VARCHAR(10),
prenom VARCHAR(10),
email VARCHAR(30),
motdepasse VARCHAR(50)
);
