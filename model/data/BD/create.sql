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
numeroJeu INTEGER(10) FOREIGN KEY,
PRIMARY KEY(pseudo,dateAjoute)
);

CREATE TABLE image(
numeoimage INTEGER(10) PRIMARY KEY,
numeroJeu INTEGER(10),
type VARCHAR(10),
FOREIGN KEY(type)
);
