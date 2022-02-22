<html>
    <head>
        <title></title>
    </head>
    <body>
        <center><br><br><br>
            <img src="23059-bubka-smileyembarrassed.png" alt="Pas de message privé" title="Pas de message">
            <p style="font-size: 30px;font-family: Berlin Sans FB Demi;color: blue;">!!Désolé!!</p>
            <p style="font-size: 22px;font-family: Bodoni MT Condensed;">!Vous n'avez aucun Contact dans nos bases de données cliquer sur démarré en bas pour sauvegarder votre premier contact</p>
            <br><center><a href="#infos" id="mona" data-toggle="modal"><div class="deplace"  style="color:#fff;font-size: 16px;font-family: forte;">Démarrer</div></a></center>
            
<div class="modal fade" id="infos" role="dialog" arialabelledby="modalTitre" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"
aria-hidden="true">x</button>
<h4 id="modalTitre" class="modal-title"> Sauvegarder vos contacts...</h4>
</div>
<div class="modal-body" style="background: ;">
<blockquote><center>
<form action="traitementcontact.php" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="Saisissez le nom de la personne" minlength="1" accesskey="k" select="selected" name="nom"><br>
    <input type="tel" placeholder="Saissizez le contact" minlength="5" name="tel"><br>
    <input type="email" placeholder="Saisissez sont adress email" name="email">
    <hr> <p class="p3" style="color:#000;">Information complémentaire</p> <hr>
    <input type="number" placeholder="Rue N°" name="rue"><br>
    <input type="text" placeholder="Quatier" name="quartier"><br>
    <input type="text" placeholder="Ville" name="ville"><br>
    <input type="number" placeholder="Boite Postale" name="postal"><br>
    <input type="text" placeholder="Etat" name="etat"><br>
    <input type="text" placeholder="Pays" name="pays"><br>
     <div class="input-file-container">  
        <input class="input-file" id="my-file" type="file" name="monfichier">
        <label tabindex="0" for="my-file" class="input-file-trigger">Selectionez le profil</label>
        </div>
        <p class="file-return"></p><br>
        <button type="submit" class="button1">Soumettre</button>
    </form></center>
<small class="pull-right">Enregistré</small>
</blockquote>
</div>
</div>
</div>
</div>
       
        </center>
        
        
        
    </body>
</html>