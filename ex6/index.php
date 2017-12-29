<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 6</title>
    </head>
    <body>
        <?php
        if (empty($_POST)) { //tester si une variable est vide
            ?>
            <form action="index.php" method="post">
                <select name="genre">
                    <option value="monsieur">Monsieur</option>
                    <option value="madame">Madame</option>
                </select>
                <label>Nom : </label><input type="text" name="nom" />
                <label>Prenom : </label><input type="text" name="prenom" />
                <input type="submit" value="Envoyer" />
            </form>
            <?php
            echo 'Veuillez remplir le formulaire';
        } else {
            if (isset($_POST)) { //tester l'existance des paramètres.
                echo 'Bonjour ' . $_POST['genre'] . ' ' . $_POST['nom'] . ' ' . $_POST['prenom'];
            }
        }
        ?>
    </body>
</html> 
