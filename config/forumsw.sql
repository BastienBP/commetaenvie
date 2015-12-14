DROP DATABASE IF EXISTS forumsw;
CREATE DATABASE forumsw;
USE forumsw;

CREATE TABLE user (
  idU int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  pseudo VARCHAR(100) NOT NULL,
  mail VARCHAR(255) NOT NULL,
  pass VARCHAR(255) NOT NULL,
  isModo boolean NOT NULL,
  inscription datetime,
  lastCo datetime,
  nom varchar(100),
  side char(1),
  prenom varchar(100),
  dateNaiss date
)ENGINE=InnoDB CHARSET=UTF8;

CREATE TABLE categorie(
  idCat int(6) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  libCat varchar(100)
)ENGINE=InnoDB CHARSET=UTF8;


CREATE TABLE topic(
  idTop int(6) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  libTop varchar(255) NOT NULL,
  dateTop datetime,
  idCat int(6),
  FOREIGN KEY (idCat) REFERENCES categorie (idCat)
)ENGINE=InnoDB CHARSET=UTF8;

CREATE TABLE post(
  idP int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  titreP varchar(100) NOT NULL,
  texteP TEXT NOT NULL,
  creationP datetime,
  idU int(11),
  idTop int(6),
  FOREIGN KEY (idU) REFERENCES user (idU),
  FOREIGN KEY (idTop) REFERENCES topic (idTop)
)ENGINE=InnoDB CHARSET=UTF8;



CREATE TABLE admin(
  idAdmin int(1)  PRIMARY KEY NOT NULL,
  logAdmin varchar(100) NOT NULL,
  passAdmin varchar(100) NOT NULL 
)ENGINE=InnoDB CHARSET=UTF8;

INSERT INTO admin values(1,'admin','d033e22ae348aeb5660fc2140aec35850c4da997');


CREATE TABLE adminActions(
  idAction int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  typeAction char(1) NOT NULL,
  valueAction varchar(11),
  dateAction datetime
)ENGINE=InnoDB CHARSET=UTF8;


CREATE VIEW general AS
SELECT
c.idCat,
c.libCat,
t.idTop,
t.libTop,
dateTop,
p.idP,
p.titreP,
p.texteP,
creationP,
u.idU,
pseudo,
mail,
pass,
isModo,
inscription,
lastCo,
u.nom,
side,
prenom,
dateNaiss
FROM
categorie c,
topic t,
post p,
user u
WHERE
t.idCat = c.idCat AND
p.idTop = t.idTop AND
p.idU = u.idU;


CREATE VIEW categories_topics AS
SELECT
c.idCat,
c.libCat,
t.idTop,
t.libTop,
dateTop
FROM
categorie c,
topic t
WHERE
t.idCat = c.idCat;

