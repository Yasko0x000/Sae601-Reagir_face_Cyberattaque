# Titre : La phrase secrète

# Catégorie : Crypto

## Équipe : Crypto

## Personnes : Guillaume B

## Description - Énoncé :

Novembre 1913, vous faîtes partie de l'équipe de télécommunications de l'armée allemande, et vous venez de recevoir le message quotidien qui contient le mot de passe super secret qui va être utilisé pendant la journée pour les communications entre les dirigeants.
Le message est : DGNEIGCENLITBNEELFEIIIRESRAIHB et la clé de ce mois ci mois est : BERLIN.
Vous devez rapidement déchiffrer le "drapeau", qui est le nom de code pour la phrase secète.

# Solution :

On associe chaque lettre de la clé à un indice (par ordre alphabétique):
B E R L I N
1 2 6 4 3 5

Les lignes doivent faire la taille de la clef : 6 caractères.
La phrase en fait 30, on a donc des colonnes de 5 caractères.
Le premier groupe de 5 lettres est la première colonne, le deuxième est la deuxième colonne, le troisième est la 6ème colonne, ...
\-> on suit l'ordre des lettres de la clé pour reconstruire le tableau :
D G I E R I
G C I L A T
N E R F I B
E N E E H N
I L S I B E

On prend ensuite le tableau ligne par ligne et on insère les caractères dans un nouveau tableau, dans l'ordre des lettres du code :
On a donc les 5 premières lettres de la première ligne dans la première colonne, la 6ème lettre dans la colonne 2 (puisque la deuxième lettre à l'indice 2). Puis on prend les 5 lignes de la ligne 2, on remplit la colonne 2 avec et les 2 lettres qui restent dans la colonne 6 (puisque la troisième lettre a l'indice 6), etc jusqu'à avoir un nouveau tableau de 5x6.

B E R L I N
1 2 6 4 3 5

D I E F L A
G G E I S T
I C H B I N
E I N E B E
R L I N E R

On peut lire ici : DIE FLAGGE IST ICH BIN EINE BERLINER

# flag : DIE FLAGGE IST ICH BIN EINE BERLINER

# Docker (Merci de commenter votre Dockerfile):

- [ ] oui :
- [x] non