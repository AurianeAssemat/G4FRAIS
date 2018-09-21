-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Crée le : Ven 07 Septembre 2018 à 09:52
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

--
-- Base de données: `gsb_frais`
--

-- --------------------------------------------------------

--
-- Update de la table `Visiteur`


ALTER TABLE Visiteur MODIFY mdp varchar(50);

UPDATE Visiteur
set mdp = md5(mdp);


