# APISymfony
- Une API Symfony 3.4 qui permet de récupérer / Créer / modifier un utilisateur présent dans une BDD par ORM 
- Un front Angular 8, qui permet pour le moment de récupérer la liste d'utilisateurs et les afficher.

Pour paramétrer la connexion vers la DB, modifier le fichier app/config/parameters.yml  \n
Pour créer la DB : php bin/console doctrine:database:create \n
Pour lancer l'API : symfony server:start ou php bin/console server:run \n
Le front angular peut se lancer avec un npm run start si apache est non-configuré

To fix : l'implantation du formulaire permettant le changement de rôle d'un utilisateur
