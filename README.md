# TP Ingénierie du Web | RUBI Mathilde & DUMAS Raphaël

***

## Table des Matières

- [TP Ingénierie du Web | RUBI Mathilde \& DUMAS Raphaël](#tp-ingénierie-du-web--rubi-mathilde--dumas-raphaël)
  - [Table des Matières](#table-des-matières)
  - [1. Informations Générales](#1-informations-générales)
  - [2. Technologies utilisées](#2-technologies-utilisées)
  - [3. Fonctionnalités implentées](#3-fonctionnalités-implentées)
  - [4. Fonctionnalités Manquantes](#4-fonctionnalités-manquantes)

***

## 1. Informations Générales

Projet réalisé en duo entre Raphaël DUMAS & Mathilde RUBI, il contient 3 parties distinctes :

- Les mousquetaires, entièrement en PHP
- Le formulaire en PHP (et un peu de CSS), fonctionnel, récupérant chaque données
- Le PDO, contenant tout une partie en objet, réalisée selon le modèle classique MVC, avec de nombreuses fonctionnalités, plusieurs classes de personnages, des liens avec une base de données, et éventuellement une vue pour réaliser quelques tests.
- Connexion utilisant MySQL et non SQLITE

***

## 2. Technologies utilisées

- [PHP](https://php.net/) : Version 8.2
- [XAMPP](https://www.apachefriends.org/fr/index.html) : Version 3.3.0
- [MySQL](https://www.mysql.com/fr/) : Version 10.6

***

## 3. Fonctionnalités implentées

- Mousquetaire :
  - Classe avec Getters et Setters
  - Accession des données, interactions avec des objets
  - Conversion de certaines données d'un tableau en objet
- Formulaire :
  - Formulaire complet, avec toutes les données requises
  - Récupération de la variable $_POST et récupération puis affichage des données récupérées par le formulaire dans les input associés.
  - Style rapide pour une vue plus agréable
- PDO :
  - Paterne de conception Modèle/Vue/Controlleur
  - Interaction originelle entre la classe Character et la base de données locale, toutes les méthodes fonctionnent (fonctionnaient?)
  - Interaction entre les classes et les répertoires
  - Toutes les classes ont été implémentées avec tous les accesseurs nécessaires
  - Typage fort des méthodes et des variables
  - Implémentation des classes Abstraites, des Interfaces, de leurs implémentations et héritages respectifs

***

## 4. Fonctionnalités Manquantes

- Formulaire :
  - Pas de message d'erreur/d'annulation en cas de valeur manquante/eronnée
  - Stockage dans le $_POST en une seule dimension, pas de valeurs classées sur deux dimensions
  - Pas de réécriture d'URL, de cookies, ou de moteur de template
- PDO :
  - Pas d'utilisation des modules DateTime/DocumentDOM
  