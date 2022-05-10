## Présentation :

Bonjour et Bienvenu sur mon Projet Laravel : 

#Life-Style Blog  

Ce projet a été réalisé seul afin de développer et élargir mes compétence dans le back-end d'où le fait que le front-end ne soit pas trés soigné/designé.

## Objectif : 

Mon objectif a été de faire un site sous le framework laravel en moins d'une semaine (Pour une entreprise que j'aimerais intégrer j'ai donc du vite réaliser ce projet et je me suis accordé un délais de 1 semaine)

1 - Faire la parti vente de sneakers :
2 - Faire une parti poste d'article sur du life-style et le Rap
3 - Faire une interface avec du JavaScript tel que celle du site web Paume.Paris pour présenter leurs projets 

## Ce que l'on peux faire sur ce site : 

- Se Register, Login, Logout
- Ajouter des élements : Vente de sneakers , Articles et Projet vidéo de Paume.
- Supprimer des sneakers pour les admins (seulement sur la page sneakers/"id de la sneakers")
- Filtrer les produits sneakers par leurs marques ou les articles par leurs type 
- En tant qu'Admin nous avons un Header/Navbar propre aux Admin pour pouvoir ajouter des sneakers/Articles/Vidéo 

Pour mettre un user en Admin : `UPDATE users SET role ='admin' WHERE id = "id de l'user voulu" ;`

## Éléments que j'aurais aimé ajouter : 

- Gestion des erreurs : Login, Register, Admin et ect...
- Modification d'éléments comme changer le prix d'une sneakers ou le titre d'un article...
- Filtre sur les Vidéo Paume.
- Beaucoup de JavaScript avec des animations 
- Du Vue.js 
- Faire un Panier pour achat de produits et un système de like 
- Beaucoup de choses que j'aimerais apprendre à faire 

## Lancer le projet : 

`php artisan serve`

lancez le lien et dans la barre de recherche faites un /register pour vous inscrire.
pour accéder au contenus admin aller dans la Data base puis mettez votre user en admin avec `UPDATE users SET role ='admin' WHERE id = "id de l'user voulu" ;`

Vous aurez accés au différentes pages plus rapidement via le header. 

dans les routes/web.php vous aurez toutes les différentes routes et ceux qu'elles font.

## Merci d'avoir pris le temps de lire mon projet !  
