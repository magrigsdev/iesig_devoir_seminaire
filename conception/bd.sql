
CREATE TABLE organisateur(
   id_org INT AUTO_INCREMENT,
   intitule_org VARCHAR(30),
   PRIMARY KEY(id_org),
)ENGINE=InnoDB;

CREATE TABLE intervenant(
   id_inter INT AUTO_INCREMENT,
   nom VARCHAR(10),
   prenom VARCHAR(50),
   affection VARCHAR(50),
   url VARCHAR(100),
   fk_id_org INT,
   PRIMARY KEY(id_inter),
   FOREIGN KEY(fk_id_org) REFERENCES organisateur(id_org),
)ENGINE=InnoDB;

CREATE TABLE evenement(
   id_event INT AUTO_INCREMENT,
   type_event VARCHAR(50),
   resume VARCHAR(50),
   lieu VARCHAR(50),
   titre VARCHAR(50),
   PRIMARY KEY(id_event)
)ENGINE=InnoDB;


CREATE TABLE annonce(
    id_inter INT AUTO_INCREMENT,
    id_event INT AUTO_INCREMENT,
    date_inter date,
    date_mise_a_jour date,
    FOREIGN KEY(id_event) REFERENCES evenement(id_event),
    FOREIGN KEY(id_inter) REFERENCES intervenant(id_inter)
)ENGINE=InnoDB;
