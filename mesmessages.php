<!DOCTYPE html>
<html>
    <head>
        <title>Page inscription</title>
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/input-style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
        <meta charset="utf-8" />
        <!--[if lt IE 9]>;
<script
src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    </head>
    <body>
<?php
include ('connect.php');
$reponse = $bdd->prepare('SELECT * FROM messagep WHERE
cookie = ?');
$reponse->execute(array($_COOKIE['nom']));
while ($donnees = $reponse->fetch())
{
?>
<div class="div" style="width:300px;text-align:justify;"><div style="background:silver;font-weight:bold;text-align:center;"><?php echo $donnees['cookie'];?> </div><?php echo $donnees['message'];?> </div>
<?php
}
$reponse->closeCursor();
?>
<nav>
<form method="post" action="#" id="forcom">
<input type="text" style="width:500px;height:40px;border:1px solid blue;border-radius:10px;"required name="message" id="message">
<img src="camera-loader.gif" style="display:none;" id="loader">
<button class="fa fa-send" style="z-index:1000;cursor:pointer;" type="submit" id="send"></button></form>
<div id="instance"></div>
<div id="error" style="display:none;">Veillez renseigner les données </div>
<script>
$(function() { afficheConversation();
$('#send').click(function() {
$('#loader').show();
var message = $('#message').val();
if (!message){
	$('#error').show('slow');
}else{
$.post('save.php', {'message': message }, function() {afficheConversation;
});	
}
$('#loader').hide();
});
function afficheConversation() {
$('#conversation').load('mesmessages.php').fadeIn();
$('#message').val('');
$('#message').focus();
}
});
</script>
</body>
</html>