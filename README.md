# TD - SYMFONY

## Description

1. Initialiser le .env.local avec tes identifiants de base de donnée
2. Créer ta base de donnée en local
3. Créer l'entité User avec (firstname, lastname, age)
4. Créer l'entité Article avec (title, content, created_at)
5. Créer l'entité Category avec (name)
6. Ajouter la relation la bonne relation entre User <-> Article et Article <-> Category.
7. Jouer les migrations
8. Mettre en place un CRUD complet pour User et Article 
9. Ajouter 4 Categories directement en base de donnée 
10. Créer une homepage "/" qui affiche une liste d'articles où les premiers actricles que l'on voit doivent être les dernières parutions
11. Ajouter une navbar avec homepage, user, category, new article
12. Dans la navbar "user" redirige vers une liste de users où pour chaque user on a les informations du user et 2 CTA (articles, show) + en bas de la liste ajouter 1 CTA (ajouter)
13. Le CTA arlicles affichera les articles de cette utilisateur.
14. Le CTA show affichera les infos de l'utilisateur et en bas 2 CTA (edit et delete).
15. Dans la navbar "category" est un dropdown qui affiche la liste des categories, lorque l'on clique sur une catégorie on est redirigé vers la liste des articles de la categorie.
16. Dans la navbar "new article +" renverra vers le formulaire d'ajout d'un article.
17. Sur l'affichage d'un article, il faut qu'il soit dans une card avec en haut son titre. En dessous du titre, la première lettre du nom de famille suivi d'un point et prénom de l'auteur (D. John) et la date de parution (22/03/2020). En dessous du user la catégorie (Category: category_name). Ensuite le contenu. Et en dessous un bouton (show) pour voir l'article.
18. Dans la vu de l'article récupérer le même affichage et en bas de l'article ajouter 2 CTA (Edit, Delete)
