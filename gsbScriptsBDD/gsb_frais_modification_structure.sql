-- Mofifications de la structure de la base pour 
-- integrer le Statut, la Puissance du vehicule 
-- et l'Etat des frais hors forfait.
--
-- Auteur : ASSEMAT-LE BRETON Auriane
--
-- Dernière modification : 14/09/2018

--
-- Structure de la table Statut
--

CREATE TABLE Statut (
  id char(2) NOT NULL,
  libelle varchar(30) DEFAULT NULL,
  CONSTRAINT PK_Statut PRIMARY KEY (id)
) ENGINE=InnoDB;

--
-- Mofification de la structure de la table Visiteur
--

ALTER TABLE Visiteur 
ADD idStatut char(2);

ALTER TABLE Visiteur 
ADD CONSTRAINT FK_idStatut FOREIGN KEY (idStatut) REFERENCES Statut(id);


--
-- Structure de la table PuissVehicule
--

CREATE TABLE PuissVehicule (
  id char(4) NOT NULL,
  libelle varchar(30) DEFAULT NULL,
  tarif decimal(3,2),
  CONSTRAINT PK_PuissVehicule PRIMARY KEY (id)
) ENGINE=InnoDB;

--
-- Mofification de la structure de la table Visiteur
--

ALTER TABLE Visiteur 
ADD idPuissVehicule char(4);

ALTER TABLE Visiteur 
ADD CONSTRAINT FK_idPuissVehicule FOREIGN KEY (idPuissVehicule) REFERENCES PuissVehicule(id);


--
-- Structure de la table EtatHorsForfait
--

CREATE TABLE EtatHorsForfait (
  id char(4) NOT NULL,
  libelle varchar(30) DEFAULT NULL,
  CONSTRAINT PK_EtatHorsForfait PRIMARY KEY (id)
) ENGINE=InnoDB;

--
-- Mofification de la structure de la table LigneFraisHorsForfait
--

ALTER TABLE LigneFraisHorsForfait 
ADD idEtatHF char(4);

ALTER TABLE LigneFraisHorsForfait 
ADD CONSTRAINT FK_idEtatHF FOREIGN KEY (idEtatHF) REFERENCES EtatHorsForfait(id);

