<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 5</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <select name="choix">
                <option value="choix1">Monsieur</option>
                <option value="choix2">Madame</option>
            </select>
            <label>Nom : </label><input type="text" name="nom" />
            <label>Prenom : </label><input type="text" name="prenom" />
            <input type="submit" value="Envoyer" />
        </form>
    </body>
</html>
