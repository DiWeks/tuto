# SET UP #

Pour utiliser ce micro-framework :

## Créer la base de données, et une table pour enregistrer les tutos.

Ouvrir PHPMyAdmin et créer une base de données (vous pouvez la nommer "tutos" par exemple.
Ouvrir la base de données créée et executer le fichier schema.sql fourni.
Vous aurez alors une table "tutos" avec un tutoriel.

## Installer les dépendances
Pour bénéficier de l'autoload de Composer, lancer la commande **composer install**.

## Configurer l'application
 
Dans le dossier Configs : 

Copier le contenu du fichier **params.php.dist** dans un nouveau fichier **params.php**. 
C'est un fichier "modèle" que vous devez adapter à votre situation :
 
 **Etape 1.** Dans ce fichier, renseigner les informations de connexion à votre base de données : 
 - DATABASE
 - LOGIN
 - MOT_DE_PASSE
   
 **Etape 2.** Dans ce fichier, renseigner le chemin vers votre application, en partant du dossier htdocs de Xampp :
 - PATH
 
Exemple : 

Si votre application est dans ce dossier : **'C:\xampp\htdocs\works\tutoAPI\'**, le PATH est **'works/tutoAPI/'**.
- Pas de slash au début.
- Un slash à la fin.


 
