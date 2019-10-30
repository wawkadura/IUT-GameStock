CREATE TABLE jeu(
numero INTEGER PRIMARY KEY,
titre varchar(50),
prix INTEGER(10),
datesortie DATE,
description VARCHAR(255)
);


CREATE TABLE catégorie(
nom VARCHAR(10) PRIMARY KEY
);


CREATE TABLE plateforme(
nom VARCHAR(10) PRIMARY KEY
);

CREATE TABLE commentaire(
pseudo VARCHAR(10),
dateAjoute DATE ,
description VARCHAR(255),
note INTEGER(10),
numeroJeu INTEGER(10),
PRIMARY KEY(pseudo,dateAjoute),
FOREIGN KEY(numeroJeu) REFERENCES jeu(numero)
);

CREATE TABLE image(
numeimage INTEGER(10),
numeroJeu INTEGER(10),
type VARCHAR(10),
cheminimage VARCHAR(100),
PRIMARY KEY(numeimage)
FOREIGN KEY(numeroJeu) REFERENCES jeu(numero)
);
