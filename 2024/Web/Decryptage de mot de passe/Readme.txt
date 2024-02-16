Titre : Decryptage de mot de passe, Javascript
Catégorie : WEB
Équipe : WEB
Personnes : Ferreira Enzo

Description - Énoncé :

Lors de ce challenge l'utilisateur est face à une page web comme la précédente, qui demande un mot de passe pour acceder au flag. Le mot de passe est légérement plus complexe et serait plus compliqué à obtenir en bruteforce. Il faut donc trouver un autre moyen d'obtenir le mot de passe.


Solution :

Ici le mot de passe est plus complexe mais il est trouvable sur la page web. Pour le trouver il faut faire un Ctrl+U pour accèder au code source de la page, on pourra y trouver le hachage du mot de passe en SHA-256, en trouvant un convertisseur sur internet on peut déchiffrer le code et obtenir le mot de passe. 

Javascript est résponsable de cette erreur de sécurité car il s'éxecute du cotés client et pas cotés serveur, il est donc possible de trouver le mot de passe dans le code source.