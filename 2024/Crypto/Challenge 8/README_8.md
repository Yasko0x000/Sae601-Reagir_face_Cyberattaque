# Titre : La réunion secrète

# Catégorie : Crypto

## Équipe : Crypto

## Personnes : Guillaume B

## Description - Énoncé : La réunion secrète

Juin 1915, vous faîtes toujours partie de l'équipe de télécommunications de l'armée allemande, et vous venez de recevoir un message d'un espion infiltré dans les forces de résistance francaise qui doit contenir l'heure précise à laquelle leur chef va organiser une réunion clandestine dans catacombes de Paris.
Le chiffrement UBCHI a été rendu inefficace depuis plusieurs mois mais heuresement, quelques ingénieurs sacrément *kluge* ont mis en place le système de chiffrement actuellement utilisé.
Le message reçu est : JGGXNXJ SPEZWEZ DVGTGGII JZKVIWF GVNOGNT.
L'équipe d'intervention attend vos informations pour se préparer, à quelle heure vont-ils devoir intervenir ?

# Solution :

Le message encrypté fait 36 caractères, le code étant KLUGE, la division euclidienne de 36 par 5 donne 7 avec un reste de 1, donc le tableau aura 5 colonnes, une première de 8 caractères et 4 autres de 7 caractères.
On place les différents mots en colonne, dans l'ordre des alphabétique des lettres de KLUGE, le premier mot dans la 5eme colonne, le deuxième mot dans la 4ème colonne, le troisième mot dans la 1ère colonne, etc.

KLUGE
34521

DJGSJ
VZVPG
GKNEG
TVOZX
GIGWN
GWNEX
IFTZJ
I

On peut maintenant récupérer une chaine de caractères en lisant le tableau ligne par ligne.
On passe la chaîne de caractères par le chiffrement de Vigenère (en soustraction), qui utilise le code ABC dans ce cas de figure donné ici :

DJGSJVZVPGGKNEGTVOZXGIGWNGWNEXIFTZJI
=>
ABCABCABCABCABCABCABCABCABCABCABCABC
=>
DIESITZUNGFINDETUMZWEIFUNFUNDVIERZIG

# flag : DIE SITZUNG FINDET UM ZWEI FUNF UND VIERZIG (qui se traduit par "La réunion aura lieu à 14h45")

# Docker (Merci de commenter votre Dockerfile):

- [ ] oui :
- [x] non