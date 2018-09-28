-- Insertion de donnees dans la base pour 
-- le Statut de la personne, la Puissance du vehicule 
-- et l'Etat des frais hors forfait.
--
-- Auteur : ASSEMAT-LE BRETON Auriane
--
-- Dernière modification : 14/09/2018


--
-- Contenu de la table Statut
--

INSERT INTO Statut (id, libelle) VALUES
('VI', 'Visiteur'),
('CP', 'Comptable');

--
-- Contenu de la table PuissVehicule
--

INSERT INTO PuissVehicule (id, libelle, tarif) VALUES
('4cvD', '4CV Diesel', 0.52),
('5cvD', '5CV Diesel', 0.58),
('6cvD', '6CV Diesel', 0.58),
('4cvE', '4CV Essence', 0.62),
('5cvE', '5CV Essence', 0.67),
('6cvE', '6CV Essence', 0.67);

--
-- Contenu de la table EtatHorsForfait
--

INSERT INTO EtatHorsForfait (id, libelle) VALUES
('EAJU', 'En attente des justificatifs'),
('VALD', 'Validée'),
('REMB', 'Remboursée'),
('REFU', 'Refusée');

--
-- Ajout des donnees dans la table Visiteur pour le Statut et la puissance des vehicules
--

UPDATE Visiteur SET Visiteur.idStatut = "VI" ;

UPDATE Visiteur SET Visiteur.idStatut = "CP"
WHERE Visiteur.ville LIKE "%aris";

UPDATE Visiteur SET Visiteur.idPuissVehicule = "4cvD";

UPDATE Visiteur SET Visiteur.idPuissVehicule = "5cvD"
WHERE Visiteur.ville LIKE "C%";

UPDATE Visiteur SET Visiteur.idPuissVehicule = "4cvE"
WHERE Visiteur.ville LIKE "M%";

UPDATE Visiteur SET Visiteur.idPuissVehicule = "5cvE"
WHERE Visiteur.ville LIKE "N%";

UPDATE Visiteur SET Visiteur.idPuissVehicule = "6cvE"
WHERE Visiteur.ville LIKE "L%"
OR Visiteur.ville LIKE "G%"; 

ALTER TABLE LigneFraisHorsForfait 
MODIFY idEtatHF char(4) DEFAULT 'EAJU';
