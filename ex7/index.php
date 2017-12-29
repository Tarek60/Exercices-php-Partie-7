<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 7</title>
    </head>
    <body>
        <?php
        if (empty($_POST)) { //tester si une variable est vide
            ?>
            <form action="index.php" method="post" enctype="multipart/form-data">
                <select name="genre">
                    <option value="monsieur">Monsieur</option>
                    <option value="madame">Madame</option>
                </select>
                <label>Nom : </label><input type="text" name="nom" />
                <label>Prenom : </label><input type="text" name="prenom" />
                <input type="file" name="monfichier" />
                <input type="submit" value="Envoyer" />
            </form>
            <?php
            echo 'Veuillez remplir le formulaire';
        } else {
            if (isset($_POST)) { //tester l'existance des paramètres.
                echo 'Bonjour ' . $_POST['genre'] . ' ' . $_POST['nom'] . ' ' . $_POST['prenom'] . ' ' . $_FILES['monfichier']['name'];
            }
        }
        ?>
    </body>
</html> 
