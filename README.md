# Habit Tracker - Backend API

## Description

Habit Tracker est une application web permettant à un utilisateur de gérer ses habitudes quotidiennes.

Cette partie backend a été développée avec **Symfony** sous la forme d’une **API REST sécurisée**. Elle permet :

- l’inscription d’un utilisateur ;
- la connexion d’un utilisateur ;
- l’authentification par token ;
- la gestion des habitudes ;
- la sécurisation de l’accès aux données ;
- la communication avec une base de données relationnelle.

Le backend est conçu pour fonctionner avec un frontend React qui consomme les endpoints de l’API.

---

## Fonctionnalités

- API REST développée avec Symfony
- Inscription utilisateur
- Connexion utilisateur
- Authentification par token
- Sécurisation des routes API
- Gestion des habitudes :
  - création ;
  - récupération ;
  - modification ;
  - suppression ;
  - changement de statut
- Vérification de l’utilisateur authentifié
- Contrôle d’accès aux données personnelles
- Persistance des données avec Doctrine ORM
- Gestion du CORS pour la communication avec le frontend
- Tests des endpoints avec Postman

---

## Technologies utilisées

- Symfony
- PHP
- Doctrine ORM
- MySQL / MariaDB
- Composer
- Postman
- Nelmio CORS Bundle

---

## Structure du projet

```bash
config/
    - packages/
    - routes/
    - bundles.php
    - preload.php
    - routes.yaml
    - services.yaml

migrations/

public/

src/
    - Controller/
        - Api/
            - AuthController.php
            - HabitController.php
            - UserController.php
        - LoginController.php   
    - Entity/
            - Habit.php
            - User.php
    - Repository/
        - HabitRepository.php
        - UserRepository.php
    - Kernel.php

templates/
    - api/
    - base.html.twig

tests/
translations/
var/
vendor/

```
---
## Points techniques travaillés

Ce projet m’a permis de travailler :

- la création d’une API REST avec Symfony ;
- la structuration d’un backend en couches ;
- la gestion des entités et des repositories avec Doctrine ;
- l’authentification par token ;
- la sécurisation des routes ;
- la communication avec un frontend React ;
- la résolution de problèmes techniques comme le CORS, les erreurs 404 ou la gestion des headers HTTP.

---

👩‍💻 Autrice
Projet réalisé par Sylvie
Formation Graduate Développeur Web Full Stack
