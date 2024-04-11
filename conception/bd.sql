
CREATE TABLE organisateurs(
   id_org INT AUTO_INCREMENT,
   intitule_org VARCHAR(50),
   PRIMARY KEY(id_org)
)ENGINE=InnoDB;

CREATE TABLE intervenant(
   id_inter INT AUTO_INCREMENT,
   nom VARCHAR(10),
   prenom VARCHAR(50),
   affectation VARCHAR(50),
   url VARCHAR(100),
   fk_id_org INT,
   PRIMARY KEY(id_inter),
   FOREIGN KEY(fk_id_org) REFERENCES organisateurs(id_org)
)ENGINE=InnoDB;

CREATE TABLE evenement(
   id_event INT AUTO_INCREMENT,
   type_event VARCHAR(50),
   resume VARCHAR(50),
   lieu VARCHAR(50),
   titre VARCHAR(50),
    fk_id_org INT,
   PRIMARY KEY(id_event),
   FOREIGN KEY(fk_id_org) REFERENCES organisateurs(id_org)
)ENGINE=InnoDB;

CREATE TABLE annonce(
    id_inter INT,
    id_event INT,
    date_inter date,
    date_mise_a_jour date,
    PRIMARY KEY(id_inter, id_event),
    FOREIGN KEY(id_event) REFERENCES evenement(id_event),
    FOREIGN KEY(id_inter) REFERENCES intervenant(id_inter)
)ENGINE=InnoDB;

CREATE TABLE participant(
   id_part INT AUTO_INCREMENT,
   nom_part VARCHAR(50),
   email_part VARCHAR(50),
   PRIMARY KEY(id_part)
)ENGINE=InnoDB;

CREATE TABLE commentaire(
    id_event INT,
    id_part INT,
    com VARCHAR(100),
    PRIMARY KEY(id_event, id_part),
    FOREIGN KEY(id_event) REFERENCES evenement(id_event),
    FOREIGN KEY(id_part) REFERENCES participant(id_part)
)ENGINE=InnoDB;

CREATE TABLE Utilisateurs(
   id_util INT AUTO_INCREMENT,
   mdp VARCHAR(50),
   identifiant VARCHAR(50),
   PRIMARY KEY(id_util)
)ENGINE=InnoDB;