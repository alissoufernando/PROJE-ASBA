<!DOCTYPE>
<html>
    <head>
        <title>
    Inscription ASBA
        </title>
<meta charset="utf-8">
<link href="asbastyle.css" rel="stylesheet">
    </head>
    <body>
        <?php
include("en_tete.html");
?>
        <fieldset class="fildset">
            <legend class="legend"> Enregistrement</legend>
        <div class="inscrip">
            Inscrivez-vous ici! 
            <form method="post" action="formulaire.php">
            <input class="bouton" type="number" id="num" name="num" alt="numero" required placeholder="Numero de téléphone" maxlengh="20" size="30"/> <br><br>
            <input class="bouton" type="password" id="motpasse" name="motpasse" alt="mot de passe" required placeholder="mot de passe" size="20" maxlength="30"/><br><br>
            <input class="bouton" type="password" id="confimpass" name="confirmpass" alt="confirmer mot de passe" required placeholder="Confirmation de mot de passe" maxlength="20" size="30"/><br><br>
            <input class="bouton1" type="submit" value="Inscription"/>
            </form>
            </div>
        <div class="connect">
               <form method="post" action="inscrire.php">
                Connectez-vous ici!
            <input class="bouton" type="number" id="numero" name="numero" alt="numero" required placeholder="Numero Matricul" maxlengh="20" size="30"/> <br><br>
            <input class="bouton" type="password" id="motpass" name="motpass" alt="mot de passe" required placeholder="mot de passe" size="20" maxlength="30"/><br><br>
            <input class="bouton1" type="submit" value="Connection"/> 
            </form>
               </form>
        </div>
            </fieldset>
        <?php
        include("pied_page.php");
        ?>
    </body>
</html>