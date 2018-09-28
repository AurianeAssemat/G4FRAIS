
--
-- Table FicheFrais
--

INSERT INTO FicheFrais (idVisiteur, mois, nbJustificatifs, montantValide, dateModif, idEtat) VALUES
('b16', '201809', 0, '0.00', '2018-09-28', 'CR'),
('b19', '201809', 0, '0.00', '2018-09-28', 'CR'),
('b34', '201809', 0, '0.00', '2018-09-07', 'CR'),
('d13', '201809', 0, '0.00', '2018-09-21', 'CR'),
('e49', '201809', 0, '0.00', '2018-09-28', 'CR');


--
-- Table LigneFraisForfait
--

INSERT INTO LigneFraisForfait (idVisiteur, mois, idFraisForfait, quantite) VALUES
('b16', '201809', 'ETP', 5),
('b16', '201809', 'KM', 11),
('b16', '201809', 'NUI', 2),
('b16', '201809', 'REP', 1),
('b19', '201809', 'ETP', 11),
('b19', '201809', 'KM', 10),
('b19', '201809', 'NUI', 4),
('b19', '201809', 'REP', 2),
('b34', '201809', 'ETP', 2),
('b34', '201809', 'KM', 5),
('b34', '201809', 'NUI', 3),
('b34', '201809', 'REP', 1),
('d13', '201809', 'ETP', 0),
('d13', '201809', 'KM', 0),
('d13', '201809', 'NUI', 0),
('d13', '201809', 'REP', 0),
('e49', '201809', 'ETP', 1),
('e49', '201809', 'KM', 13),
('e49', '201809', 'NUI', 2),
('e49', '201809', 'REP', 2);


--
-- Table LigneFraisHorsForfait
--

INSERT INTO LigneFraisHorsForfait (id, idVisiteur, mois, libelle, `date`, montant, idEtatHF) VALUES
(6, 'b34', '201809', 'Diner avec des représentants', '2018-09-13', '50.00', 'EAJU'),
(7, 'b19', '201809', 'panne essence', '2018-09-11', '50.00', 'EAJU'),
(8, 'b16', '201809', 'Bouquet de fleurs', '2018-09-18', '15.00', 'EAJU'),
(9, 'e49', '201809', 'Diner avec des représentants', '2018-09-24', '43.00', 'EAJU');
