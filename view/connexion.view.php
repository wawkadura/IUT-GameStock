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

                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <p style='color:red'> <?=$erreur ?></p>
            </form>
        </div>
    </body>
</html>
