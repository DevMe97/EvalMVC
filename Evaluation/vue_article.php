<!-- 1 Créer une structure PHP MVC permettant d’ajouter un article à la base données ticket :
Qui va comprendre les dossiers et fichiers suivants :
-Controler (fichier : controler_article.php),
-Vue (fichier : vue_article.php le formulaire devra être en method post et action=’’’’ ou
action= «../controler/controler_article.php »),
-Model (fichier : model_article.php requête SQL préparé),
-Utils (fichier : connect_bdd.php).
2 Uploader votre structure PHP MVC sur un repository github public (l’ensemble des dossiers et
fichiers).
3 Faire parvenir le lien de votre repository github au formateur en message privé sur discord.
NB : si dans les 30 minutes vous n’avez pas le temps de créer un repository git et -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eval</title>
</head>
<body>
    <h3>Enregistrement un article</h3>
    <form action="" method="post">
        <label>Création article</label>
        <input type="text" name="nom_article" placeholder="entrez votre article">
        <input type="number" name="prix_article">
        <input type="submit" name="Ajouter">
    </form>