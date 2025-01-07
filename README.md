# Recipe Master 2024

## Contenus Dynamiques Obligatoires

### Page d'Accueil
- **Liste des catégories** : Affiche toutes les catégories disponibles.
- **Liste des ingrédients** : Présente tous les ingrédients disponibles.
- **Recette aléatoire** : Une recette aléatoire affichée sur la page d'accueil.
- **Top 3 des recettes les mieux notées** : Les trois recettes avec les meilleures évaluations.

### Navigation
- **Menu "Recettes"** : 
  - Affiche les 9 dernières recettes ajoutées.
- **Menu "Chef"** : 
  - Affiche les 9 derniers utilisateurs enregistrés.

### Détails
- **Détails des recettes** : Informations complètes sur une recette (nom, description, catégorie, ingrédients, etc.).
- **Détails des chefs/utilisateurs** : Affiche les informations d'un chef ou utilisateur.

### Backoffice
- **Connexion sécurisée** :
  - Authentification via mots de passe cryptés.
- **Gestion des données** :
  - Ajouter, modifier ou supprimer :
    - **Catégories**
    - **Recettes** (sélection d'utilisateur via menu déroulant, catégorie via menu déroulant, ingrédients via cases à cocher).
  - **Pas d'upload d'images** dans cette version.

---

## Contenus Dynamiques Facultatifs

### Navigation et Fonctionnalités Avancées
- **Lien "Voir plus"** :
  - Permet d'afficher les 9 recettes ou chefs suivants grâce à AJAX.
- **Encart utilisateur le mieux noté** : Affiche le chef ou utilisateur ayant la meilleure évaluation sur la page d'accueil.
- **Moteur de recherche** :
  - Recherche multi-critères basée sur le nom, la description ou les ingrédients des recettes.

### Détails et Gestion
- **Liens supplémentaires** :
  - Lien direct vers les catégories.
  - Lien direct vers les ingrédients.
- **CRUD étendu** :
  - Gestion complète des données de toutes les tables, sauf celle des commentaires.

### Backoffice
- **Upload d'images** :
  - Possibilité de charger des images pour enrichir les recettes ou les utilisateurs.

---
