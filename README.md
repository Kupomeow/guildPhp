 ___ ___ __ __       ____ __ __ ____ _     ___   
|   |   |  |  |     /    |  |  |    | |   |   \  
| _   _ |  |  |    |   __|  |  ||  || |   |    \ 
|  \_/  |  ~  |    |  |  |  |  ||  || |___|  D  |
|   |   |___, |    |  |_ |  :  ||  ||     |     |
|   |   |     |    |     |     ||  ||     |     |
|___|___|____/     |___,_|\__,_|____|_____|_____|
                                                 
                                                ______         _   __                  
                                                | ___ \       | | / /                  
                                                | |_/ /_   _  | |/ / _   _ _ __   ___  
                                                | ___ | | | | |    \| | | | '_ \ / _ \ 
                                                | |_/ | |_| | | |\  | |_| | |_) | (_) |
                                                \____/ \__, | \_| \_/\__,_| .__/ \___/ 
                                                        __/ |             | |          
                                                       |___/              |_|          



--------------
SOMMAIRE:

1- Description
2- Installation
3- Utilisation
4- Annexes

--------------


1- DESCRIPTION

Gestion de guilde est une application simple en PHP vanille permettant de gérer les membres d'une guilde.
Vous pouvez en effet ajouter un personnage rapidement, le supprimer et également le supprimer.

2- INSTALLATION

Vous devez absolument créer une base de donnée "gaming" ainsi qu'un table "personnage" dans celle-ci en local.
"personnage" comportera plusieurs champs:
    - id -> integer
    - name -> varchar (255 ou moins, c'est vous qui voyez !)
    - Job -> varchar (255 ou moins, c'est vous qui voyez !)
    - level -> integer

Deposer votre fichier guildPhp dans le dossier www si vous utiliser Wamp.
Lancer votre serveur local et aller sur l'adresse suivante : http://localhost/mvcTraining/
Vous pouvez changer de route dans le frontController "index.php" et ainsi choisir votre propore URL.

3- UTILISATION

La page d'accueil affichera toujours la liste des personnages contenus dans la base de donnée "gaming"
Vous pouvez choisir parmis 3 options : Ajouter, Supprimer, Modifier.
    - Ajouter : Cliquer sur ajouter, une fenêtre modal apparait et vous invite à entrer les informations de votre personnage.
                Une fois valider, vous reviendrez à la page d'accueil avec le personnage ajouter.

    - Supprier : Cliquer sur supprimer pour supprimer le personnage souhaiter. A noter que la demande est irréversible et qu'AUCUNE demande validation ne sera demander.
                 Soyez sûr de votre clique !

    - Modifier : Cliquer sur modifier pour pouvoir modifier une personnage déjà enregistré. Un formulaire apparaitra affichant les informations du personnage.
                 Changer uniquement les informations voules pour valider. Vous reviendrez à la page d'accueil avec le personnage modifié.

4- ANNEXES

Injection de dépendance : Cela permet de créer les instances des objets et de lier les objets entre eux sans pour autant
                          les modifier directement, et que les class ne soient pas dépendantes entre elles en utilisant le design patern Factory.
                          On peut également encore plus facilité le couplage entre nos classe avec une interface.

                          Service Container : Un container est une sorte de grosse Factory permettant de facilité l'usage de l'injection de dépendance et
                                              également de l'utiliser à plus grande échelle. 
                                              Tout les objets générés par un container deviennent ainsi des services car toute les instances sont accessible.

Sources : https://putaindecode.io/articles/injection-de-dependances-en-php/


                                              



