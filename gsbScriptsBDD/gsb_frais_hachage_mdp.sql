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
--
--Avant d'insérer le script il faut augmenter le nombre de caractère pour le champs mdp.


UPDATE visiteur
set mdp = md5(mdp)