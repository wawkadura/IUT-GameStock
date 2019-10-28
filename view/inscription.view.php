<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../view/design/connexion.style.css" media="screen" type="text/css" />
    <title></title>
  </head>
  <body>
        <div id="container">
            <!-- zone de connexion -->

            <form action="verif.ctrl.php?verif='inscription'" method="POST">
                <img src="../model/data/icons/logo2.png" />
                <br>

                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrer le nom " name="Nom" required>

                <label><b>Prénom</b></label>
                <input type="text" placeholder="Entrer le prenom" name="Prenom" required>

                <label><b>pseudo</b></label>
                <input type="text" placeholder="Entrer le pseudo" name="pseudo" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <label><b>Confirmer mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="ConfirmPassword" required>

                <label><b>Email</b></label>
                <input type="email" placeholder="Entrer l'adresse mail" name="password" required>

                <input type="submit" id='submit' value='SIGN UP' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>

            </form>
        </div>
    </body>
</html>
